<div id="aboutform">
<form action="{{ route('manage-page.update',$page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <input type="hidden" id="page_type" name="page_type" value="2">

        <input type="hidden" id="section1_is_active" name="section1_is_active" value="">
       

        <div class="form-group">
            <label>Page Name</label>
            <input type="text" class="form-control" name="page_name" placeholder="Enter Page Name"
                value="{{$page->page_name}}" required>
        </div>
        
        <div class="form-group">
            <label>Page Slug(URL)</label>
            <input type="text" class="form-control" name="slug" placeholder="Enter Page Slug"
                value="{{$page->slug}}" required>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">1. Top Section</h5>

        </div>
        <div class="form-group">
            <label>Top Heading</label>
            <textarea class="form-control editorsummernote" id="" rows="2" name="top_heading" placeholder="Enter Top Heading"
                required>{{$page->top_heading}}</textarea>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">2. Section 1</h5>
        </div>

        @if($page->section1_image)
        <div class="row">
            <div class="col-sm-4">
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
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <img src="{{asset($page->section1_image)}}" width="150" height="100" alt="{{$page->section1_image_alt}}">
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section1 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section1_image_alt"
                        placeholder="Enter Section1 Image Alt Tag" value="{{$page->section1_image_alt}}" required>
                </div>
            </div>

        </div>
        @else
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
        </div>
        @endif

        <div class="form-group">
            <label>Section 1 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section1_heading" placeholder="Enter Section 1 Heading"
                required>{{$page->section1_heading}}</textarea>
        </div>

        <div class="form-group">
            <label>Section 1 Detail</label>
            <textarea class="form-control editorsummernote" id="" rows="2" name="section1_detail" placeholder="Enter Section 1 Detail"
                >{{$page->section1_detail}}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Link</label>
                    <input type="text" class="form-control" name="section1_label_link"
                        placeholder="Enter Section 1 Label Link" value="{{$page->section1_label_link}}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Name</label>
                    <input type="text" class="form-control" name="section1_label_name"
                        placeholder="Enter Section 1 Label Name" value="{{$page->section1_label_name}}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Section 2 Heading</label>
            <textarea class="form-control" id="" rows="2" name="top_detail" placeholder="Enter Section 2 Heading"
                required>{{$page->top_detail}}</textarea>
        </div>

        <div class="form-group">
            <label>Section 1 Popular Service</label>
            @if($page->section1_is_active == 1)

            <input type="checkbox" checked name="section1_is_active" class="toggleCheckbox"
                data-value="section1_is_active" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">

            @else

            <input type="checkbox" name="section1_is_active" class="toggleCheckbox" data-value="section1_is_active"
                data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
            @endif
        </div>


<div class="row">
            <div class="col-sm-4">

                <div class="form-group">
                    <label for="exampleInputFile">Section 3 Image 1</label>
                    <div class="input-group">
                        <div class="custom-file">
                            @if($page->section3_image1)
                            <input type="file" name="section3_image1" class="custom-file-input" id="exampleInputFile">
                            @else
                            <input type="file" name="section3_image1" class="custom-file-input" id="exampleInputFile"
                                required>
                            @endif
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
                            @if($page->section3_image2)
                            <input type="file" name="section3_image2" class="custom-file-input" id="exampleInputFile">
                            @else
                            <input type="file" name="section3_image2" class="custom-file-input" id="exampleInputFile"
                                required>
                            @endif
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
                            @if($page->section3_image3)
                            <input type="file" name="section3_image3" class="custom-file-input" id="exampleInputFile">
                            @else
                            <input type="file" name="section3_image3" class="custom-file-input" id="exampleInputFile"
                                required>
                            @endif
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
                    <img src="{{asset($page->section3_image1)}}" width="150" height="100"
                        alt="{{$page->section3_image1_alt}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <img src="{{asset($page->section3_image2)}}" width="150" height="100"
                        alt="{{$page->section3_image2_alt}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <img src="{{asset($page->section3_image3)}}" width="150" height="100"
                        alt="{{$page->section3_image3_alt}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 1 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image1_alt"
                        placeholder="Enter Section 3 Image 1 Alt Tag" value="{{$page->section3_image1_alt}}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 2 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image2_alt"
                        placeholder="Enter Section 3 Image 2 Alt Tag" value="{{$page->section3_image2_alt }}" required>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label>Section 3 Image 3 Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image3_alt"
                        placeholder="Enter Section 3 Image 3 Alt Tag" value="{{$page->section3_image3_alt}}" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Stats</label>
        </div>
        <div class="form-group" id="fields2">
            <?php 
                            $location_content = json_decode($page->section3_aboutus_stats, true); // Unserialize the data		
                            ?>

            @foreach($location_content as $location_content)
            <div class="remove-button2">
                <div class="field">


                    <div class="form-group">
                        <label for="exampleInputFile">Font Awesome Class</label>
                        <input type="text" class="form-control" name="font_awesome[]" value="{{$location_content['font_awesome']}}" placeholder="Enter Font Awesome Class" required>
                        </div>

                        <div class="form-group">
                        <label for="exampleInputFile">Title</label>
                        <input type="text" class="form-control" name="title2[]" value="{{$location_content['title2']}}" placeholder="Enter Title" required>

                        </div>

                        <div class="form-group">
                        <label for="exampleInputFile">Value</label>
                        <input type="text" class="form-control" name="value[]" value="{{$location_content['value']}}" placeholder="Enter Value" required>

                        </div>

                    <div class="form-group">
                        <button type="button" class="remove-field2 btn btn-danger">Remove</button>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-success" id="add-field2">Add Stats</button>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">3. Seo Content</h5>

        </div>

        <div class="form-group">
            <label>Meta Title</label>
            <input type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title"
                value="{{$page->meta_title}}" required>
        </div>

        <div class="form-group">
            <label>Meta Keyword</label>
            <input type="text" class="form-control" name="meta_keyword" placeholder="Enter Meta Keyword"
                value="{{$page->meta_keyword}}" required>
        </div>

        <div class="form-group">
            <label>Meta Description</label>
            <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description"
                value="{{$page->meta_description}}" required>
        </div>

        <div class="form-group">
            <label>Meta Open Graph</label>
            <input type="text" class="form-control" name="meta_og" placeholder="Enter Meta Open Graph"
                value="{{$page->meta_og}}" required>
        </div>

        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('manage-page.index') }}">Cancel</a>


    </form>

</div>