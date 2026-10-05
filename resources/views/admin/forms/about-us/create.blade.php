<div id="aboutform">
    <form method="POST" action="{{route('manage-page.store')}}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="page_type" name="page_type" value="2">

        <input type="hidden" id="section1_is_active" name="section1_is_active" value="">


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
            <textarea class="form-control editorsummernote" id="" rows="2" name="top_heading" placeholder="Enter Top Heading"
                required>{{ old('top_heading') }}</textarea>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">2. Section 1</h5>

        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputFile">Section1 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section1_image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    {!! fileinstruction !!}
                </div>

            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section1 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section1_image_alt"
                        placeholder="Enter Section1 Image Alt Tag" value="{{ old('section1_image_alt') }}" required>
                </div>
            </div>
        </div>


        <div class="form-group">
            <label>Section 1 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section1_heading" placeholder="Enter Section 1 Heading"
                required>{{ old('section1_heading') }}</textarea>
        </div>

        <div class="form-group">
            <label>Section 1 Detail</label>
            <textarea class="form-control editorsummernote" id="" rows="2" name="section1_detail"
                placeholder="Enter Section 1 Detail" required>{{ old('section1_detail') }}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Link</label>
                    <input type="text" class="form-control" name="section1_label_link"
                        placeholder="Enter Section 1 Label Link" value="{{ old('section1_label_link') }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Name</label>
                    <input type="text" class="form-control" name="section1_label_name"
                        placeholder="Enter Section 1 Label Name" value="{{ old('section1_label_name') }}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Section 2 Heading</label>
            <textarea class="form-control" id="" rows="2" name="top_detail" placeholder="Enter Section 2 Heading"
                required>{{ old('top_detail') }}</textarea>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">3. Section 2</h5>

        </div>

        <div class="form-group">
            <label>Section 1 Popular Service</label>
            <input type="checkbox" checked name="section1_is_active" class="toggleCheckbox"
                data-value="section1_is_active" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">4. Section 3</h5>

        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 3 Image 1</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section3_image1" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    {!! fileinstruction !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 3 Image 2</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section3_image2" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    {!! fileinstruction !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 3 Image 3</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section3_image3" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    {!! fileinstruction !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 1 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image1_alt"
                        placeholder="Enter Section 3 Image 1 Alt Tag" value="{{ old('section3_image1_alt') }}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 2 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image2_alt"
                        placeholder="Enter Section 3 Image 2 Alt Tag" value="{{ old('section3_image2_alt') }}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 3 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image3_alt"
                        placeholder="Enter Section 3 Image 3 Alt Tag" value="{{ old('section3_image3_alt') }}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Stats</label>
        </div>
        <div class="form-group" id="fields2">
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-success" id="add-field2">Add Stats</button>
        </div>




        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">4. Seo Content</h5>

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