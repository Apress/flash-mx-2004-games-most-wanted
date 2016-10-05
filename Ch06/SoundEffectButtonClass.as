class SoundEffectButtonClass extends MovieClip {

	public var label_param:String;
	public var text_param:String;
	public var linkage_param:String;
	private var textMovie:MovieClip;
	private var musicObject:Object;

	private function SoundEffectButtonClass() {
		this.setTextLabel(this.label_param);
		this.textMovie = eval(this.text_param);
		this.createMusicObject();
		this.setButton(false);
		this.onRelease = function() {
			this.playEffect();
		};
	}
	
	private function createMusicObject():Void {
		this.musicObject = new Sound(this);
		this.musicObject.attachSound(this.linkage_param);
		this.musicObject.callBack = this;
		this.musicObject.onSoundComplete = function() {
			this.callBack.stopEffect();
		};
	}
	
	private function setButton(b:Boolean):Void {
		this.button_lit._visible = b;
	}
		
	private function setTextLabel(t:String):Void {
		this.label_txt.text = t;
	}
	
	private function playEffect():Void {
		this.musicObject.start(0, 1);
		this.setButton(true);
		this.textMovie._visible = true;
	}
	
	private function stopEffect():Void {
		this.musicObject.stop();
		this.setButton(false);
		this.textMovie._visible = false;
	}
	
}