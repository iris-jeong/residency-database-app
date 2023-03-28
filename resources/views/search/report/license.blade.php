@extends('layouts.main')
@section('title', 'License Report')

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/runreports.css') }}">
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

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Level</th>
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
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Ludo Bagman</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bathilda Bagshot</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>4/18/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Katie Bell</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cuthbert Binns</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>9/3/22</td>
                    <td>9/3/23</td>
                    <td></td>
                    <td>9/3/23</td>
                    <td>7/03/20</td>
                    <td>9/3/23</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Sirius Black</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>9/3/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                    <td>1/3/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Phineas Nigellus Black</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/26/21</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lavender Brown</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Charity Burbage</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/03/19</td>
                    <td>1/26/21</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>1/26/22</td>
                    <td>7/03/20</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Frank Bryce</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Alecto Carrow</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>1/3/21</td>
                    <td>1/3/22</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td>2/05/18</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Reginald Cattermole</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>4/18/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cho Chang</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vincent Crabbe</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Colin Creevey</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dirk Cresswell</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>John Dawlish</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Fleur Delacour</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dedalus Diggle</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Amos Diggory</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elphias Doge</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Antonin Dolohov</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Aberforth Dumbledore</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vernon Dursley</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marietta Edgecombe</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Arabella Figg</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Argus Filch</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Seamus Finnigan</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Nicolas Flamel</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mundungus Fletcher</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Filius Flitwick</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cornelius Fudge</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marvolo Gaunt</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Anthony Goldstein</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td>4/18/23</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Astoria Greengrass</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>4/18/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gellert Grindelwald</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Godric Gryffindor</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rubeus Hagrid</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rolanda Hooch</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mafalda Hopkirk</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Helga Hufflepuff</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td></td>
                    <td>10/31/21</td>
                    <td></td>
                    <td>4/18/22</td>
                    <td></td>
                    <td>1/03/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Angelina Johnson</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td></td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lee Jordan</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bertha Jorkins</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Igor Karkaroff</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Viktor Krum</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td></td>
                    <td></td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Silvanus Kettleburn</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td></td>
                    <td></td>
                    <td><div class="red-dot"></div></td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bellatrix Lestrange</td>
                    <td><button type="button" class="pgy-level btn btn-sm btn-warning" disabled>PGY 3</button></td>
                    <td>10/31/20</td>
                    <td>10/31/21</td>
                    <td>9/3/23</td>
                    <td>4/18/22</td>
                    <td>7/03/22</td>
                    <td>1/03/22</td>
                    <td><div class="green-dot"></div></td>
                  </tr>
                </tbody>
              </table>
        </div>
@endsection