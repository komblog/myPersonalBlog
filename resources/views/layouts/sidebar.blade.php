
<h4>Archives</h4>
<ol class="list-unstyled">
	@foreach($archives as $archive)	
		<div class="post-preview">			
			<li><a href="/?month={{$archive['month']}}&year={{$archive['year']}}">
			  	{{ $archive['month'] . ' ' . $archive['year'] }}</a>
			</li>		  			
		</div>
	@endforeach
</ol>
<hr>
<h4>Tags</h4>
<ol class="list-unstyled">
	@foreach($tags as $tag)	
		<div class="post-preview">			
			<li>
				<a href="/post/tag/{{ $tag }}"> {{ $tag }} </a>
			</li>				
		</div>
	@endforeach
</ol>