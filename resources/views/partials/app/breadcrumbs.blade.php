

<div class="container">
	<div class="row">
		<div class="col">
			<div class="home_content">
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li>
							<a href="{{ route('root') }}">Home</a>
						</li>
						@if (isset($object->parent))
						<li>
							<a href="{{ $object->parent->link }}"> / {{ $object->parent->title }}</a>
						</li>
						@elseif (isset($object->category))
						<li>
							 <a href="{{ $object->category->link }}"> / {{ $object->category->title }}</a>
						</li>
						@endif
						<li class="is-active">
							 <a href="{{ url()->current() }}}" aria-current="page"> / {{ $object->title }}</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
