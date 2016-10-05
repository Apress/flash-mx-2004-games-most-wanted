class MusicButtonClass extends MovieClip {

	public var wave_param:String;
	public var label_param:String;
	public var linkage_param:String;
	private var waveMovie:MovieClip;
	private var playing:Boolean;
	private var musicObject:Object;

	function MusicButtonClass() {
		this.init();
		this.setTextLabel(this.label_param);
		this.waveMovie = eval(this.wave_param);
		this.createMusicObject();
		this.playing = false;
		this.setButton(false);
		if (_global.MusicButtonList == undefined) {
			_global.MusicButtonList = new Array();
		}
		_global.MusicButtonList.push(this);
		this.onRelease = function() {
			if (this.playing) {
				this.stopMusic();
			} else {
				this.playMusic();
			}
		};
	}
	
	private function createMusicObject():Void {
		this.musicObject = new Sound(this);
		this.musicObject.attachSound(this.linkage_param);
		this.musicObject.callBack = this;
		this.musicObject.onSoundComplete = function() {
			this.callBack.stopMusic();
		};
	}
	
	private function setButton(b:Boolean):Void {
		this.button_lit._visible = b;
	}
		
	private function setTextLabel(t:String) {
		this.label_txt.text = t;
	}
	
	private function playMusic():Void {
		for (var i = 0; i < _global.MusicButtonList.length; i++) {
			_global.MusicButtonList[i].stopMusic();
		}
		this.musicObject.start(0, 1);
		this.setButton(true);
		this.playing = true;
		this.waveMovie._visible = true;
	}
	
	private function stopMusic():Void {
		this.musicObject.stop();
		this.setButton(false);
		this.playing = false;
		this.waveMovie._visible = false;
	}
	
}