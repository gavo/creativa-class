<?php
    $key = 'AIzaSyDQTJuTfyWJ_uojcS-kAuxVZ5aKuXuFDjs';
    $channel = 'UCcPAIcZtwdYUvPg-_DQ5O9w';
	
	function orderList($a, $b) {
		return strcmp($a->snippet->title, $b->snippet->title);
	}


    require_once('../config.php');
	$PAGE->set_context(context_system::instance());
    $urlparams = array('id' => -1);
	$url = new moodle_url('/tutoriales/index.php', $urlparams);
	$PAGE->set_url($url);
	$PAGE->set_pagelayout('standard');
	if($PAGE != null && $SITE != null && $SITE->fullname != null){
		$PAGE->set_title($SITE->fullname);
	}
    
    
    if(!isset($_GET['list'])|| !isset($_GET['title'])){        
	    $PAGE->set_heading('Tutoriales disponibles');
	    echo $OUTPUT->header();
        echo '<div class="gvm-playlists-youtube">';
        $playlist = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlists?channelId='.$channel.'&part=snippet&key='.$key.'&maxResults=100'));
        usort($playlist->items, "orderList");
		foreach($playlist->items as $list){
            echo '<a href="/tutoriales/?list='. $list->id.'&title='.$list->snippet->title. '" class="btn btn-primary gvm-playlist-yt-button">'.$list->snippet->title.'</a>';
        }
        echo "</div>";
    }else{
		?>'<script>
				function buscarVideo() {
				  var input, filter, divVideo, h4, i, txtValue;
				  input = document.getElementById("myInput");
				  filter = input.value.toUpperCase();
				  divVideo = document.getElementsByClassName("divVideo");
				  for (i = 0; i < divVideo.length; i++) {
					h4 = divVideo[i].getElementsByTagName("h4")[0];
					txtValue = h4.textContent || h4.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						divVideo[i].style.display = "";
					} else {
						divVideo[i].style.display = "none";
					}
				  }
				}
			</script>
		<?php
	    $PAGE->set_heading($_GET['title']);
	    echo $OUTPUT->header();
		echo '<div>Título del Video&nbsp<input style="min-width:300px;"type="text" id="myInput" onkeyup="buscarVideo()" placeholder="Buscar">&nbsp</div>';
        echo '<div class="gvm-video-list">';
        $json_videos = 'https://www.googleapis.com/youtube/v3/playlistItems?'.'key='.$key.'&part=snippet&playlistId='.$_GET['list'].'&maxResults=100';
        $videos = json_decode(file_get_contents($json_videos));            
	    usort($videos->items, "orderList");
		foreach ($videos->items as $video) {
			echo '<div class="gvm-video-container">
		    	<iframe class="gvm-frameVideo" src="https://www.youtube.com/embed/'.$video->snippet->resourceId->videoId.'?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h5><strong>'.$video->snippet->title.'</strong></h5><br><br></div>';
		}
        echo "</div>";
        echo '<a href="/tutoriales/ "class="btn btn-primary">Volver</a><br>';
    }

    echo $OUTPUT->footer();
?>

    