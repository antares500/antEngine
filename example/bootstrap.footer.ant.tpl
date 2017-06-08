
<div class="k u">
	<div class="e">
		<div class="c">
			{!! foreach($footer['menu'] as $list_title => $list): !!}
			<div class="fn ahs">
				<ul class="ek azv">
					<li><h6 class="ayt">{{list_title}}</h6></li>
					{!! foreach($list as $item): !!}
					<li>{{item}}</li>
					{!! endforeach; !!}
				</ul>
			</div>
			{!! endforeach; !!}
			 <div class="fr">
				<h6 class="ayt">About</h6>
				<p>{{{footer.about}}}</p>
			</div>
		</div>
	</div>
</div>


		<script src="//bootstrap-themes.github.io/marketing/assets/js/jquery.min.js"></script>
		<script src="//bootstrap-themes.github.io/marketing/assets/js/tether.min.js"></script>
		<script src="//bootstrap-themes.github.io/marketing/assets/js/toolkit.js"></script>
		<script src="//bootstrap-themes.github.io/marketing/assets/js/application.js"></script>
	</body>
</html>