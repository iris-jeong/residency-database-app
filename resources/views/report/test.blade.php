@extends('layouts.main')
@section('title', 'Test Scores Report')

@section('content')
<div id="test-score-header">
    <div class="row">
        <div class="col">
            <a href="/search"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
        </div>
        <div class="col-4">
            <h1>Test Scores report</h1>
        </div>
        <div class="col-7">
            <button type="button" class="btn btn-sm btn-outline-dark" disabled>Cardiothoracic</button>
        </div>
    </div>
</div>

<div id="test-score-report">
          <div class="row">
             <div class="col-2">
                <p>Test Score Report</p>
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
                    <th scope="col">Test</th>
                    <th scope="col">Score</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"></th>
                    <td>Hannah Abott</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Ludo Bagman</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bathilda Bagshot</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Katie Bell</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cuthbert Binns</td>
                    <td>P-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Sirius Black</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Phineas Nigellus Black</td>
                    <td>P-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lavender Brown</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Charity Burbage</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Frank Bryce</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Alecto Carrow</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Reginald Cattermole</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cho Chang</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vincent Crabbe</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Colin Creevey</td>
                    <td>P-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dirk Cresswell</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>John Dawlish</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Fleur Delacour</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Dedalus Diggle</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Amos Diggory</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Elphias Doge</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Antonin Dolohov</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Aberforth Dumbledore</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Vernon Dursley</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marietta Edgecombe</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Arabella Figg</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Argus Filch</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Seamus Finnigan</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Nicolas Flamel</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mundungus Fletcher</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Filius Flitwick</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Cornelius Fudge</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Marvolo Gaunt</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Anthony Goldstein</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gregory Goyle</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Astoria Greengrass</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Gellert Grindelwald</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Godric Gryffindor</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rubeus Hagrid</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Rolanda Hooch</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Mafalda Hopkirk</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Helga Hufflepuff</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Angelina Johnson</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Lee Jordan</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bertha Jorkins</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Igor Karkaroff</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Viktor Krum</td>
                    <td>T-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Silvanus Kettleburn</td>
                    <td>B-Site</td>
                    <td>310</td>
                  </tr>
                  <tr>
                    <th scope="row"></th>
                    <td>Bellatrix Lestrange</td>
                    <td>V-Site</td>
                    <td>310</td>
                  </tr>
                </tbody>
              </table>
        </div>
@endsection

@push('stylesheets')
  <link rel="stylesheet" href="{{asset('runreports.css')}}">
@endpush
