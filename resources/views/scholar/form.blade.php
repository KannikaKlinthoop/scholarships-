@include('scholar.flash-message')

<!-- <div class="panel panel-primary">
  <div class="panel-heading">
  {{isset($scholar) ? 'Edit' : 'Add' }}
  </div>

<div class="form-group">
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
  <div class="panel-body">
    <div class="row" id="errors">
    @if ($errors->any())
    <div>there is error</div>
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <!-- </div>
    @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{\Session::get('success')}}</p>
    </div><br />
    @endif
   -->
  <div class="section section-custom billinfo">
			<!--section-title -->
			<h2>{{isset($scholar) ? 'Edit' : 'Add' }}</h2><!--section-title end -->
      <div class="row" id="errors">
      @if ($errors->any())
      <div>there is error</div>
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif
      </div>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
      </div><br />
      @endif
			<!-- section content start-->
			<div id="validationForm">
			<div class="pmd-card pmd-z-depth">
				<div class="pmd-card-body">
					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
								<label for="regular1" class="control-label required">Name Scholar</label>
								   <input type="text" id="name_scholar" class="form-control" value="{{isset($scholar) ? $scholar->name_scholar : '' }}">
              </div>
						</div>
					</div>
          <div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
								<label for="regular1" class="control-label required">Name University</label>
								    <input type="text" id="name_university" name="name_university" class="form-control col-xs-5" type="text" value="{{isset($scholar) ? $scholar->name_university : '' }}" />
						</div>
					</div>
        </div>
					<div class="group-fields clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
                <label class="required">Level</label>
                    <select class="select-simple form-control pmd-select2" id="level_id" name="level_id">
                      <option></option>
                      @foreach($levels as $level)
                      <option value="{{ $level->id }}" {{( (isset($scholar) && $level->id == $scholar->level_id) ? 'selected' : '')}} >{{ $level->name }}</option>
                      @endforeach
								    </select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
								<label class="required">Program</label>
								<select class="select-simple form-control pmd-select2" id="program_id" name="program_id">
									<option></option>
                  @foreach($programs as $program)
                    <option value="{{ $program->id }}" {{( (isset($scholar) && $program->id == $scholar->program_id) ? 'selected' : '')}} >{{ $program->name }}</option>
                  @endforeach
								</select>
							</div>
						</div>
          </div>
					<!-- <div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-check" id="test_score_types_id" name="test_score_types_id">
              <div class="checkbox pmd-default-theme">
                <form>
                <label class="required">Test Score Type</label>
                <label class="checkbox-inline pmd-checkbox checkbox-pmd-ripple-effect">
                  <input type="checkbox" value class="">
                  <span class="pmd-checkbox-label"></span>
                  <span> 2 </span>
                <label class="checkbox-inline pmd-checkbox checkbox-pmd-ripple-effect">
                  <input type="checkbox" value class="">
                  <span class="pmd-checkbox-label"></span>
                  <span> 3 </span>
                </label>
              </form>
              </div>
            </div>
          </div>
        </div> -->
          <div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-check" id="test_score_types_id" name="test_score_types_id">
                <form>
                <label class="required">Test Score Type</label>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                @foreach($testscoretypes as $testscoretype)
                <span class="mdl-checkbox__label"></span>
                <input class="mdl-checkbox__input" type="checkbox"
                id="test{{$testscoretype->id}}"
                name="test{{$testscoretype->id}}"
                value="{{ $testscoretype->id }}"
                {{ (isset($scholar) && $scholar->testscorefunc->contains($testscoretype->id)) ? 'checked=checked' : '' }}
                >{{ $testscoretype->name }}
                @endforeach
              </label>
              </form>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-xs-3">
            <div class="required">
              <label>TestScoreType</label>
            </div>
          </div>
          <div class="col-xs-5">
            <div class="form-check" id="test_score_types_id" name="test_score_types_id">
              <label class="checkbox-inline pmd-checkbox checkbox-pmd-ripple-effect">
              @foreach($testscoretypes as $testscoretype)
              <span class="pmd-checkbox-label"></span>
                <input class="form-check-input" type="checkbox"
                id="test{{$testscoretype->id}}"
                name="test{{$testscoretype->id}}"
                value="{{ $testscoretype->id }}"
                {{ (isset($scholar) && $scholar->testscorefunc->contains($testscoretype->id)) ? 'checked=checked' : '' }}
                >{{ $testscoretype->name }}
              @endforeach
            </label>
            </div>
          </div>
        </div> -->
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
              <label for="regular1" class="control-label required">Country</label>
              <input type="text" id="name_country" class="form-control name="name_country" value="{{isset($scholar) ? $scholar->name_country : '' }}" />
            </div>
          </div>
        </div>
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
              <label class="control-label required">Inclusion</label>
              <textarea id="inclusion" name="inclusion" class="form-control" rows="5" type="text">{{isset($scholar) ? $scholar->inclusion : '' }}</textarea>
            </div>
          </div>
        </div>
					<div class="group-fields clearfix row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="{{isset($scholar) ? "form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed" : "form-group pmd-textfield pmd-textfield-floating-label"}}" >
							  <label class="control-label required">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5">{{isset($scholar) ? $scholar->description : '' }}</textarea>
							</div>
						</div>
					</div>
        <div class="row">
          <div class="col-xs-6">
            <div class="text-right">
              <input class="btn btn-success"  value="Save"
                onClick="{{$func}}"/>
              <a href="/scholar" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
			</div> <!-- section content end -->
		</div>
  </div>
</div>
</br>
