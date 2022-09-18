@extends('Admin')

@section('title')
    <title>Create Nieuws</title>
@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <h1>Nieuws Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active"><a href="/nieuws">Nieuws</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">

            <div class="row">
                <div class="col-md-8 float-left">
                    <form method="POST" enctype="multipart/form-data" action="{{url('/nieuws/store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input autocomplete="off" id="title" name="title" class="form-control" required>
                                    @error('title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="title" class="form-label">Title url</label>
                                    <input autocomplete="off" id="title" name="title_url" class="form-control" required>
                                    @error('title_url')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Intro</label>
                                    <textarea id="short_description" name="intro" class="form-control" rows="8" required></textarea>
                                    @error('description')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Story</label>
                                    <textarea id="description" name="story" required >


                                  </textarea>
                                    @error('blog_content')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>



                                <div class="mb-3">
                                    <label for="title" class="form-label">Source</label>
                                    <input autocomplete="off" id="title" name="source" class="form-control" required>
                                    @error('source')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Media</label>
                                    <input autocomplete="off" id="title" name="media" class="form-control" required>
                                    @error('media')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="image" class="form-label">SEO Keyword</label>
                                    <textarea id="image" name="seo_keyword" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">SEO Meta Description</label>
                                    <textarea id="image" name="seo_meta" class="form-control" ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="stad_regio" class="form-label">Provincie</label>
                                    <select name="provincie" id="stad_regio" class="form-control" required="">
                                        @foreach($provincies as $item)
                                        <option value="{{$item->id}}">{{$item->provincie}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="stad_regio" class="form-label">Regio</label>
                                    <select name="regio" id="stad_regio" class="form-control" required="">
                                        @foreach($regios as $item)
                                            <option value="{{$item->id}}">{{$item->regio}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="stad_regio" class="form-label">Stad</label>
                                    <select name="stad" id="stad_regio" class="form-control" required="">
                                        @foreach($stads as $item)
                                            <option value="{{$item->id}}">{{$item->stad}}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>



                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>

            </div>

        </section>
    </div>



@endsection

