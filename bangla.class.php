<?php
/**
* 
*/
class BanglaType {
	 
	public function init(){
 
	$contexts = '<input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;" value="bvkphonetic" title="Title এ বাংলা লেখার জন্য"> <b>Phonetic</b> 
 					
 					<input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;" value="bvkinscript" title="Textarea তে বাংলা লেখার জন্য"> <b>Inscript </b>

                	<input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;" value="bvkunijoy" title="Textarea তে বাংলা লেখার জন্য"> <b>Unijoy  </b>

                 	<input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;"  value="bvkprobh" title="Textarea তে বাংলা লেখার জন্য"> <b>Probhat	 </b>			
					
					<input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;" value="bvkphonetici" title="Textarea তে বাংলা লেখার জন্য"> <b>Phonetic Int. </b>

                 	<input type="radio" name="layoutGrp"  onclick="switched=true;" value="bvkenglish" checked title="Textarea & Text তে বাংলা লেখার জন্য"> <b>English </b>';
	 
			return $contexts;
  	}


 	public function addForm() {
 
		$form = "<div>
 				
		   <h2>এখানে বাংলা টাইপ করুন আপনার পছন্দসই কিবোর্ড সিলেক্ট করে, যেটা আপনি জানেন</h2>
	 		<form name='editorform' >
	 			

				<fieldset>
				";
				$form .= $this->init();
				$form .="<legend>বাংলা টাইপের বাধাহীন সম্ভাবনা নিয়ে এল এক্সামরুম.কম</legend>

	                     <textarea name='shahebBanglaType class='form-control' id='shahebBanglaType' cols='90' rows='15' ></textarea>
	            </fieldset>
	            <br />
 
		       </form>
 		</div>";
 	return $form;

	} 
 
	public function addJs(){
	$js= "<script src='js/jquery-core.js'></script>
		<script src='js/custom-button.js'></script>
		<script src='js/inscriptunicode.js'></script>
		<script src='js/phonetic_int.js'></script>
		<script src='js/phoneticunicode.js'></script>
		<script src='js/probhatunicode.js'></script>
		<script src='js/avro-v1.1.4.min.js'></script>
		<script src='js/unijoy.js'></script>";
		return $js;
	}

public function addCss(){

	$css = '<style type="text/css">
			 
 
		 </style>';

			return $css;
	}
 
}

$bangla = new BanglaType();
 
 // <input type="radio" name="layoutGrp" onclick="activeKeyBoard(this.value);switched=false;" value="bvkavro" title="Textarea তে বাংলা লেখার জন্য"> <b>Avro 1.1.4 </b>