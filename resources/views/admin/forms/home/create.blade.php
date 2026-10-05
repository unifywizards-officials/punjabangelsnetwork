<div id="homeform">
    <form method="POST" action="{{route('manage-page.store')}}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" id="page_type" name="page_type" value="1">

        <input type="hidden" id="section1_is_active" name="section1_is_active" value="">
        <input type="hidden" id="coustomer_feedback_is_active" name="coustomer_feedback_is_active" value="">
        <input type="hidden" id="section5_is_added_feature_active" name="section5_is_added_feature_active" value="">
        <input type="hidden" id="section8_is_key_feature_active" name="section8_is_key_feature_active" value="">

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
            <label>Top Detail</label>
            <textarea class="form-control" id="" rows="2" name="top_detail" placeholder="Enter Top Detail"
                required>{{ old('top_detail') }}</textarea>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Top Label Link</label>
                    <input type="text" class="form-control" name="top_label_link" placeholder="Enter Link"
                        value="{{ old('top_label_link') }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Top Label Name</label>
                    <input type="text" class="form-control" name="top_label_name" placeholder="Enter Label Name"
                        value="{{ old('top_label_name') }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputFile">Top Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="top_image" class="custom-file-input" id="exampleInputFile">
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
                    <label>Top Image Alt Tag</label>
                    <input type="text" class="form-control" name="top_image_alt" placeholder="Enter Top Image Alt Tag"
                        value="{{ old('top_image_alt') }}" required>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">2. Section 1</h5>

        </div>
        <div class="form-group">
            <label>Section 1</label>
            <input type="checkbox" checked name="section1_is_active" class="toggleCheckbox"
                data-value="section1_is_active" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
        </div>

        <div class="form-group">
            <label>Section 1 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section1_heading" placeholder="Enter Section 1 Heading"
                required>{{ old('section1_heading') }}</textarea>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">3. Section 2</h5>

        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputFile">Section2 Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="section2_image" class="custom-file-input" id="exampleInputFile">
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
                <label>Section2 Image Alt Tag</label>
                <input type="text" class="form-control" name="section2_image_alt" placeholder="Enter Section2 Image Alt Tag"
                    value="{{ old('section2_image_alt') }}" required>
            </div>
        </div>
        </div>

        <div class="form-group">
            <label>Section 2 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section2_heading" placeholder="Enter Section 2 Heading"
                required>{{ old('section2_heading') }}</textarea>
        </div>

        <div class="form-group">
            <label>Section 2 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section2_detail" placeholder="Enter Section 2 Detail"
                required>{{ old('section2_detail') }}</textarea>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">4. Section 3</h5>

        </div>

        <div class="form-group">
            <label>Section 3 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section3_heading" placeholder="Enter Section 3 Heading"
                required>{{ old('section3_heading') }}</textarea>
        </div>
        <div class="form-group">
            <label>Section 3 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section3_detail" placeholder="Enter Section 3 Detail"
                required>{{ old('section3_detail') }}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 3 Label Link</label>
                    <input type="text" class="form-control" name="section3_label_link"
                        placeholder="Enter Section 3 Label Link" value="{{ old('section3_label_link') }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 3 Label Name</label>
                    <input type="text" class="form-control" name="section3_label_name"
                        placeholder="Enter Section 3 Label Name" value="{{ old('section3_label_name') }}" required>
                </div>
            </div>
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

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">5. Section 4</h5>

        </div>
        <div class="form-group">
            <label>Section 4 Feedback</label>
            <input type="checkbox" checked name="coustomer_feedback_is_active" class="toggleCheckbox"
                data-value="coustomer_feedback_is_active" data-toggle="toggle" data-onstyle="success"
                data-offstyle="danger" disabled>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">6. Section 5</h5>

        </div>

        <div class="form-group">
            <label>Section 5 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section5_heading" placeholder="Enter Section 5 Heading"
                required>{{ old('section5_heading') }}</textarea>
        </div>

        <div class="form-group">
            <label>Section 5 Added Features</label>
            <input type="checkbox" checked name="section5_is_added_feature_active" class="toggleCheckbox"
                data-value="section5_is_added_feature_active" data-toggle="toggle" data-onstyle="success"
                data-offstyle="danger">
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">7. Section 6</h5>

        </div>

        <div class="form-group">
            <label for="exampleInputFile">Section 6 Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="section6_image" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
            {!! fileinstruction !!}
        </div>

        
                <div class="form-group">
                    <label>Section 6 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section6_image_alt"
                        placeholder="Enter Section 6 Image Alt Tag" value="{{ old('section6_image_alt') }}" required>
                </div>
            

        <div class="form-group">
            <label>Section 6 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section6_heading" placeholder="Enter Section 6 Heading"
                required>{{ old('section6_heading') }}</textarea>
        </div>
        <div class="form-group">
            <label>Section 6 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section6_detail" placeholder="Enter Section 6 Detail"
                required>{{ old('section6_detail') }}</textarea>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">8. Section 7</h5>

        </div>

        <div class="form-group">
            <label>Section 7 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section7_heading" placeholder="Enter Section 7 Heading"
                required>{{ old('section7_heading') }}</textarea>
        </div>
        <div class="form-group">
            <label>Section 7 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section7_detail" placeholder="Enter Section 7 Detail"
                required>{{ old('section7_detail') }}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 7 Label Link</label>
                    <input type="text" class="form-control" name="section7_label_link"
                        placeholder="Enter Section 7 Label Link" value="{{ old('section7_label_link') }}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 7 Label Name</label>
                    <input type="text" class="form-control" name="section7_label_name"
                        placeholder="Enter Section 7 Label Name" value="{{ old('section7_label_name') }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 7 Image 1</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section7_image1" class="custom-file-input" id="exampleInputFile">
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
                    <label for="exampleInputFile">Section 7 Image 2</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section7_image2" class="custom-file-input" id="exampleInputFile">
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
                    <label for="exampleInputFile">Section 7 Image 3</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section7_image3" class="custom-file-input" id="exampleInputFile">
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
                    <label>Section 7 Image 1 Alt Tag</label>
                    <input type="text" class="form-control" name="section7_image1_alt"
                        placeholder="Enter Section 7 Image 1 Alt Tag" value="{{ old('section7_image1_alt') }}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 7 Image 2 Alt Tag</label>
                    <input type="text" class="form-control" name="section7_image2_alt"
                        placeholder="Enter Section 7 Image 2 Alt Tag" value="{{ old('section7_image2_alt') }}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 7 Image 3 Alt Tag</label>
                    <input type="text" class="form-control" name="section7_image3_alt"
                        placeholder="Enter Section 7 Image 3 Alt Tag" value="{{ old('section7_image3_alt') }}" required>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">9. Section 8</h5>

        </div>

        <div class="form-group">
            <label>Section 8 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section8_heading" placeholder="Enter Section 8 Heading"
                required>{{ old('section8_heading') }}</textarea>
        </div>

        <div class="form-group">
            <label>Section 8 Key Features</label>
            <input type="checkbox" checked name="section8_is_key_feature_active" class="toggleCheckbox"
                data-value="section8_is_key_feature_active" data-toggle="toggle" data-onstyle="success"
                data-offstyle="danger">
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">10. Seo Content</h5>

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