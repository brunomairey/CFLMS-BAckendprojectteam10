<style>
	

@media screen and (max-width: 600px) {
  .footerlink{
 width:5vh; height:5vh;
}
}
@media screen and (min-width: 601px) {
  .footerlink{
    width:3.25vw;
    height:3.25vw;
  }
}
.social:hover > a {
  opacity: 0.5}

.social:hover img:hover {
  opacity: 1; 
  background: white;
  /*width: 100%;*/
  margin: 0 auto}

</style>
<footer  class="mt-0 p-4" style="width:100%; display: flex; flex-direction: column; color:white;background-color: #135887;">

	<div class="main-footer justify-content-center" style="background-color: #135887;">

		<div id="socialbuttons" style="display: flex; flex-direction: row; justify-content: center;">
			<div class="social icon m-2">
				<a href="https://www.facebook.com/entrepeneursforfuture" title="facebook-icon" >
					<img src="<?php echo $facebookfooter ?>" class="footerlink">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.instagram.com/entrepeneursforfuture/" title="instagram-icon" >
					<img src="<?= $instafooter ?>" class="footerlink">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.twitter.com/eff_future" title="twitter-icon" >
					<img class="footerlink" src="<?= $twitterfooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.youtube.com/channel/UCg9d_0n7Kt16JbBPZKvMacQ" title="youtube-icon" >
					<img class="footerlink" src="<?= $youtubefooter ?>">
				</a>
			</div>
			<div class="social icon m-2">
				<a href="https://www.linkedin.com/company/entrepeneurs-for-future/" title="linkedin-icon" >
					<img class="footerlink" src="<?= $linkedinfooter ?>">
				</a>
			</div>
		</div>
		<div class="pt-4" id="footertext" style="display: flex; flex-direction: column; text-align: center;">
			<h5>&copy; 2020 Entrepeneurs For Future </h5><br>
			 <p>ALLE INHALTE UNTERLIEGEN ÖSTERREICHISCHEM URHEBERRECHT.</p><p><strong> <a href="<?php echo $impressum ?>" style="color:white;"> IMPRESSUM |</a> <a href="<?php echo $datenschutz ?>" style="color:white;"> DATENSCHUTZ</a> | <a href="<?php echo $loginadmin ?>" style="color:white;">ADMIN ACCESS</a></strong></p>
		</div>
		
</div>
</footer>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>