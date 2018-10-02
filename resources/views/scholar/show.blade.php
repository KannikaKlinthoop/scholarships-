<div class="panel panel-primary">
  <div class="panel-heading">
      <h1 style="color:#ffffff ;font-size:20px">{{ $scholar->name_scholar }}</h1>
  </div>
  <div class="panel-body">
    <ul>
      <p style="color:#003366">
        <strong>Name University</strong>
      </p>
      @foreach ($scholar->universities as $university)
      <p style="padding-left: 30px; text-align: justify">{{ $university->name }}</p>
      @endforeach
      <p style="color:#003366">
        <strong>Name Country</strong>
      </p>
      @foreach ($scholar->countries as $country)
      <p style="padding-left: 30px; text-align: justify">{{ $country->name }}</p>
      @endforeach
      <p style="color:#003366">
        <strong>Level</strong>
      </p>
      <p style="padding-left: 30px; text-align: justify">{{ $scholar->level->name }}</p>
      <p style="color:#003366">
        <strong>Program</strong>
      </p>
      <p style="padding-left: 30px; text-align: justify">{{ $scholar->programs->name }}</p>
      <p style="color:#003366">
        <strong>TestScoreType</strong>
      </p>
      @foreach ($scholar->testscorefunc as $s)
      <p style="padding-left: 30px; text-align: justify">{{ $s->name }}</p>
      @endforeach
      <p style="color:#003366">
        <strong>Inclusion</strong>
      </p>
      <p style="padding-left: 30px; text-align: justify">{{ $scholar->inclusion }}</p>
      <p style="color:#003366">
        <strong>Description</strong>
      </p>
      <p style="padding-left: 30px; text-align: justify">{{ $scholar->description }}</p>
      <p style="color:#003366">
        <strong>Created</strong>
      </p>
      <p style="padding-left: 30px; text-align: justify">{{ $scholar->created_at}}</p>
    </ul>
  </div>
</div>
