@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form 
                        action="{{ route('posts.store')}}" 
                        method="post"
                        enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label for="title">Title *</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title"
                                class="form-control"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input 
                                type="file" 
                                name="file" 
                                id="file"
                            >
                        </div>
                        <div class="form-group">
                            <label for="body">Body *</label>
                            <textarea 
                                name="body" 
                                id="body"
                                rows="6"
                                class="form-control"
                                required
                            ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="iframe">Embeded Content</label>
                            <textarea 
                                name="iframe" 
                                id="iframe"
                                class="form-control"
                            ></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input 
                                type="submit" 
                                value="Save" 
                                class="btn btn-sm btn-primary"
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
