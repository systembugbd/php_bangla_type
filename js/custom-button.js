
function addScript( src,callback) {
  var s = document.createElement( 'script' );
  s.setAttribute( 'src', src );
  s.onload=callback;
  document.body.appendChild( s );
}

function activeKeyBoard(keyValue){
 var showMsg = document.getElementById('keyBoardMsg');
 
  showMsg.innerHTML ="English Int. is active Now";    

//var editorattr = editorBangla.getAttribute('aria-hidden');

          if(keyValue=='bvkphonetic'){
              showMsg.innerHTML="Phonetic is active Now";
              makePhoneticEditor("shahebBanglaType");
              

          }else if(keyValue=='bvkinscript'){
               showMsg.innerHTML="Inscript is active Now";
               makeInscriptEditor("shahebBanglaType");
               

          }else if(keyValue=='bvkunijoy'){
                showMsg.innerHTML="Unijoy is active Now";          
                makeUnijoyEditor("shahebBanglaType");
                     

          }else if(keyValue=='bvkprobh'){
              showMsg.innerHTML="Probhat is active Now";   
                makeProbhatEditor("shahebBanglaType");
              
                 

          }else if(keyValue=='bvkphonetici'){
                showMsg.innerHTML="Phonetic Int. is active Now";     
                makePhoneticiEditor("shahebBanglaType");
                 

          }else if(keyValue=='bvkavro'){
               showMsg.innerHTML="Avro is active Now"; 
               //OmicronLab.Avro.Phonetic();
          } 
          else if(keyValue=='bvkenglish'){
               showMsg.innerHTML="English Int. is active Now";      
          } 
 }  
