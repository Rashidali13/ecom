@extends('dashboard.app')
@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Subcategory Information')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal" action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Category')}}</label>
                        <div class="col-sm-9">
                            <select name="category_id" required class="form-control demo-select2-placeholder">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{__($category->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Description')}}</label>
                        <div class="col-sm-9">
                            <textarea rows="4" placeholder="{{__('Category Description')}}" id="dis" name="dis" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="banner">{{__('Banner')}} <small>(200x300)</small></label>
                        <div class="col-sm-9">
                            <input type="file" id="banner" name="banner" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection