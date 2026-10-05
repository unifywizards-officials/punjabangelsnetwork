<div id="contactform">

    <form method="POST" action="{{route('manage-page.store')}}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="page_type" name="page_type" value="6">

        <div class="form-group">
            <label>Page Name</label>
            <input type="text" class="form-control" name="page_name" placeholder="Enter Page Name"
                value="{{ old('page_name') }}" required>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">1. Top Section</h5>

        </div>
        <div class="form-group">
            <label>Top Heading</label>
            <textarea class="form-control" id="" rows="2" name="top_heading" placeholder="Enter Top Heading"
                required>{{ old('top_heading') }}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Location</label>
        </div>
        <div class="form-group" id="fields4">
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-success" id="add-field4">Add Location's</button>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">2. Seo Content</h5>

        </div>

        <div class="form-group">
            <label>Meta Title</label>
            <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title"
                value="{{ old('meta_title') }}" required>
        </div>

        <div class="form-group">
            <label>Meta Keyword</label>
            <input type="text" class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword"
                value="{{ old('meta_keyword') }}" required>
        </div>

        <div class="form-group">
            <label>Meta Description</label>
            <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description"
                value="{{ old('meta_description') }}" required>
        </div>

        <div class="form-group">
            <label>Meta Open Graph</label>
            <input type="text" class="form-control" name="meta_og" placeholder="Enter Meta Open Graph"
                value="{{ old('meta_og') }}" required>
        </div>
        
        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('manage-page.index') }}">Cancel</a>


    </form>

</div>