@extends('layouts.main')
@section('title', 'License Report')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/runreports.css') }}">
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
@endpush

@section('content')
<div id="test-score-header">
    <div class="row">
        <div class="col">
            <a href="/search"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
        </div>
        <div class="col-4">
            <h1>License report</h1>
        </div>
        <div class="col-7">
            <button type="button" class="btn btn-sm btn-outline-dark" disabled>PGY 3</button>
        </div>
    </div>
</div>

<div id="test-score-report">
          <div class="row">
             <div class="col-2">
                <p>License Report</p>
             </div>
             <div class="col-sm">
                <i class="fa-regular fa-arrow-down-to-bracket"></i>
                <span>(0 Selected)</span>
             </div>
          </div>

            <table class="table table-hover">
                <thead>
                  <tr class="table-header">
                    <th scope="col"></th>
                    <th scope="col">Name<img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow icons table-arrow ms-2"/></th>
                    <th scope="col">Level<img src="{{asset('icons/up-arrow.svg')}}" alt="sort arrow" class="arrow icons table-arrow ms-2"/></th>
                    <th scope="col">ACLS</th>
                    <th scope="col">ATLS</th>
                    <th scope="col">BLS</th>
                    <th scope="col">CML</th>
                    <th scope="col">DEA</th>
                    <th scope="col">FCCS</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td>Hannah Abott</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Ludo Bagman</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bathilda Bagshot</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>4/18/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Katie Bell</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cuthbert Binns</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>9/3/22</td>
                    <td>9/3/23</td>
                    <td></td>
                    <td>9/3/23</td>
                    <td>7/03/20</td>
                    <td>9/3/23</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Sirius Black</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>9/3/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                    <td>1/3/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Phineas Nigellus Black</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/26/21</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lavender Brown</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Charity Burbage</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/03/19</td>
                    <td>1/26/21</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Frank Bryce</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Alecto Carrow</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Reginald Cattermole</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>4/18/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cho Chang</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vincent Crabbe</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Colin Creevey</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dirk Cresswell</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>John Dawlish</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Fleur Delacour</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dedalus Diggle</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Amos Diggory</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elphias Doge</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Antonin Dolohov</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Aberforth Dumbledore</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vernon Dursley</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marietta Edgecombe</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Arabella Figg</td>
                   <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Argus Filch</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Seamus Finnigan</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Nicolas Flamel</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mundungus Fletcher</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Filius Flitwick</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cornelius Fudge</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marvolo Gaunt</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Anthony Goldstein</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Astoria Greengrass</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gellert Grindelwald</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Godric Gryffindor</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rubeus Hagrid</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rolanda Hooch</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mafalda Hopkirk</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Helga Hufflepuff</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td></td>
                    <td>10/31/21</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>1/03/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Angelina Johnson</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td></td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lee Jordan</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bertha Jorkins</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Igor Karkaroff</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Viktor Krum</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td></td>
                    <td></td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Silvanus Kettleburn</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td></td>
                    <td></td>
                    <td><div class="status status-bad"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bellatrix Lestrange</td>
                    <td><span class="level pgy-3 badge rounded-pill">PGY 3</span></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                     <td><div class="status status-good"></div></td>
                  </tr>
                </tbody>
              </table>
        </div>
@endsection