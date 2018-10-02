<div class="btn-toolbar">
  <input class="btn btn-primary" type="button" style="float:right;" value="Add Scholar" onClick="createScholar()">
  <!-- <input class="btn btn-primary" type="button" style="float:right;" value="Add University" onClick="createScholar()"> -->
</div>
<!-- @include('scholar.flash-message') -->

<table class="table table-bordered ">
  <thead>
    <tr>
      <!-- <th>ID</th> -->
      <th>Name</th>
      <th>University</th>
      <th>Level</th>
      <th>Country</th>
      <th>Inclusion</th>
      <!-- <th>Description</th> -->
      <!-- <th>Create</th> -->
      <th width="200">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($scholar as $s)
        <tr>
          <!-- <td>{{ $s->id }}</td> -->
          <td>{{ $s->name_scholar }}</td>
          <td>
          @foreach($s->universities as $university)
            - {{ $university->name }}<br>
          @endforeach
        </td>
          <td>{{ $s->level->name }}</td>
          <td>
          @foreach($s->countries as $country)
            - {{ $country->name }}<br>
          @endforeach
        </td>
          <td>{{ $s->inclusion }}</td>
          <td>
            <input class="btn btn-info" type="button" value="View" onClick="showScholar( {{ $s->id }} )">
            <input class="btn btn-warning" type="button" value="Edit" onClick="editScholar( {{ $s->id }} )">
            <button class="btn btn-danger" type="submit" onClick="deleteScholar({{ $s->id }})" data-token="{{ csrf_token() }} " >Delete</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
