<?php
require_once('header.php');
?>
<style>
  #result{
			height: 200px;
			border: 1px solid #ccc;
			padding: 10px;
			box-shadow: 0 0 10px 0 #bbb;
			margin-top: 70px;
			margin-bottom: 20px;
			font-size: 14px;
			line-height: 25px;
      width:80%;
		}
    #title{
      height: 50px;
			border: 1px solid #ccc;
			padding: 10px;
			box-shadow: 0 0 10px 0 #bbb;
			margin-bottom: 30px;
			font-size: 14px;
			line-height: 25px;
      width:80%;
    }
    div{
      padding:20px;
    }
		.rec{
			font-size: 20px;
			position: absolute;
			top: 150px;
			left: 50%;
		}
    form{
      text-align: center;
    }
</style>  
    <form action="../backend/add_lecture.php" method="post" enctype="multipart/form-data" >
      <h3 align="center">New Lecture - Upload </h3>
      <!-- <textarea id="result" name="lecture"></textarea>
      <button type="button" onclick="startConverting();" class="rec"><i class="fa fa-microphone btn btn-danger"></i></button> -->
      <div>
      <input type="text" name="title" id="title" placeholder="Enter Lecture Title"  >
      <p>Choose Lecture video</p>
      <input type="file" name="slide" id="title"  accept=".mp4,.ogg,.ogg"  >
      <p>Choose Lecture Translate</p>
      <input type="file" name="translate" id="title"  accept=".vtt"  >
      <button type="submit" name="save" class="btn btn-primary btn-block save">Save Lecture</button>
      </div>
    </form>
<script>
  
  var result = document.getElementById('result');
  
  function startConverting () {

  if('webkitSpeechRecognition' in window) {
    var speechRecognizer = new webkitSpeechRecognition();
    speechRecognizer.continuous = true;
    speechRecognizer.interimResults = true;
    speechRecognizer.lang = 'en-US';
    speechRecognizer.start();

    var finalTranscripts = '';

    speechRecognizer.onresult = function(event) {
      var interimTranscripts = '';
      for(var i = event.resultIndex; i < event.results.length; i++){
        var transcript = event.results[i][0].transcript;
        transcript.replace("\n", "<br>");
        if(event.results[i].isFinal) {
          finalTranscripts += transcript;
        }else{
          interimTranscripts += transcript;
        }
      }
      result.innerHTML = finalTranscripts + interimTranscripts;
    };
    speechRecognizer.onerror = function (event) {

    };
  }else {
    result.innerHTML = 'Your browser is not supported. Please download Google chrome or Update your Google chrome!!';
  }	
  }
</script>


<?php
require_once('footer.php');
?>