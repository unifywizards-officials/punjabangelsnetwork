<div id="customform">

    <form action="{{ route('manage-page.update',$page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" id="page_type" name="page_type" value="5">

        <!-- <input type="hidden" id="section1_is_active" name="section1_is_active" value="">
        <input type="hidden" id="coustomer_feedback_is_active" name="coustomer_feedback_is_active" value="">
        <input type="hidden" id="section5_is_added_feature_active" name="section5_is_added_feature_active" value="">
        <input type="hidden" id="section8_is_key_feature_active" name="section8_is_key_feature_active" value=""> -->

        <div class="form-group">
            <label>Page Name</label>
            <input type="text" class="form-control" name="page_name" placeholder="Enter Page Name"
                value="{{$page->page_name}}" required>
        </div>
        <div class="form-group">
            <label>Page Slug(URL)</label>
            <input type="text" class="form-control" name="slug" placeholder="Enter Page Slug" value="{{$page->slug}}"
                required>
        </div>
        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">1. Top Section</h5>

        </div>
        <div class="form-group">
            <label>Top Heading</label>
            <textarea class="form-control" id="" rows="2" name="top_heading" placeholder="Enter Top Heading"
                required>{{$page->top_heading}}</textarea>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">2. Section 1</h5>

        </div>
        <div class="form-group">
            <label>Section 1 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section1_heading" placeholder="Enter Section 1 Heading"
                required>{{$page->section1_heading}}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Link</label>
                    <input type="text" class="form-control" name="section1_label_link" placeholder="Enter Link"
                        value="{{$page->section1_label_link}}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 1 Label Name</label>
                    <input type="text" class="form-control" name="section1_label_name" placeholder="Enter Label Name"
                        value="{{$page->section1_label_name}}" required>
                </div>
            </div>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">3. Section 2</h5>

        </div>

        @if($page->section2_image)
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 2 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section2_image" class="custom-file-input" id="exampleInputFile">
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
                    <img src="{{asset($page->section2_image)}}" width="150" height="100"
                        alt="{{$page->section1_image_alt}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section2 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section2_image_alt"
                        placeholder="Enter Section2 Image Alt Tag" value="{{$page->section2_image_alt}}" required>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section 2 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section2_image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section2 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section2_image_alt"
                        placeholder="Enter Section2 Image Alt Tag" value="{{$page->section2_image_alt}}" required>
                </div>
            </div>
        </div>
        @endif

        <div class="form-group">
            <label>Section 2 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section2_heading" placeholder="Enter Section 2 Heading"
                required>{{$page->section2_heading}}</textarea>
        </div>

        <div class="form-group">
            <label>Section 2 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section2_detail" placeholder="Enter Section 2 Detail"
                required>{{$page->section2_detail}}</textarea>
        </div>



        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">4. Section 3</h5>

        </div>



        <div class="form-group">
            <label>Section 3 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section3_heading" placeholder="Enter Section 3 Heading"
                required>{{$page->section3_heading}}</textarea>
        </div>


        @if($page->section3_image)
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputFile">Section3 Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="section3_image" class="custom-file-input" id="exampleInputFile">
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
                    <img src="{{asset($page->section3_image)}}" width="150" height="100"
                        alt="{{$page->section1_image_alt}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section3 Image Alt Tag</label>
                    <input type="text" class="form-control" name="section3_image_alt"
                        placeholder="Enter Section3 Image Alt Tag" value="{{$page->section3_image_alt}}" required>
                </div>
            </div>
        </div>
        @else

        <div class="form-group">
            <label for="exampleInputFile">Section 3 Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="section3_image" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
        @endif

        <div class="form-group">
            <label for="exampleInputFile">Specialized Services</label>
        </div>
        <div class="form-group" id="fields3">

            <?php 
                            $section3_specialization = json_decode($page->section3_specialization, true); // Unserialize the data		
                            ?>

            @foreach($section3_specialization as $section3_specialization)
            <div class="remove-button3">
                <div class="field">
                    <div class="form-group">
                        <label for="exampleInputFile">Title</label>
                        <input type="text" class="form-control" name="title[]"
                            value="{{$section3_specialization['title']}}" placeholder="Enter Title" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Description</label>
                        <textarea name="description[]" class="form-control form-control-user ckeditor"
                            placeholder="Enter Description"
                            required>{{$section3_specialization['description']}}</textarea>

                    </div>
                    <div class="form-group">
                        <button type="button" class="remove-field3 btn btn-danger">Remove</button>
                    </div>


                </div>
            </div>
            @endforeach
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-success" id="add-field3">Add Specialized Services</button>
        </div>

        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">5. Section 4</h5>

        </div>


        <div class="form-group">
            <label>Section 4 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section4_heading" placeholder="Enter Section 4 Heading"
                required>{{$page->section4_heading}}</textarea>
        </div>
        <div class="form-group">
            <label>Section 4 Detail</label>
            <textarea class="form-control" id="" rows="2" name="section4_detail" placeholder="Enter Section 4 Detail"
                required>{{$page->section4_detail}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Services</label>
        </div>
        <div class="form-group" id="fields1">

            <?php 
                            $section4_services = json_decode($page->section4_services, true); // Unserialize the data		
                            ?>

            @foreach($section4_services as $section4_services)
            <div class="remove-button1">
                <div class="field">
                    <div class="form-group">
                        <label for="exampleInputFile">Title</label>
                        <input type="text" class="form-control" name="title1[]" value="{{$section4_services['title']}}"
                            placeholder="Enter Title" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Description</label>
                        <textarea name="description1[]" class="form-control form-control-user"
                            placeholder="Enter Description" required>{{$section4_services['description']}}</textarea>

                    </div>

                    
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image1[]" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                {!! fileinstruction !!}
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <img src="{{asset($section4_services['image'])}}" width="150" height="100"
                                    alt="Post Image">
                            </div>
                            <input type="hidden" value="{{$section4_services['image']}}" name="image1[]" />
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Image Alt Tag</label>
                                <input type="text" class="form-control" name="image1_alt_tag[]"
                                    placeholder="Enter Image Alt Tag" value="{{$section4_services['image1_alt_tag']}}" required>
                            </div>
                        </div>
                    </div>
                   
                    

                    <div class="form-group">
                        <button type="button" class="remove-field1 btn btn-danger">Remove</button>
                    </div>


                </div>
            </div>
            @endforeach

        </div>

        <div class="form-group">
            <button type="button" class="btn btn-success" id="add-field1">Add Services</button>
        </div>


        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">6. Section 6</h5>

        </div>

        <div class="form-group">
            <label>Section 6 Heading</label>
            <textarea class="form-control" id="" rows="2" name="section6_heading" placeholder="Enter Section 6 Heading"
                required>{{$page->section6_heading}}</textarea>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 6 Label Link</label>
                    <input type="text" class="form-control" name="section6_label_link"
                        placeholder="Enter Section 6 Label Link" value="{{$page->section6_label_link}}" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Section 6 Label Name</label>
                    <input type="text" class="form-control" name="section6_label_name"
                        placeholder="Enter Section 6 Label Name" value="{{$page->section6_label_name}}" required>
                </div>
            </div>
        </div>


        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
            <h5 class=" font-weight-bold text-primary bordercss">7. Seo Content</h5>

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