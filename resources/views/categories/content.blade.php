<main role="main">

<div class="container">
    <h1 class="jumbotron-heading">Categories</h1>
</div>

<div class="album py-5 bg-light">
    <div class="container">
    <div class="row"> 
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2>
                        {{ $category->title }}
                    </h2>
                    <p class="card-text">
                        {{ $category->description }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="categories/{{ $category->id }}" class="btn btn-sm btn-outline-secondary">Start</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
</div>
</main>