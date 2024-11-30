<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <title>Dashboard </title>
     

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.4.1/css./bootstrap.min.css"
integritys=" sha384-Vko08x4CGs03+Hhxv8T/QSPaXtkKtu6ug5TOeNV6gBiFeWPGFNOMuhOf23091fjh" crossorigin="anonymous"
link href="https://unpkg.com/ionicons@s.5.10-@/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/DiseñoEmpleado.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/argon.css" />
        <!-- Custom styles for this template-->
</head>
@extends('layouts.app')
@section('content')
<body>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <title>Reporte </title>
     

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boostrap/4.4.1/css./bootstrap.min.css"
integritys=" sha384-Vko08x4CGs03+Hhxv8T/QSPaXtkKtu6ug5TOeNV6gBiFeWPGFNOMuhOf23091fjh" crossorigin="anonymous"
link href="https://unpkg.com/ionicons@s.5.10-@/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/DiseñoEmpleado.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/argon.css" />
        <!-- Custom styles for this template-->
    
</head>

<body>


      
      <main class="mt-5 pt-3">
        <div class="rowwwww">
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

<br>
          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="card h-100">
                <div class="card-header">
                  <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                  Area Chart Example
                </div>
                <div class="card-body">
                  <canvas class="chart" width="400" height="200"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="card h-100">
                <div class="card-header">
                  <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                  Area Chart Example
                </div>
                <div class="card-body">
                  <canvas class="chart" width="400" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Page visits</h3>
                    </div>
                    <div class="col text-right">
                      <a href="#!" class="btn btn-sm btn-primary">See all</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Page name</th>
                        <th scope="col">Visitors</th>
                        <th scope="col">Unique users</th>
                        <th scope="col">Bounce rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          /argon/
                        </th>
                        <td>
                          4,569
                        </td>
                        <td>
                          340
                        </td>
                        <td>
                          <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/index.html
                        </th>
                        <td>
                          3,985
                        </td>
                        <td>
                          319
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/charts.html
                        </th>
                        <td>
                          3,513
                        </td>
                        <td>
                          294
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/tables.html
                        </th>
                        <td>
                          2,050
                        </td>
                        <td>
                          147
                        </td>
                        <td>
                          <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          /argon/profile.html
                        </th>
                        <td>
                          1,795
                        </td>
                        <td>
                          190
                        </td>
                        <td>
                          <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card shadow">
                <div class="card-header border-0">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="mb-0">Social traffic</h3>
                    </div>
                    <div class="col text-right">
                      <a href="#!" class="btn btn-sm btn-primary">See all</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Referral</th>
                        <th scope="col">Visitors</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          Facebook
                        </th>
                        <td>
                          1,480
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">60%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          Facebook
                        </th>
                        <td>
                          5,480
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">70%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          Google
                        </th>
                        <td>
                          4,807
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">80%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          Instagram
                        </th>
                        <td>
                          3,678
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">75%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          twitter
                        </th>
                        <td>
                          2,645
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">30%</span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>

      </main>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
      <script src="js/jquery-3.5.1.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.bootstrap5.min.js"></script>
      <script src="js/scriptx.js"></script>

</body>

<style>
/*!

=========================================================
* Argon Dashboard - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2018 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
:root
{
    --blue: #5e72e4;
    --indigo: #5603ad;
    --purple: #8965e0;
    --pink: #f3a4b5;
    --red: #f5365c;
    --orange: #fb6340;
    --yellow: #ffd600;
    --green: #2dce89;
    --teal: #11cdef;
    --cyan: #2bffc6;
    --white: #fff;
    --gray: #8898aa;
    --gray-dark: #32325d;
    --light: #ced4da;
    --lighter: #e9ecef;
    --primary: #5e72e4;
    --secondary: #f7fafc;
    --success: #2dce89;
    --info: #11cdef;
    --warning: #fb6340;
    --danger: #f5365c;
    --light: #adb5bd;
    --dark: #212529;
    --default: #172b4d;
    --white: #fff;
    --neutral: #fff;
    --darker: black;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: Open Sans, sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

*,
*::before,
*::after
{
    box-sizing: border-box;
}

.header .logo {
    position: absolute;
    top: 0;
    left: 0px;
    width: 100%;
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-size: 20px;
    line-height: 75px;
    height: 75px;
    white-space: nowrap;
    overflow: hidden;
    color: #000000;
    background: #dcdcdc;
    font-weight: 500;
}

html
{
    font-family: sans-serif;
    line-height: 1.15;

    -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

@-ms-viewport
{
    width: device-width;
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section
{
    display: block;
}

body
{
    font-family: Open Sans, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;

    margin: 0;

    text-align: left;

    color: #525f7f;
    background-color: #f8f9fe;
}

[tabindex='-1']:focus
{
    outline: 0 !important;
}

hr
{
    overflow: visible;

    box-sizing: content-box;
    height: 0;
}

h1,
h2,
h3,
h4,
h5,
h6
{
    margin-top: 0;
    margin-bottom: .5rem;
}

p
{
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title]
{
    cursor: help;
            text-decoration: underline;
            text-decoration: underline dotted;

    border-bottom: 0;

    -webkit-text-decoration: underline dotted;
}

address
{
    font-style: normal;
    line-height: inherit;

    margin-bottom: 1rem;
}

ol,
ul,
dl
{
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol
{
    margin-bottom: 0;
}

dt
{
    font-weight: 600;
}

dd
{
    margin-bottom: .5rem;
    margin-left: 0;
}

blockquote
{
    margin: 0 0 1rem;
}

dfn
{
    font-style: italic;
}

b,
strong
{
    font-weight: bolder;
}

small
{
    font-size: 80%;
}

sub,
sup
{
    font-size: 75%;
    line-height: 0;

    position: relative;

    vertical-align: baseline;
}

sub
{
    bottom: -.25em;
}

sup
{
    top: -.5em;
}

a
{
    text-decoration: none;

    color: #5e72e4;
    background-color: transparent;

    -webkit-text-decoration-skip: objects;
}
a:hover
{
    text-decoration: none;

    color: #233dd2;
}

a:not([href]):not([tabindex])
{
    text-decoration: none;

    color: inherit;
}
a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus
{
    text-decoration: none;

    color: inherit;
}
a:not([href]):not([tabindex]):focus
{
    outline: 0;
}

pre,
code,
kbd,
samp
{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
    font-size: 1em;
}

pre
{
    overflow: auto;

    margin-top: 0;
    margin-bottom: 1rem;

    -ms-overflow-style: scrollbar;
}

figure
{
    margin: 0 0 1rem;
}

img
{
    vertical-align: middle;

    border-style: none;
}

svg
{
    overflow: hidden;

    vertical-align: middle;
}

table
{
    border-collapse: collapse;
}

caption
{
    padding-top: 1rem;
    padding-bottom: 1rem;

    caption-side: bottom;

    text-align: left;

    color: #8898aa;
}

th
{
    text-align: inherit;
}

label
{
    display: inline-block;

    margin-bottom: .5rem;
}

button
{
    border-radius: 0;
}

button:focus
{
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea
{
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;

    margin: 0;
}

button,
input
{
    overflow: visible;
}

button,
select
{
    text-transform: none;
}

button,
html [type='button'],
[type='reset'],
[type='submit']
{
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner
{
    padding: 0;

    border-style: none;
}

input[type='radio'],
input[type='checkbox']
{
    box-sizing: border-box;
    padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month']
{
    -webkit-appearance: listbox;
}

textarea
{
    overflow: auto;

    resize: vertical;
}

fieldset
{
    min-width: 0;
    margin: 0;
    padding: 0;

    border: 0;
}

legend
{
    font-size: 1.5rem;
    line-height: inherit;

    display: block;

    width: 100%;
    max-width: 100%;
    margin-bottom: .5rem;
    padding: 0;

    white-space: normal;

    color: inherit;
}

progress
{
    vertical-align: baseline;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button
{
    height: auto;
}

[type='search']
{
    outline-offset: -2px;

    -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration
{
    -webkit-appearance: none;
}

::-webkit-file-upload-button
{
    font: inherit;

    -webkit-appearance: button;
}

output
{
    display: inline-block;
}

summary
{
    display: list-item;

    cursor: pointer;
}

template
{
    display: none;
}

[hidden]
{
    display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6
{
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;

    margin-bottom: .5rem;

    color: #32325d;
}

h1,
.h1
{
    font-size: 1.625rem;
}

h2,
.h2
{
    font-size: 1.25rem;
}

h3,
.h3
{
    font-size: 1.0625rem;
}

h4,
.h4
{
    font-size: .9375rem;
}

h5,
.h5
{
    font-size: .8125rem;
}

h6,
.h6
{
    font-size: .625rem;
}

.lead
{
    font-size: 1.25rem;
    font-weight: 300;
}

.display-1
{
    font-size: 3.3rem;
    font-weight: 600;
    line-height: 1.5;
}

.display-2
{
    font-size: 2.75rem;
    font-weight: 600;
    line-height: 1.5;
}

.display-3
{
    font-size: 2.1875rem;
    font-weight: 600;
    line-height: 1.5;
}

.display-4
{
    font-size: 1.6275rem;
    font-weight: 600;
    line-height: 1.5;
}

hr
{
    margin-top: 2rem;
    margin-bottom: 2rem;

    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1);
}

small,
.small
{
    font-size: 80%;
    font-weight: 400;
}

mark,
.mark
{
    padding: .2em;

    background-color: #fcf8e3;
}

.list-unstyled
{
    padding-left: 0;

    list-style: none;
}

.list-inline
{
    padding-left: 0;

    list-style: none;
}

.list-inline-item
{
    display: inline-block;
}
.list-inline-item:not(:last-child)
{
    margin-right: .5rem;
}

.initialism
{
    font-size: 90%;

    text-transform: uppercase;
}

.blockquote
{
    font-size: 1.25rem;

    margin-bottom: 1rem;
}

.blockquote-footer
{
    font-size: 80%;

    display: block;

    color: #8898aa;
}
.blockquote-footer::before
{
    content: '\2014 \00A0';
}

.img-fluid
{
    max-width: 100%;
    height: auto;
}

.img-thumbnail
{
    max-width: 100%;
    height: auto;
    padding: .25rem;

    border: 1px solid #dee2e6;
    border-radius: .375rem;
    background-color: #f8f9fe;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .075);
}

.figure
{
    display: inline-block;
}

.figure-img
{
    line-height: 1;

    margin-bottom: .5rem;
}

.figure-caption
{
    font-size: 90%;

    color: #8898aa;
}

code
{
    font-size: 87.5%;

    word-break: break-word;

    color: #f3a4b5;
}
a > code
{
    color: inherit;
}

kbd
{
    font-size: 87.5%;

    padding: .2rem .4rem;

    color: #fff;
    border-radius: .25rem;
    background-color: #212529;
    box-shadow: inset 0 -.1rem 0 rgba(0, 0, 0, .25);
}
kbd kbd
{
    font-size: 100%;
    font-weight: 600;

    padding: 0;

    box-shadow: none;
}

pre
{
    font-size: 87.5%;

    display: block;

    color: #212529;
}
pre code
{
    font-size: inherit;

    word-break: normal;

    color: inherit;
}

.pre-scrollable
{
    overflow-y: scroll;

    max-height: 340px;
}

.container
{
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 576px)
{
    .container
    {
        max-width: 540px;
    }
}
@media (min-width: 768px)
{
    .container
    {
        max-width: 720px;
    }
}
@media (min-width: 992px)
{
    .container
    {
        max-width: 960px;
    }
}
@media (min-width: 1200px)
{
    .container
    {
        max-width: 1140px;
    }
}

.container-fluid
{
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

.row
{
    display: flex;

    margin-right: -15px;
    margin-left: -15px;

    flex-wrap: wrap;
}

.no-gutters
{
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*='col-']
{
    padding-right: 0;
    padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto
{
    position: relative;

    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col
{
    max-width: 100%;

    flex-basis: 0;
    flex-grow: 1;
}

.col-auto
{
    width: auto;
    max-width: none;

    flex: 0 0 auto;
}

.col-1
{
    max-width: 8.33333%;

    flex: 0 0 8.33333%;
}

.col-2
{
    max-width: 16.66667%;

    flex: 0 0 16.66667%;
}

.col-3
{
    max-width: 25%;

    flex: 0 0 25%;
}

.col-4
{
    max-width: 33.33333%;

    flex: 0 0 33.33333%;
}

.col-5
{
    max-width: 41.66667%;

    flex: 0 0 41.66667%;
}

.col-6
{
    max-width: 50%;

    flex: 0 0 50%;
}

.col-7
{
    max-width: 58.33333%;

    flex: 0 0 58.33333%;
}

.col-8
{
    max-width: 66.66667%;

    flex: 0 0 66.66667%;
}

.col-9
{
    max-width: 75%;

    flex: 0 0 75%;
}

.col-10
{
    max-width: 83.33333%;

    flex: 0 0 83.33333%;
}

.col-11
{
    max-width: 91.66667%;

    flex: 0 0 91.66667%;
}

.col-12
{
    max-width: 100%;

    flex: 0 0 100%;
}

.order-first
{
    order: -1;
}

.order-last
{
    order: 13;
}

.order-0
{
    order: 0;
}

.order-1
{
    order: 1;
}

.order-2
{
    order: 2;
}

.order-3
{
    order: 3;
}

.order-4
{
    order: 4;
}

.order-5
{
    order: 5;
}

.order-6
{
    order: 6;
}

.order-7
{
    order: 7;
}

.order-8
{
    order: 8;
}

.order-9
{
    order: 9;
}

.order-10
{
    order: 10;
}

.order-11
{
    order: 11;
}

.order-12
{
    order: 12;
}

.offset-1
{
    margin-left: 8.33333%;
}

.offset-2
{
    margin-left: 16.66667%;
}

.offset-3
{
    margin-left: 25%;
}

.offset-4
{
    margin-left: 33.33333%;
}

.offset-5
{
    margin-left: 41.66667%;
}

.offset-6
{
    margin-left: 50%;
}

.offset-7
{
    margin-left: 58.33333%;
}

.offset-8
{
    margin-left: 66.66667%;
}

.offset-9
{
    margin-left: 75%;
}

.offset-10
{
    margin-left: 83.33333%;
}

.offset-11
{
    margin-left: 91.66667%;
}

@media (min-width: 576px)
{
    .col-sm
    {
        max-width: 100%;

        flex-basis: 0;
        flex-grow: 1;
    }
    .col-sm-auto
    {
        width: auto;
        max-width: none;

        flex: 0 0 auto;
    }
    .col-sm-1
    {
        max-width: 8.33333%;

        flex: 0 0 8.33333%;
    }
    .col-sm-2
    {
        max-width: 16.66667%;

        flex: 0 0 16.66667%;
    }
    .col-sm-3
    {
        max-width: 25%;

        flex: 0 0 25%;
    }
    .col-sm-4
    {
        max-width: 33.33333%;

        flex: 0 0 33.33333%;
    }
    .col-sm-5
    {
        max-width: 41.66667%;

        flex: 0 0 41.66667%;
    }
    .col-sm-6
    {
        max-width: 50%;

        flex: 0 0 50%;
    }
    .col-sm-7
    {
        max-width: 58.33333%;

        flex: 0 0 58.33333%;
    }
    .col-sm-8
    {
        max-width: 66.66667%;

        flex: 0 0 66.66667%;
    }
    .col-sm-9
    {
        max-width: 75%;

        flex: 0 0 75%;
    }
    .col-sm-10
    {
        max-width: 83.33333%;

        flex: 0 0 83.33333%;
    }
    .col-sm-11
    {
        max-width: 91.66667%;

        flex: 0 0 91.66667%;
    }
    .col-sm-12
    {
        max-width: 100%;

        flex: 0 0 100%;
    }
    .order-sm-first
    {
        order: -1;
    }
    .order-sm-last
    {
        order: 13;
    }
    .order-sm-0
    {
        order: 0;
    }
    .order-sm-1
    {
        order: 1;
    }
    .order-sm-2
    {
        order: 2;
    }
    .order-sm-3
    {
        order: 3;
    }
    .order-sm-4
    {
        order: 4;
    }
    .order-sm-5
    {
        order: 5;
    }
    .order-sm-6
    {
        order: 6;
    }
    .order-sm-7
    {
        order: 7;
    }
    .order-sm-8
    {
        order: 8;
    }
    .order-sm-9
    {
        order: 9;
    }
    .order-sm-10
    {
        order: 10;
    }
    .order-sm-11
    {
        order: 11;
    }
    .order-sm-12
    {
        order: 12;
    }
    .offset-sm-0
    {
        margin-left: 0;
    }
    .offset-sm-1
    {
        margin-left: 8.33333%;
    }
    .offset-sm-2
    {
        margin-left: 16.66667%;
    }
    .offset-sm-3
    {
        margin-left: 25%;
    }
    .offset-sm-4
    {
        margin-left: 33.33333%;
    }
    .offset-sm-5
    {
        margin-left: 41.66667%;
    }
    .offset-sm-6
    {
        margin-left: 50%;
    }
    .offset-sm-7
    {
        margin-left: 58.33333%;
    }
    .offset-sm-8
    {
        margin-left: 66.66667%;
    }
    .offset-sm-9
    {
        margin-left: 75%;
    }
    .offset-sm-10
    {
        margin-left: 83.33333%;
    }
    .offset-sm-11
    {
        margin-left: 91.66667%;
    }
}

@media (min-width: 768px)
{
    .col-md
    {
        max-width: 100%;

        flex-basis: 0;
        flex-grow: 1;
    }
    .col-md-auto
    {
        width: auto;
        max-width: none;

        flex: 0 0 auto;
    }
    .col-md-1
    {
        max-width: 8.33333%;

        flex: 0 0 8.33333%;
    }
    .col-md-2
    {
        max-width: 16.66667%;

        flex: 0 0 16.66667%;
    }
    .col-md-3
    {
        max-width: 25%;

        flex: 0 0 25%;
    }
    .col-md-4
    {
        max-width: 33.33333%;

        flex: 0 0 33.33333%;
    }
    .col-md-5
    {
        max-width: 41.66667%;

        flex: 0 0 41.66667%;
    }
    .col-md-6
    {
        max-width: 50%;

        flex: 0 0 50%;
    }
    .col-md-7
    {
        max-width: 58.33333%;

        flex: 0 0 58.33333%;
    }
    .col-md-8
    {
        max-width: 66.66667%;

        flex: 0 0 66.66667%;
    }
    .col-md-9
    {
        max-width: 75%;

        flex: 0 0 75%;
    }
    .col-md-10
    {
        max-width: 83.33333%;

        flex: 0 0 83.33333%;
    }
    .col-md-11
    {
        max-width: 91.66667%;

        flex: 0 0 91.66667%;
    }
    .col-md-12
    {
        max-width: 100%;

        flex: 0 0 100%;
    }
    .order-md-first
    {
        order: -1;
    }
    .order-md-last
    {
        order: 13;
    }
    .order-md-0
    {
        order: 0;
    }
    .order-md-1
    {
        order: 1;
    }
    .order-md-2
    {
        order: 2;
    }
    .order-md-3
    {
        order: 3;
    }
    .order-md-4
    {
        order: 4;
    }
    .order-md-5
    {
        order: 5;
    }
    .order-md-6
    {
        order: 6;
    }
    .order-md-7
    {
        order: 7;
    }
    .order-md-8
    {
        order: 8;
    }
    .order-md-9
    {
        order: 9;
    }
    .order-md-10
    {
        order: 10;
    }
    .order-md-11
    {
        order: 11;
    }
    .order-md-12
    {
        order: 12;
    }
    .offset-md-0
    {
        margin-left: 0;
    }
    .offset-md-1
    {
        margin-left: 8.33333%;
    }
    .offset-md-2
    {
        margin-left: 16.66667%;
    }
    .offset-md-3
    {
        margin-left: 25%;
    }
    .offset-md-4
    {
        margin-left: 33.33333%;
    }
    .offset-md-5
    {
        margin-left: 41.66667%;
    }
    .offset-md-6
    {
        margin-left: 50%;
    }
    .offset-md-7
    {
        margin-left: 58.33333%;
    }
    .offset-md-8
    {
        margin-left: 66.66667%;
    }
    .offset-md-9
    {
        margin-left: 75%;
    }
    .offset-md-10
    {
        margin-left: 83.33333%;
    }
    .offset-md-11
    {
        margin-left: 91.66667%;
    }
}

@media (min-width: 992px)
{
    .col-lg
    {
        max-width: 100%;

        flex-basis: 0;
        flex-grow: 1;
    }
    .col-lg-auto
    {
        width: auto;
        max-width: none;

        flex: 0 0 auto;
    }
    .col-lg-1
    {
        max-width: 8.33333%;

        flex: 0 0 8.33333%;
    }
    .col-lg-2
    {
        max-width: 16.66667%;

        flex: 0 0 16.66667%;
    }
    .col-lg-3
    {
        max-width: 25%;

        flex: 0 0 25%;
    }
    .col-lg-4
    {
        max-width: 33.33333%;

        flex: 0 0 33.33333%;
    }
    .col-lg-5
    {
        max-width: 41.66667%;

        flex: 0 0 41.66667%;
    }
    .col-lg-6
    {
        max-width: 50%;

        flex: 0 0 50%;
    }
    .col-lg-7
    {
        max-width: 58.33333%;

        flex: 0 0 58.33333%;
    }
    .col-lg-8
    {
        max-width: 66.66667%;

        flex: 0 0 66.66667%;
    }
    .col-lg-9
    {
        max-width: 75%;

        flex: 0 0 75%;
    }
    .col-lg-10
    {
        max-width: 83.33333%;

        flex: 0 0 83.33333%;
    }
    .col-lg-11
    {
        max-width: 91.66667%;

        flex: 0 0 91.66667%;
    }
    .col-lg-12
    {
        max-width: 100%;

        flex: 0 0 100%;
    }
    .order-lg-first
    {
        order: -1;
    }
    .order-lg-last
    {
        order: 13;
    }
    .order-lg-0
    {
        order: 0;
    }
    .order-lg-1
    {
        order: 1;
    }
    .order-lg-2
    {
        order: 2;
    }
    .order-lg-3
    {
        order: 3;
    }
    .order-lg-4
    {
        order: 4;
    }
    .order-lg-5
    {
        order: 5;
    }
    .order-lg-6
    {
        order: 6;
    }
    .order-lg-7
    {
        order: 7;
    }
    .order-lg-8
    {
        order: 8;
    }
    .order-lg-9
    {
        order: 9;
    }
    .order-lg-10
    {
        order: 10;
    }
    .order-lg-11
    {
        order: 11;
    }
    .order-lg-12
    {
        order: 12;
    }
    .offset-lg-0
    {
        margin-left: 0;
    }
    .offset-lg-1
    {
        margin-left: 8.33333%;
    }
    .offset-lg-2
    {
        margin-left: 16.66667%;
    }
    .offset-lg-3
    {
        margin-left: 25%;
    }
    .offset-lg-4
    {
        margin-left: 33.33333%;
    }
    .offset-lg-5
    {
        margin-left: 41.66667%;
    }
    .offset-lg-6
    {
        margin-left: 50%;
    }
    .offset-lg-7
    {
        margin-left: 58.33333%;
    }
    .offset-lg-8
    {
        margin-left: 66.66667%;
    }
    .offset-lg-9
    {
        margin-left: 75%;
    }
    .offset-lg-10
    {
        margin-left: 83.33333%;
    }
    .offset-lg-11
    {
        margin-left: 91.66667%;
    }
}

@media (min-width: 1200px)
{
    .col-xl
    {
        max-width: 100%;

        flex-basis: 0;
        flex-grow: 1;
    }
    .col-xl-auto
    {
        width: auto;
        max-width: none;

        flex: 0 0 auto;
    }
    .col-xl-1
    {
        max-width: 8.33333%;

        flex: 0 0 8.33333%;
    }
    .col-xl-2
    {
        max-width: 16.66667%;

        flex: 0 0 16.66667%;
    }
    .col-xl-3
    {
        max-width: 25%;

        flex: 0 0 25%;
    }
    .col-xl-4
    {
        max-width: 33.33333%;

        flex: 0 0 33.33333%;
    }
    .col-xl-5
    {
        max-width: 41.66667%;

        flex: 0 0 41.66667%;
    }
    .col-xl-6
    {
        max-width: 50%;

        flex: 0 0 50%;
    }
    .col-xl-7
    {
        max-width: 58.33333%;

        flex: 0 0 58.33333%;
    }
    .col-xl-8
    {
        max-width: 66.66667%;

        flex: 0 0 66.66667%;
    }
    .col-xl-9
    {
        max-width: 75%;

        flex: 0 0 75%;
    }
    .col-xl-10
    {
        max-width: 83.33333%;

        flex: 0 0 83.33333%;
    }
    .col-xl-11
    {
        max-width: 91.66667%;

        flex: 0 0 91.66667%;
    }
    .col-xl-12
    {
        max-width: 100%;

        flex: 0 0 100%;
    }
    .order-xl-first
    {
        order: -1;
    }
    .order-xl-last
    {
        order: 13;
    }
    .order-xl-0
    {
        order: 0;
    }
    .order-xl-1
    {
        order: 1;
    }
    .order-xl-2
    {
        order: 2;
    }
    .order-xl-3
    {
        order: 3;
    }
    .order-xl-4
    {
        order: 4;
    }
    .order-xl-5
    {
        order: 5;
    }
    .order-xl-6
    {
        order: 6;
    }
    .order-xl-7
    {
        order: 7;
    }
    .order-xl-8
    {
        order: 8;
    }
    .order-xl-9
    {
        order: 9;
    }
    .order-xl-10
    {
        order: 10;
    }
    .order-xl-11
    {
        order: 11;
    }
    .order-xl-12
    {
        order: 12;
    }
    .offset-xl-0
    {
        margin-left: 0;
    }
    .offset-xl-1
    {
        margin-left: 8.33333%;
    }
    .offset-xl-2
    {
        margin-left: 16.66667%;
    }
    .offset-xl-3
    {
        margin-left: 25%;
    }
    .offset-xl-4
    {
        margin-left: 33.33333%;
    }
    .offset-xl-5
    {
        margin-left: 41.66667%;
    }
    .offset-xl-6
    {
        margin-left: 50%;
    }
    .offset-xl-7
    {
        margin-left: 58.33333%;
    }
    .offset-xl-8
    {
        margin-left: 66.66667%;
    }
    .offset-xl-9
    {
        margin-left: 75%;
    }
    .offset-xl-10
    {
        margin-left: 83.33333%;
    }
    .offset-xl-11
    {
        margin-left: 91.66667%;
    }
}

.table
{
    width: 100%;
    margin-bottom: 1rem;

    background-color: transparent;
}
.table th,
.table td
{
    padding: 1rem;

    vertical-align: top;

    border-top: 1px solid #e9ecef;
}
.table thead th
{
    vertical-align: bottom;

    border-bottom: 2px solid #e9ecef;
}
.table tbody + tbody
{
    border-top: 2px solid #e9ecef;
}
.table .table
{
    background-color: #f8f9fe;
}

.table-sm th,
.table-sm td
{
    padding: .5rem;
}

.table-bordered
{
    border: 1px solid #e9ecef;
}
.table-bordered th,
.table-bordered td
{
    border: 1px solid #e9ecef;
}
.table-bordered thead th,
.table-bordered thead td
{
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody
{
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd)
{
    background-color: rgba(0, 0, 0, .05);
}

.table-hover tbody tr:hover
{
    background-color: #f6f9fc;
}

.table-primary,
.table-primary > th,
.table-primary > td
{
    background-color: #d2d8f7;
}

.table-hover .table-primary:hover
{
    background-color: #bcc5f3;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th
{
    background-color: #bcc5f3;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td
{
    background-color: #fdfefe;
}

.table-hover .table-secondary:hover
{
    background-color: #ecf6f6;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th
{
    background-color: #ecf6f6;
}

.table-success,
.table-success > th,
.table-success > td
{
    background-color: #c4f1de;
}

.table-hover .table-success:hover
{
    background-color: #afecd2;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th
{
    background-color: #afecd2;
}

.table-info,
.table-info > th,
.table-info > td
{
    background-color: #bcf1fb;
}

.table-hover .table-info:hover
{
    background-color: #a4ecfa;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th
{
    background-color: #a4ecfa;
}

.table-warning,
.table-warning > th,
.table-warning > td
{
    background-color: #fed3ca;
}

.table-hover .table-warning:hover
{
    background-color: #febeb1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th
{
    background-color: #febeb1;
}

.table-danger,
.table-danger > th,
.table-danger > td
{
    background-color: #fcc7d1;
}

.table-hover .table-danger:hover
{
    background-color: #fbafbd;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th
{
    background-color: #fbafbd;
}

.table-light,
.table-light > th,
.table-light > td
{
    background-color: #e8eaed;
}

.table-hover .table-light:hover
{
    background-color: #dadde2;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th
{
    background-color: #dadde2;
}

.table-dark,
.table-dark > th,
.table-dark > td
{
    background-color: #c1c2c3;
}

.table-hover .table-dark:hover
{
    background-color: #b4b5b6;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th
{
    background-color: #b4b5b6;
}

.table-default,
.table-default > th,
.table-default > td
{
    background-color: #bec4cd;
}

.table-hover .table-default:hover
{
    background-color: #b0b7c2;
}
.table-hover .table-default:hover > td,
.table-hover .table-default:hover > th
{
    background-color: #b0b7c2;
}

.table-white,
.table-white > th,
.table-white > td
{
    background-color: white;
}

.table-hover .table-white:hover
{
    background-color: #f2f2f2;
}
.table-hover .table-white:hover > td,
.table-hover .table-white:hover > th
{
    background-color: #f2f2f2;
}

.table-neutral,
.table-neutral > th,
.table-neutral > td
{
    background-color: white;
}

.table-hover .table-neutral:hover
{
    background-color: #f2f2f2;
}
.table-hover .table-neutral:hover > td,
.table-hover .table-neutral:hover > th
{
    background-color: #f2f2f2;
}

.table-darker,
.table-darker > th,
.table-darker > td
{
    background-color: #b8b8b8;
}

.table-hover .table-darker:hover
{
    background-color: #ababab;
}
.table-hover .table-darker:hover > td,
.table-hover .table-darker:hover > th
{
    background-color: #ababab;
}

.table-active,
.table-active > th,
.table-active > td
{
    background-color: #f6f9fc;
}

.table-hover .table-active:hover
{
    background-color: #e3ecf6;
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th
{
    background-color: #e3ecf6;
}

.table .thead-dark th
{
    color: #f8f9fe;
    border-color: #1f3a68; 
    background-color: #172b4d;
}

.table .thead-light th
{
    color: #8898aa;
    border-color: #e9ecef; 
    background-color: #f6f9fc;
}

.table-dark
{
    color: #f8f9fe;
    background-color: #172b4d;
}
.table-dark th,
.table-dark td,
.table-dark thead th
{
    border-color: #1f3a68;
}
.table-dark.table-bordered
{
    border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd)
{
    background-color: rgba(255, 255, 255, .05);
}
.table-dark.table-hover tbody tr:hover
{
    background-color: rgba(255, 255, 255, .075);
}

@media (max-width: 575.98px)
{
    .table-responsive-sm
    {
        display: block;
        overflow-x: auto;

        width: 100%;

        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-sm > .table-bordered
    {
        border: 0;
    }
}

@media (max-width: 767.98px)
{
    .table-responsive-md
    {
        display: block;
        overflow-x: auto;

        width: 100%;

        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-md > .table-bordered
    {
        border: 0;
    }
}

@media (max-width: 991.98px)
{
    .table-responsive-lg
    {
        display: block;
        overflow-x: auto;

        width: 100%;

        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-lg > .table-bordered
    {
        border: 0;
    }
}

@media (max-width: 1199.98px)
{
    .table-responsive-xl
    {
        display: block;
        overflow-x: auto;

        width: 100%;

        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-xl > .table-bordered
    {
        border: 0;
    }
}

.table-responsive
{
    display: block;
    overflow-x: auto;

    width: 100%;

    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
.table-responsive > .table-bordered
{
    border: 0;
}

.form-control
{
    font-size: 1rem;
    line-height: 1.5;

    display: block;

    width: 100%;
    height: calc(2.75rem + 2px);
    padding: .625rem .75rem;

    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);

    color: #8898aa;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: none;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .form-control
    {
        transition: none;
    }
}
.form-control::-ms-expand
{
    border: 0;
    background-color: transparent;
}
.form-control:focus
{
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25);
    outline: 0;
    background-color: #fff;
    box-shadow: none, none;
}
.form-control:-ms-input-placeholder
{
    opacity: 1;
    color: #adb5bd;
}
.form-control::-ms-input-placeholder
{
    opacity: 1;
    color: #adb5bd;
}
.form-control::placeholder
{
    opacity: 1;
    color: #adb5bd;
}
.form-control:disabled,
.form-control[readonly]
{
    opacity: 1;
    background-color: #e9ecef;
}

select.form-control:focus::-ms-value
{
    color: #8898aa;
    background-color: #fff;
}

.form-control-file,
.form-control-range
{
    display: block;

    width: 100%;
}

.col-form-label
{
    font-size: inherit;
    line-height: 1.5;

    margin-bottom: 0;
    padding-top: calc(.625rem + 1px);
    padding-bottom: calc(.625rem + 1px);
}

.col-form-label-lg
{
    font-size: 1.25rem;
    line-height: 1.5;

    padding-top: calc(.875rem + 1px);
    padding-bottom: calc(.875rem + 1px);
}

.col-form-label-sm
{
    font-size: .875rem;
    line-height: 1.5;

    padding-top: calc(.25rem + 1px);
    padding-bottom: calc(.25rem + 1px);
}

.form-control-plaintext
{
    line-height: 1.5;

    display: block;

    width: 100%;
    margin-bottom: 0;
    padding-top: .625rem;
    padding-bottom: .625rem;

    color: #525f7f;
    border: solid transparent;
    border-width: 1px 0;
    background-color: transparent;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg
{
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm
{
    font-size: .875rem;
    line-height: 1.5;

    height: calc(1.8125rem + 2px);
    padding: .25rem .5rem;

    border-radius: .25rem;
}

.form-control-lg
{
    font-size: 1.25rem;
    line-height: 1.5;

    height: calc(3.625rem + 2px);
    padding: .875rem 1rem;

    border-radius: .4375rem;
}

select.form-control[size],
select.form-control[multiple]
{
    height: auto;
}

textarea.form-control
{
    height: auto;
}

.form-group
{
    margin-bottom: 1.5rem;
}

.form-text
{
    display: block;

    margin-top: .25rem;
}

.form-row
{
    display: flex;

    margin-right: -5px;
    margin-left: -5px;

    flex-wrap: wrap;
}
.form-row > .col,
.form-row > [class*='col-']
{
    padding-right: 5px;
    padding-left: 5px;
}

.form-check
{
    position: relative;

    display: block;

    padding-left: 1.25rem;
}

.form-check-input
{
    position: absolute;

    margin-top: .3rem;
    margin-left: -1.25rem;
}
.form-check-input:disabled ~ .form-check-label
{
    color: #8898aa;
}

.form-check-label
{
    margin-bottom: 0;
}

.form-check-inline
{
    display: inline-flex;

    margin-right: .75rem;
    padding-left: 0;

    align-items: center;
}
.form-check-inline .form-check-input
{
    position: static;

    margin-top: 0;
    margin-right: .3125rem;
    margin-left: 0;
}

.valid-feedback
{
    font-size: 80%;

    display: none;

    width: 100%;
    margin-top: .25rem;

    color: #2dce89;
}

.valid-tooltip
{
    font-size: .875rem;
    line-height: 1;

    position: absolute;
    z-index: 5;
    top: 100%;

    display: none;

    max-width: 100%;
    margin-top: .1rem;
    padding: .5rem;

    color: #fff;
    border-radius: .2rem;
    background-color: rgba(45, 206, 137, .8);
}

.was-validated .form-control:valid,
.form-control.is-valid,
.was-validated
.custom-select:valid,
.custom-select.is-valid
{
    border-color: #2dce89;
}
.was-validated .form-control:valid:focus,
.form-control.is-valid:focus,
.was-validated
.custom-select:valid:focus,
.custom-select.is-valid:focus
{
    border-color: #2dce89;
}
.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip,
.form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip,
.was-validated
.custom-select:valid ~ .valid-feedback,
.was-validated
.custom-select:valid ~ .valid-tooltip,
.custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip
{
    display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label,
.form-check-input.is-valid ~ .form-check-label
{
    color: #2dce89;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip,
.form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip
{
    display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label,
.custom-control-input.is-valid ~ .custom-control-label
{
    color: #2dce89;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before,
.custom-control-input.is-valid ~ .custom-control-label::before
{
    border-color: #93e7c3;
    background-color: #93e7c3;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip,
.custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip
{
    display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before,
.custom-control-input.is-valid:checked ~ .custom-control-label::before
{
    border-color: #93e7c3;
    background-color: #54daa1;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before,
.custom-control-input.is-valid:focus ~ .custom-control-label::before
{
    box-shadow: 0 0 0 1px #f8f9fe, 0 0 0 0 rgba(45, 206, 137, .25);
}

.was-validated .custom-file-input:valid ~ .custom-file-label,
.custom-file-input.is-valid ~ .custom-file-label
{
    border-color: #2dce89;
}
.was-validated .custom-file-input:valid ~ .custom-file-label::before,
.custom-file-input.is-valid ~ .custom-file-label::before
{
    border-color: inherit;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip,
.custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip
{
    display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label,
.custom-file-input.is-valid:focus ~ .custom-file-label
{
    box-shadow: 0 0 0 0 rgba(45, 206, 137, .25);
}

.invalid-feedback
{
    font-size: 80%;

    display: none;

    width: 100%;
    margin-top: .25rem;

    color: #fb6340;
}

.invalid-tooltip
{
    font-size: .875rem;
    line-height: 1;

    position: absolute;
    z-index: 5;
    top: 100%;

    display: none;

    max-width: 100%;
    margin-top: .1rem;
    padding: .5rem;

    color: #fff;
    border-radius: .2rem;
    background-color: rgba(251, 99, 64, .8);
}

.was-validated .form-control:invalid,
.form-control.is-invalid,
.was-validated
.custom-select:invalid,
.custom-select.is-invalid
{
    border-color: #fb6340;
}
.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus,
.was-validated
.custom-select:invalid:focus,
.custom-select.is-invalid:focus
{
    border-color: #fb6340;
}
.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip,
.form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip,
.was-validated
.custom-select:invalid ~ .invalid-feedback,
.was-validated
.custom-select:invalid ~ .invalid-tooltip,
.custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip
{
    display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label,
.form-check-input.is-invalid ~ .form-check-label
{
    color: #fb6340;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip,
.form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip
{
    display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label,
.custom-control-input.is-invalid ~ .custom-control-label
{
    color: #fb6340;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before,
.custom-control-input.is-invalid ~ .custom-control-label::before
{
    border-color: #fec9bd;
    background-color: #fec9bd;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip,
.custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip
{
    display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before,
.custom-control-input.is-invalid:checked ~ .custom-control-label::before
{
    border-color: #fec9bd;
    background-color: #fc8c72;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before,
.custom-control-input.is-invalid:focus ~ .custom-control-label::before
{
    box-shadow: 0 0 0 1px #f8f9fe, 0 0 0 0 rgba(251, 99, 64, .25);
}

.was-validated .custom-file-input:invalid ~ .custom-file-label,
.custom-file-input.is-invalid ~ .custom-file-label
{
    border-color: #fb6340;
}
.was-validated .custom-file-input:invalid ~ .custom-file-label::before,
.custom-file-input.is-invalid ~ .custom-file-label::before
{
    border-color: inherit;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip,
.custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip
{
    display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label,
.custom-file-input.is-invalid:focus ~ .custom-file-label
{
    box-shadow: 0 0 0 0 rgba(251, 99, 64, .25);
}

.form-inline
{
    display: flex;

    flex-flow: row wrap;
    align-items: center;
}
.form-inline .form-check
{
    width: 100%;
}
@media (min-width: 576px)
{
    .form-inline label
    {
        display: flex;

        margin-bottom: 0;

        align-items: center;
        justify-content: center;
    }
    .form-inline .form-group
    {
        display: flex;

        margin-bottom: 0;

        flex: 0 0 auto;
        flex-flow: row wrap;
        align-items: center;
    }
    .form-inline .form-control
    {
        display: inline-block;

        width: auto;

        vertical-align: middle;
    }
    .form-inline .form-control-plaintext
    {
        display: inline-block;
    }
    .form-inline .input-group,
    .form-inline .custom-select
    {
        width: auto;
    }
    .form-inline .form-check
    {
        display: flex;

        width: auto;
        padding-left: 0;

        align-items: center;
        justify-content: center;
    }
    .form-inline .form-check-input
    {
        position: relative;

        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0;
    }
    .form-inline .custom-control
    {
        align-items: center;
        justify-content: center;
    }
    .form-inline .custom-control-label
    {
        margin-bottom: 0;
    }
}

.btn
{
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;

    display: inline-block;

    padding: .625rem 1.25rem;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out; 
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;

    border: 1px solid transparent;
    border-radius: .375rem;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .btn
    {
        transition: none;
    }
}
.btn:hover,
.btn:focus
{
    text-decoration: none;
}
.btn:focus,
.btn.focus
{
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}
.btn.disabled,
.btn:disabled
{
    opacity: .65;
    box-shadow: none;
}
.btn:not(:disabled):not(.disabled)
{
    cursor: pointer;
}
.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active
{
    box-shadow: none;
}
.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus
{
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
}

a.btn.disabled,
fieldset:disabled a.btn
{
    pointer-events: none;
}

.btn-primary
{
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-primary:hover
{
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}
.btn-primary:focus,
.btn-primary.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
}
.btn-primary.disabled,
.btn-primary:disabled
{
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle
{
    color: #fff;
    border-color: #5e72e4;
    background-color: #324cdd;
}
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-secondary
{
    color: #212529;
    border-color: #f7fafc;
    background-color: #f7fafc;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-secondary:hover
{
    color: #212529;
    border-color: #f7fafc;
    background-color: #f7fafc;
}
.btn-secondary:focus,
.btn-secondary.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(247, 250, 252, .5);
}
.btn-secondary.disabled,
.btn-secondary:disabled
{
    color: #212529;
    border-color: #f7fafc;
    background-color: #f7fafc;
}
.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle
{
    color: #212529;
    border-color: #f7fafc;
    background-color: #d2e3ee;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(247, 250, 252, .5);
}

.btn-success
{
    color: #fff;
    border-color: #2dce89;
    background-color: #2dce89;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-success:hover
{
    color: #fff;
    border-color: #2dce89;
    background-color: #2dce89;
}
.btn-success:focus,
.btn-success.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(45, 206, 137, .5);
}
.btn-success.disabled,
.btn-success:disabled
{
    color: #fff;
    border-color: #2dce89;
    background-color: #2dce89;
}
.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle
{
    color: #fff;
    border-color: #2dce89;
    background-color: #24a46d;
}
.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(45, 206, 137, .5);
}

.btn-info
{
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-info:hover
{
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
}
.btn-info:focus,
.btn-info.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
}
.btn-info.disabled,
.btn-info:disabled
{
    color: #fff;
    border-color: #11cdef;
    background-color: #11cdef;
}
.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle
{
    color: #fff;
    border-color: #11cdef;
    background-color: #0da5c0;
}
.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-warning
{
    color: #fff;
    border-color: #fb6340;
    background-color: #fb6340;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-warning:hover
{
    color: #fff;
    border-color: #fb6340;
    background-color: #fb6340;
}
.btn-warning:focus,
.btn-warning.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(251, 99, 64, .5);
}
.btn-warning.disabled,
.btn-warning:disabled
{
    color: #fff;
    border-color: #fb6340;
    background-color: #fb6340;
}
.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle
{
    color: #fff;
    border-color: #fb6340;
    background-color: #fa3a0e;
}
.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(251, 99, 64, .5);
}

.btn-danger
{
    color: #fff;
    border-color: #f5365c;
    background-color: #f5365c;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-danger:hover
{
    color: #fff;
    border-color: #f5365c;
    background-color: #f5365c;
}
.btn-danger:focus,
.btn-danger.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(245, 54, 92, .5);
}
.btn-danger.disabled,
.btn-danger:disabled
{
    color: #fff;
    border-color: #f5365c;
    background-color: #f5365c;
}
.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle
{
    color: #fff;
    border-color: #f5365c;
    background-color: #ec0c38;
}
.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(245, 54, 92, .5);
}

.btn-light
{
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-light:hover
{
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-light:focus,
.btn-light.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(173, 181, 189, .5);
}
.btn-light.disabled,
.btn-light:disabled
{
    color: #fff;
    border-color: #adb5bd;
    background-color: #adb5bd;
}
.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle
{
    color: #fff;
    border-color: #adb5bd;
    background-color: #919ca6;
}
.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(173, 181, 189, .5);
}

.btn-dark
{
    color: #fff;
    border-color: #212529;
    background-color: #212529;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-dark:hover
{
    color: #fff;
    border-color: #212529;
    background-color: #212529;
}
.btn-dark:focus,
.btn-dark.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(33, 37, 41, .5);
}
.btn-dark.disabled,
.btn-dark:disabled
{
    color: #fff;
    border-color: #212529;
    background-color: #212529;
}
.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle
{
    color: #fff;
    border-color: #212529;
    background-color: #0a0c0d;
}
.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(33, 37, 41, .5);
}

.btn-default
{
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-default:hover
{
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-default:focus,
.btn-default.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
}
.btn-default.disabled,
.btn-default:disabled
{
    color: #fff;
    border-color: #172b4d;
    background-color: #172b4d;
}
.btn-default:not(:disabled):not(.disabled):active,
.btn-default:not(:disabled):not(.disabled).active,
.show > .btn-default.dropdown-toggle
{
    color: #fff;
    border-color: #172b4d; 
    background-color: #0b1526;
}
.btn-default:not(:disabled):not(.disabled):active:focus,
.btn-default:not(:disabled):not(.disabled).active:focus,
.show > .btn-default.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-white
{
    color: #212529;
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-white:hover
{
    color: #212529;
    border-color: white;
    background-color: white;
}
.btn-white:focus,
.btn-white.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(255, 255, 255, .5);
}
.btn-white.disabled,
.btn-white:disabled
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-white:not(:disabled):not(.disabled):active,
.btn-white:not(:disabled):not(.disabled).active,
.show > .btn-white.dropdown-toggle
{
    color: #212529;
    border-color: white; 
    background-color: #e6e6e6;
}
.btn-white:not(:disabled):not(.disabled):active:focus,
.btn-white:not(:disabled):not(.disabled).active:focus,
.show > .btn-white.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(255, 255, 255, .5);
}

.btn-neutral
{
    color: #212529;
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-neutral:hover
{
    color: #212529;
    border-color: white; 
    background-color: white;
}
.btn-neutral:focus,
.btn-neutral.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(255, 255, 255, .5);
}
.btn-neutral.disabled,
.btn-neutral:disabled
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-neutral:not(:disabled):not(.disabled):active,
.btn-neutral:not(:disabled):not(.disabled).active,
.show > .btn-neutral.dropdown-toggle
{
    color: #212529;
    border-color: white; 
    background-color: #e6e6e6;
}
.btn-neutral:not(:disabled):not(.disabled):active:focus,
.btn-neutral:not(:disabled):not(.disabled).active:focus,
.show > .btn-neutral.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(255, 255, 255, .5);
}

.btn-darker
{
    color: #fff;
    border-color: black;
    background-color: black;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-darker:hover
{
    color: #fff;
    border-color: black; 
    background-color: black;
}
.btn-darker:focus,
.btn-darker.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(0, 0, 0, .5);
}
.btn-darker.disabled,
.btn-darker:disabled
{
    color: #fff;
    border-color: black; 
    background-color: black;
}
.btn-darker:not(:disabled):not(.disabled):active,
.btn-darker:not(:disabled):not(.disabled).active,
.show > .btn-darker.dropdown-toggle
{
    color: #fff;
    border-color: black; 
    background-color: black;
}
.btn-darker:not(:disabled):not(.disabled):active:focus,
.btn-darker:not(:disabled):not(.disabled).active:focus,
.show > .btn-darker.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(0, 0, 0, .5);
}

.btn-outline-primary
{
    color: #5e72e4;
    border-color: #5e72e4; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-primary:hover
{
    color: #fff;
    border-color: #5e72e4; 
    background-color: #5e72e4;
}
.btn-outline-primary:focus,
.btn-outline-primary.focus
{
    box-shadow: 0 0 0 0 rgba(94, 114, 228, .5);
}
.btn-outline-primary.disabled,
.btn-outline-primary:disabled
{
    color: #5e72e4;
    background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle
{
    color: #fff;
    border-color: #5e72e4; 
    background-color: #5e72e4;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-outline-secondary
{
    color: #f7fafc;
    border-color: #f7fafc; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-secondary:hover
{
    color: #212529;
    border-color: #f7fafc; 
    background-color: #f7fafc;
}
.btn-outline-secondary:focus,
.btn-outline-secondary.focus
{
    box-shadow: 0 0 0 0 rgba(247, 250, 252, .5);
}
.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled
{
    color: #f7fafc;
    background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle
{
    color: #212529;
    border-color: #f7fafc; 
    background-color: #f7fafc;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(247, 250, 252, .5);
}

.btn-outline-success
{
    color: #2dce89;
    border-color: #2dce89; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-success:hover
{
    color: #fff;
    border-color: #2dce89; 
    background-color: #2dce89;
}
.btn-outline-success:focus,
.btn-outline-success.focus
{
    box-shadow: 0 0 0 0 rgba(45, 206, 137, .5);
}
.btn-outline-success.disabled,
.btn-outline-success:disabled
{
    color: #2dce89;
    background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle
{
    color: #fff;
    border-color: #2dce89; 
    background-color: #2dce89;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(45, 206, 137, .5);
}

.btn-outline-info
{
    color: #11cdef;
    border-color: #11cdef; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-info:hover
{
    color: #fff;
    border-color: #11cdef; 
    background-color: #11cdef;
}
.btn-outline-info:focus,
.btn-outline-info.focus
{
    box-shadow: 0 0 0 0 rgba(17, 205, 239, .5);
}
.btn-outline-info.disabled,
.btn-outline-info:disabled
{
    color: #11cdef;
    background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle
{
    color: #fff;
    border-color: #11cdef; 
    background-color: #11cdef;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-outline-warning
{
    color: #fb6340;
    border-color: #fb6340; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-warning:hover
{
    color: #fff;
    border-color: #fb6340; 
    background-color: #fb6340;
}
.btn-outline-warning:focus,
.btn-outline-warning.focus
{
    box-shadow: 0 0 0 0 rgba(251, 99, 64, .5);
}
.btn-outline-warning.disabled,
.btn-outline-warning:disabled
{
    color: #fb6340;
    background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle
{
    color: #fff;
    border-color: #fb6340; 
    background-color: #fb6340;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(251, 99, 64, .5);
}

.btn-outline-danger
{
    color: #f5365c;
    border-color: #f5365c; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-danger:hover
{
    color: #fff;
    border-color: #f5365c; 
    background-color: #f5365c;
}
.btn-outline-danger:focus,
.btn-outline-danger.focus
{
    box-shadow: 0 0 0 0 rgba(245, 54, 92, .5);
}
.btn-outline-danger.disabled,
.btn-outline-danger:disabled
{
    color: #f5365c;
    background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle
{
    color: #fff;
    border-color: #f5365c; 
    background-color: #f5365c;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(245, 54, 92, .5);
}

.btn-outline-light
{
    color: #adb5bd;
    border-color: #adb5bd; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-light:hover
{
    color: #fff;
    border-color: #adb5bd; 
    background-color: #adb5bd;
}
.btn-outline-light:focus,
.btn-outline-light.focus
{
    box-shadow: 0 0 0 0 rgba(173, 181, 189, .5);
}
.btn-outline-light.disabled,
.btn-outline-light:disabled
{
    color: #adb5bd;
    background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle
{
    color: #fff;
    border-color: #adb5bd; 
    background-color: #adb5bd;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(173, 181, 189, .5);
}

.btn-outline-dark
{
    color: #212529;
    border-color: #212529; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-dark:hover
{
    color: #fff;
    border-color: #212529; 
    background-color: #212529;
}
.btn-outline-dark:focus,
.btn-outline-dark.focus
{
    box-shadow: 0 0 0 0 rgba(33, 37, 41, .5);
}
.btn-outline-dark.disabled,
.btn-outline-dark:disabled
{
    color: #212529;
    background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle
{
    color: #fff;
    border-color: #212529; 
    background-color: #212529;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(33, 37, 41, .5);
}

.btn-outline-default
{
    color: #172b4d;
    border-color: #172b4d; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-default:hover
{
    color: #fff;
    border-color: #172b4d; 
    background-color: #172b4d;
}
.btn-outline-default:focus,
.btn-outline-default.focus
{
    box-shadow: 0 0 0 0 rgba(23, 43, 77, .5);
}
.btn-outline-default.disabled,
.btn-outline-default:disabled
{
    color: #172b4d;
    background-color: transparent;
}
.btn-outline-default:not(:disabled):not(.disabled):active,
.btn-outline-default:not(:disabled):not(.disabled).active,
.show > .btn-outline-default.dropdown-toggle
{
    color: #fff;
    border-color: #172b4d; 
    background-color: #172b4d;
}
.btn-outline-default:not(:disabled):not(.disabled):active:focus,
.btn-outline-default:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-default.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-outline-white
{
    color: #fff;
    border-color: #fff; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-white:hover
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-outline-white:focus,
.btn-outline-white.focus
{
    box-shadow: 0 0 0 0 rgba(255, 255, 255, .5);
}
.btn-outline-white.disabled,
.btn-outline-white:disabled
{
    color: #fff;
    background-color: transparent;
}
.btn-outline-white:not(:disabled):not(.disabled):active,
.btn-outline-white:not(:disabled):not(.disabled).active,
.show > .btn-outline-white.dropdown-toggle
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-outline-white:not(:disabled):not(.disabled):active:focus,
.btn-outline-white:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-white.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(255, 255, 255, .5);
}

.btn-outline-neutral
{
    color: #fff;
    border-color: #fff; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-neutral:hover
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-outline-neutral:focus,
.btn-outline-neutral.focus
{
    box-shadow: 0 0 0 0 rgba(255, 255, 255, .5);
}
.btn-outline-neutral.disabled,
.btn-outline-neutral:disabled
{
    color: #fff;
    background-color: transparent;
}
.btn-outline-neutral:not(:disabled):not(.disabled):active,
.btn-outline-neutral:not(:disabled):not(.disabled).active,
.show > .btn-outline-neutral.dropdown-toggle
{
    color: #212529;
    border-color: #fff; 
    background-color: #fff;
}
.btn-outline-neutral:not(:disabled):not(.disabled):active:focus,
.btn-outline-neutral:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-neutral.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(255, 255, 255, .5);
}

.btn-outline-darker
{
    color: black;
    border-color: black; 
    background-color: transparent;
    background-image: none;
}
.btn-outline-darker:hover
{
    color: #fff;
    border-color: black; 
    background-color: black;
}
.btn-outline-darker:focus,
.btn-outline-darker.focus
{
    box-shadow: 0 0 0 0 rgba(0, 0, 0, .5);
}
.btn-outline-darker.disabled,
.btn-outline-darker:disabled
{
    color: black;
    background-color: transparent;
}
.btn-outline-darker:not(:disabled):not(.disabled):active,
.btn-outline-darker:not(:disabled):not(.disabled).active,
.show > .btn-outline-darker.dropdown-toggle
{
    color: #fff;
    border-color: black; 
    background-color: black;
}
.btn-outline-darker:not(:disabled):not(.disabled):active:focus,
.btn-outline-darker:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-darker.dropdown-toggle:focus
{
    box-shadow: 0 0 0 0 rgba(0, 0, 0, .5);
}

.btn-link
{
    font-weight: 400;

    color: #5e72e4;
    background-color: transparent;
}
.btn-link:hover
{
    text-decoration: none;

    color: #233dd2;
    border-color: transparent; 
    background-color: transparent;
}
.btn-link:focus,
.btn-link.focus
{
    text-decoration: none;

    border-color: transparent;
    box-shadow: none;
}
.btn-link:disabled,
.btn-link.disabled
{
    pointer-events: none; 

    color: #8898aa;
}

.btn-lg,
.btn-group-lg > .btn
{
    font-size: 1.25rem;
    line-height: 1.5;

    padding: .875rem 1rem;

    border-radius: .4375rem;
}

.btn-sm,
.btn-group-sm > .btn
{
    font-size: .875rem;
    line-height: 1.5;

    padding: .25rem .5rem;

    border-radius: .375rem;
}

.btn-block
{
    display: block;

    width: 100%;
}
.btn-block + .btn-block
{
    margin-top: .5rem;
}

input[type='submit'].btn-block,
input[type='reset'].btn-block,
input[type='button'].btn-block
{
    width: 100%;
}

.fade
{
    transition: opacity .15s linear;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .fade
    {
        transition: none;
    }
}
.fade:not(.show)
{
    opacity: 0;
}

.collapse:not(.show)
{
    display: none;
}

.collapsing
{
    position: relative;

    overflow: hidden;

    height: 0;

    transition: height .35s ease;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .collapsing
    {
        transition: none;
    }
}

.dropup,
.dropright,
.dropdown,
.dropleft
{
    position: relative;
}

.dropdown-toggle::after
{
    display: inline-block;

    width: 0;
    height: 0;
    margin-left: .255em;

    content: '';
    vertical-align: .255em;

    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent;
}

.dropdown-toggle:empty::after
{
    margin-left: 0;
}

.dropdown-menu
{
    font-size: 1rem;

    position: absolute;
    z-index: 1000;
    top: 100%;
    left: 0;

    display: none;
    float: left;

    min-width: 10rem;
    margin: .125rem 0 0;
    padding: .5rem 0;

    list-style: none;

    text-align: left;

    color: #525f7f;
    border: 0 solid rgba(0, 0, 0, .15);
    border-radius: .4375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
}

.dropdown-menu-right
{
    right: 0;
    left: auto;
}

.dropup .dropdown-menu
{
    top: auto;
    bottom: 100%;

    margin-top: 0;
    margin-bottom: .125rem;
}

.dropup .dropdown-toggle::after
{
    display: inline-block;

    width: 0;
    height: 0;
    margin-left: .255em;

    content: '';
    vertical-align: .255em;

    border-top: 0;
    border-right: .3em solid transparent;
    border-bottom: .3em solid;
    border-left: .3em solid transparent;
}

.dropup .dropdown-toggle:empty::after
{
    margin-left: 0;
}

.dropright .dropdown-menu
{
    top: 0;
    right: auto;
    left: 100%;

    margin-top: 0;
    margin-left: .125rem;
}

.dropright .dropdown-toggle::after
{
    display: inline-block;

    width: 0;
    height: 0;
    margin-left: .255em;

    content: '';
    vertical-align: .255em;

    border-top: .3em solid transparent;
    border-right: 0;
    border-bottom: .3em solid transparent;
    border-left: .3em solid;
}

.dropright .dropdown-toggle:empty::after
{
    margin-left: 0;
}

.dropright .dropdown-toggle::after
{
    vertical-align: 0;
}

.dropleft .dropdown-menu
{
    top: 0;
    right: 100%;
    left: auto;

    margin-top: 0;
    margin-right: .125rem;
}

.dropleft .dropdown-toggle::after
{
    display: inline-block;

    width: 0;
    height: 0;
    margin-left: .255em;

    content: ''; 
    vertical-align: .255em;
}

.dropleft .dropdown-toggle::after
{
    display: none;
}

.dropleft .dropdown-toggle::before
{
    display: inline-block;

    width: 0;
    height: 0;
    margin-right: .255em;

    content: '';
    vertical-align: .255em;

    border-top: .3em solid transparent;
    border-right: .3em solid;
    border-bottom: .3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after
{
    margin-left: 0;
}

.dropleft .dropdown-toggle::before
{
    vertical-align: 0;
}

.dropdown-menu[x-placement^='top'],
.dropdown-menu[x-placement^='right'],
.dropdown-menu[x-placement^='bottom'],
.dropdown-menu[x-placement^='left']
{
    right: auto;
    bottom: auto;
}

.dropdown-divider
{
    overflow: hidden;

    height: 0;
    margin: .5rem 0;

    border-top: 1px solid #e9ecef;
}

.dropdown-item
{
    font-weight: 400;

    display: block;
    clear: both;

    width: 100%;
    padding: .25rem 1.5rem;

    text-align: inherit;
    white-space: nowrap;

    color: #212529;
    border: 0; 
    background-color: transparent;
}
.dropdown-item:hover,
.dropdown-item:focus
{
    text-decoration: none;

    color: #16181b;
    background-color: #f6f9fc;
}
.dropdown-item.active,
.dropdown-item:active
{
    text-decoration: none;

    color: #fff;
    background-color: #5e72e4;
}
.dropdown-item.disabled,
.dropdown-item:disabled
{
    color: #8898aa;
    background-color: transparent;
}

.dropdown-menu.show
{
    display: block;
}

.dropdown-header
{
    font-size: .875rem;

    display: block;

    margin-bottom: 0;
    padding: .5rem 1.5rem;

    white-space: nowrap; 

    color: #8898aa;
}

.dropdown-item-text
{
    display: block;

    padding: .25rem 1.5rem;

    color: #212529;
}

.btn-group,
.btn-group-vertical
{
    position: relative;

    display: inline-flex;

    vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn
{
    position: relative;

    flex: 0 1 auto;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover
{
    z-index: 1;
}
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active
{
    z-index: 1;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group,
.btn-group-vertical .btn + .btn,
.btn-group-vertical .btn + .btn-group,
.btn-group-vertical .btn-group + .btn,
.btn-group-vertical .btn-group + .btn-group
{
    margin-left: -1px;
}

.btn-toolbar
{
    display: flex;

    flex-wrap: wrap;
    justify-content: flex-start;
}
.btn-toolbar .input-group
{
    width: auto;
}

.btn-group > .btn:first-child
{
    margin-left: 0;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split
{
    padding-right: .9375rem;
    padding-left: .9375rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after
{
    margin-left: 0;
}
.dropleft .dropdown-toggle-split::before
{
    margin-right: 0;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split
{
    padding-right: .375rem;
    padding-left: .375rem;
}

.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split
{
    padding-right: .75rem;
    padding-left: .75rem;
}

.btn-group.show .dropdown-toggle
{
    box-shadow: none;
}
.btn-group.show .dropdown-toggle.btn-link
{
    box-shadow: none;
}

.btn-group-vertical
{
    flex-direction: column;

    align-items: flex-start;
    justify-content: center;
}
.btn-group-vertical .btn,
.btn-group-vertical .btn-group
{
    width: 100%;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group
{
    margin-top: -1px;
    margin-left: 0;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn
{
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn
{
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn
{
    margin-bottom: 0;
}
.btn-group-toggle > .btn input[type='radio'],
.btn-group-toggle > .btn input[type='checkbox'],
.btn-group-toggle > .btn-group > .btn input[type='radio'],
.btn-group-toggle > .btn-group > .btn input[type='checkbox']
{
    position: absolute;

    clip: rect(0, 0, 0, 0);

    pointer-events: none;
}

.input-group
{
    position: relative;

    display: flex;

    width: 100%; 

    flex-wrap: wrap;
    align-items: stretch;
}
.input-group > .form-control,
.input-group > .custom-select,
.input-group > .custom-file
{
    position: relative;

    width: 1%;
    margin-bottom: 0; 

    flex: 1 1 auto;
}
.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file
{
    margin-left: -1px;
}
.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label
{
    z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus
{
    z-index: 4;
}
.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child)
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child)
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .custom-file
{
    display: flex;

    align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append
{
    display: flex;
}
.input-group-prepend .btn,
.input-group-append .btn
{
    position: relative;
    z-index: 2;
}
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn
{
    margin-left: -1px;
}

.input-group-prepend
{
    margin-right: -1px;
}

.input-group-append
{
    margin-left: -1px;
}

.input-group-text
{
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;

    display: flex;

    margin-bottom: 0;
    padding: .625rem .75rem;

    text-align: center;
    white-space: nowrap;

    color: #adb5bd;
    border: 1px solid #cad1d7;
    border-radius: .375rem; 
    background-color: #fff;

    align-items: center;
}
.input-group-text input[type='radio'],
.input-group-text input[type='checkbox']
{
    margin-top: 0;
}

.input-group-lg > .form-control,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn
{
    font-size: 1.25rem;
    line-height: 1.5;

    height: calc(3.625rem + 2px);
    padding: .875rem 1rem;

    border-radius: .4375rem;
}

.input-group-sm > .form-control,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn
{
    font-size: .875rem;
    line-height: 1.5;

    height: calc(1.8125rem + 2px);
    padding: .25rem .5rem;

    border-radius: .25rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child)
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child)
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.custom-control
{
    position: relative;

    display: block;

    min-height: 1.5rem;
    padding-left: 1.75rem;
}

.custom-control-inline
{
    display: inline-flex;

    margin-right: 1rem;
}

.custom-control-input
{
    position: absolute;
    z-index: -1;

    opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before
{
    color: #fff;
    background-color: #5e72e4;
    box-shadow: none;
}
.custom-control-input:focus ~ .custom-control-label::before
{
    box-shadow: none;
}
.custom-control-input:active ~ .custom-control-label::before
{
    color: #fff;
    background-color: #5e72e4;
    box-shadow: none;
}
.custom-control-input:disabled ~ .custom-control-label
{
    color: #8898aa;
}
.custom-control-input:disabled ~ .custom-control-label::before
{
    background-color: #e9ecef;
}

.custom-control-label
{
    position: relative;

    margin-bottom: 0;
}
.custom-control-label::before
{
    position: absolute;
    top: .125rem;
    left: -1.75rem;

    display: block;

    width: 1.25rem;
    height: 1.25rem;

    content: '';
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    pointer-events: none;

    background-color: #fff;
    box-shadow: none;
}
.custom-control-label::after
{
    position: absolute;
    top: .125rem;
    left: -1.75rem;

    display: block;

    width: 1.25rem;
    height: 1.25rem;

    content: '';

    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before
{
    border-radius: .25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before
{
    background-color: #5e72e4;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3E%3Cpath fill=\'%23fff\' d=\'M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z\'/%3E%3C/svg%3E');
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before
{
    background-color: #5e72e4;
    box-shadow: none;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 4\'%3E%3Cpath stroke=\'%23fff\' d=\'M0 2h4\'/%3E%3C/svg%3E');
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before
{
    background-color: rgba(94, 114, 228, .5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before
{
    background-color: rgba(94, 114, 228, .5);
}

.custom-radio .custom-control-label::before
{
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before
{
    background-color: #5e72e4;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'-4 -4 8 8\'%3E%3Ccircle r=\'3\' fill=\'%23fff\'/%3E%3C/svg%3E');
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before
{
    background-color: rgba(94, 114, 228, .5);
}

.custom-select
{
    line-height: 1.5;

    display: inline-block;

    width: 100%;
    height: calc(2.75rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;

    vertical-align: middle;

    color: #8898aa;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background: #fff url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 4 5\'%3E%3Cpath fill=\'%2332325d\' d=\'M2 0L0 2h4zm0 5L0 3h4z\'/%3E%3C/svg%3E') no-repeat right .75rem center;
    background-size: 8px 10px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075);

    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
}
.custom-select:focus
{
    border-color: rgba(50, 151, 211, .25);
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075), 0 0 0 0 rgba(50, 151, 211, .5);
}
.custom-select:focus::-ms-value
{
    color: #8898aa;
    background-color: #fff;
}
.custom-select[multiple],
.custom-select[size]:not([size='1'])
{
    height: auto;
    padding-right: .75rem;

    background-image: none;
}
.custom-select:disabled
{
    color: #8898aa;
    background-color: #e9ecef;
}
.custom-select::-ms-expand
{
    opacity: 0;
}

.custom-select-sm
{
    font-size: 75%; 

    height: calc(1.8125rem + 2px);
    padding-top: .375rem;
    padding-bottom: .375rem;
}

.custom-select-lg
{
    font-size: 125%; 

    height: calc(3.625rem + 2px);
    padding-top: .375rem;
    padding-bottom: .375rem;
}

.custom-file
{
    position: relative;

    display: inline-block;

    width: 100%;
    height: calc(2.75rem + 2px);
    margin-bottom: 0;
}

.custom-file-input
{
    position: relative;
    z-index: 2;

    width: 100%;
    height: calc(2.75rem + 2px);
    margin: 0;

    opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label
{
    border-color: rgba(50, 151, 211, .25);
    box-shadow: none;
}
.custom-file-input:focus ~ .custom-file-label::after
{
    border-color: rgba(50, 151, 211, .25);
}
.custom-file-input:disabled ~ .custom-file-label
{
    background-color: #e9ecef;
}
.custom-file-input:lang(en) ~ .custom-file-label::after
{
    content: 'Browse';
}

.custom-file-label
{
    line-height: 1.5;

    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    left: 0;

    height: calc(2.75rem + 2px);
    padding: .625rem .75rem;

    color: #8898aa;
    border: 1px solid #cad1d7;
    border-radius: .375rem;
    background-color: #fff;
    box-shadow: none;
}
.custom-file-label::after
{
    line-height: 1.5;

    position: absolute;
    z-index: 3;
    top: 0;
    right: 0;
    bottom: 0;

    display: block;

    height: 2.75rem;
    padding: .625rem .75rem;

    content: 'Browse';

    color: #8898aa;
    border-left: 1px solid #cad1d7;
    border-radius: 0 .375rem .375rem 0; 
    background-color: #fff;
}

.custom-range
{
    width: 100%;
    padding-left: 0;

    background-color: transparent;

    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
}
.custom-range:focus
{
    outline: none;
}
.custom-range:focus::-webkit-slider-thumb
{
    box-shadow: 0 0 0 1px #f8f9fe, none;
}
.custom-range:focus::-moz-range-thumb
{
    box-shadow: 0 0 0 1px #f8f9fe, none;
}
.custom-range:focus::-ms-thumb
{
    box-shadow: 0 0 0 1px #f8f9fe, none;
}
.custom-range::-moz-focus-outer
{
    border: 0;
}
.custom-range::-webkit-slider-thumb
{
    width: 1rem;
    height: 1rem;
    margin-top: -.25rem;

    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    border: 0;
    border-radius: 1rem;
    background-color: #5e72e4;
    box-shadow: 0 .1rem .25rem rgba(0, 0, 0, .1);

    -webkit-appearance: none;
            appearance: none;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .custom-range::-webkit-slider-thumb
    {
        transition: none;
    }
}
.custom-range::-webkit-slider-thumb:active
{
    background-color: #f7f8fe;
}
.custom-range::-webkit-slider-runnable-track
{
    width: 100%;
    height: .5rem;

    cursor: pointer;

    color: transparent;
    border-color: transparent;
    border-radius: 1rem;
    background-color: #dee2e6;
    box-shadow: inset 0 .25rem .25rem rgba(0, 0, 0, .1);
}
.custom-range::-moz-range-thumb
{
    width: 1rem;
    height: 1rem;

    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    border: 0;
    border-radius: 1rem;
    background-color: #5e72e4;
    box-shadow: 0 .1rem .25rem rgba(0, 0, 0, .1);

    -moz-appearance: none;
         appearance: none;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .custom-range::-moz-range-thumb
    {
        transition: none;
    }
}
.custom-range::-moz-range-thumb:active
{
    background-color: #f7f8fe;
}
.custom-range::-moz-range-track
{
    width: 100%;
    height: .5rem;

    cursor: pointer;

    color: transparent;
    border-color: transparent;
    border-radius: 1rem;
    background-color: #dee2e6;
    box-shadow: inset 0 .25rem .25rem rgba(0, 0, 0, .1);
}
.custom-range::-ms-thumb
{
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0;
    margin-left: 0;

    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    border: 0;
    border-radius: 1rem;
    background-color: #5e72e4;
    box-shadow: 0 .1rem .25rem rgba(0, 0, 0, .1);

    appearance: none;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .custom-range::-ms-thumb
    {
        transition: none;
    }
}
.custom-range::-ms-thumb:active
{
    background-color: #f7f8fe;
}
.custom-range::-ms-track
{
    width: 100%;
    height: .5rem;

    cursor: pointer;

    color: transparent;
    border-width: .5rem;
    border-color: transparent;
    background-color: transparent;
    box-shadow: inset 0 .25rem .25rem rgba(0, 0, 0, .1);
}
.custom-range::-ms-fill-lower
{
    border-radius: 1rem; 
    background-color: #dee2e6;
}
.custom-range::-ms-fill-upper
{
    margin-right: 15px;

    border-radius: 1rem; 
    background-color: #dee2e6;
}

.custom-control-label::before,
.custom-file-label,
.custom-select
{
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .custom-control-label::before,
    .custom-file-label,
    .custom-select
    {
        transition: none;
    }
}

.nav
{
    display: flex;

    margin-bottom: 0;
    padding-left: 0;

    list-style: none; 

    flex-wrap: wrap;
}

.nav-link
{
    display: block;

    padding: .25rem .75rem;
}
.nav-link:hover,
.nav-link:focus
{
    text-decoration: none;
}
.nav-link.disabled
{
    color: #8898aa;
}

.nav-tabs
{
    border-bottom: 1px solid #dee2e6;
}
.nav-tabs .nav-item
{
    margin-bottom: -1px;
}
.nav-tabs .nav-link
{
    border: 1px solid transparent;
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus
{
    border-color: #e9ecef #e9ecef #dee2e6;
}
.nav-tabs .nav-link.disabled
{
    color: #8898aa;
    border-color: transparent; 
    background-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link
{
    color: #525f7f;
    border-color: #dee2e6 #dee2e6 #f8f9fe; 
    background-color: #f8f9fe;
}
.nav-tabs .dropdown-menu
{
    margin-top: -1px;

    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills .nav-link
{
    border-radius: .375rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link
{
    color: #fff;
    background-color: #5e72e4;
}

.nav-fill .nav-item
{
    text-align: center; 

    flex: 1 1 auto;
}

.nav-justified .nav-item
{
    text-align: center; 

    flex-basis: 0;
    flex-grow: 1;
}

.tab-content > .tab-pane
{
    display: none;
}

.tab-content > .active
{
    display: block;
}

.navbar
{
    position: relative;

    display: flex;

    padding: 1rem 1rem; 

    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.navbar > .container,
.navbar > .container-fluid
{
    display: flex;

    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

.navbar-brand
{
    font-size: 1.25rem;
    line-height: inherit;

    display: inline-block;

    margin-right: 1rem;
    padding-top: .0625rem;
    padding-bottom: .0625rem;

    white-space: nowrap;
}
.navbar-brand:hover,
.navbar-brand:focus
{
    text-decoration: none;
}

.navbar-nav
{
    display: flex;
    flex-direction: column;

    margin-bottom: 0;
    padding-left: 0;

    list-style: none;
}
.navbar-nav .nav-link
{
    padding-right: 0;
    padding-left: 0;
}
.navbar-nav .dropdown-menu
{
    position: static;

    float: none;
}

.navbar-text
{
    display: inline-block;

    padding-top: .25rem;
    padding-bottom: .25rem;
}

.navbar-collapse
{
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler
{
    font-size: 1.25rem;
    line-height: 1;

    padding: .25rem .75rem;

    border: 1px solid transparent;
    border-radius: .375rem; 
    background-color: transparent;
}
.navbar-toggler:hover,
.navbar-toggler:focus
{
    text-decoration: none;
}
.navbar-toggler:not(:disabled):not(.disabled)
{
    cursor: pointer;
}

.navbar-toggler-icon
{
    display: inline-block;

    width: 1.5em;
    height: 1.5em;

    content: '';
    vertical-align: middle;

    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px)
{
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid
    {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px)
{
    .navbar-expand-sm
    {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-sm .navbar-nav
    {
        flex-direction: row;
    }
    .navbar-expand-sm .navbar-nav .dropdown-menu
    {
        position: absolute;
    }
    .navbar-expand-sm .navbar-nav .nav-link
    {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid
    {
        flex-wrap: nowrap;
    }
    .navbar-expand-sm .navbar-collapse
    {
        display: flex !important;

        flex-basis: auto;
    }
    .navbar-expand-sm .navbar-toggler
    {
        display: none;
    }
}

@media (max-width: 767.98px)
{
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid
    {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px)
{
    .navbar-expand-md
    {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-md .navbar-nav
    {
        flex-direction: row;
    }
    .navbar-expand-md .navbar-nav .dropdown-menu
    {
        position: absolute;
    }
    .navbar-expand-md .navbar-nav .nav-link
    {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid
    {
        flex-wrap: nowrap;
    }
    .navbar-expand-md .navbar-collapse
    {
        display: flex !important;

        flex-basis: auto;
    }
    .navbar-expand-md .navbar-toggler
    {
        display: none;
    }
}

@media (max-width: 991.98px)
{
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid
    {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px)
{
    .navbar-expand-lg
    {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-lg .navbar-nav
    {
        flex-direction: row;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu
    {
        position: absolute;
    }
    .navbar-expand-lg .navbar-nav .nav-link
    {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid
    {
        flex-wrap: nowrap;
    }
    .navbar-expand-lg .navbar-collapse
    {
        display: flex !important;

        flex-basis: auto;
    }
    .navbar-expand-lg .navbar-toggler
    {
        display: none;
    }
}

@media (max-width: 1199.98px)
{
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid
    {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1200px)
{
    .navbar-expand-xl
    {
        flex-flow: row nowrap;
        justify-content: flex-start;
    }
    .navbar-expand-xl .navbar-nav
    {
        flex-direction: row;
    }
    .navbar-expand-xl .navbar-nav .dropdown-menu
    {
        position: absolute;
    }
    .navbar-expand-xl .navbar-nav .nav-link
    {
        padding-right: 1rem;
        padding-left: 1rem;
    }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid
    {
        flex-wrap: nowrap;
    }
    .navbar-expand-xl .navbar-collapse
    {
        display: flex !important;

        flex-basis: auto;
    }
    .navbar-expand-xl .navbar-toggler
    {
        display: none;
    }
}

.navbar-expand
{
    flex-flow: row nowrap;
    justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid
{
    padding-right: 0;
    padding-left: 0;
}
.navbar-expand .navbar-nav
{
    flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu
{
    position: absolute;
}
.navbar-expand .navbar-nav .nav-link
{
    padding-right: 1rem;
    padding-left: 1rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid
{
    flex-wrap: nowrap;
}
.navbar-expand .navbar-collapse
{
    display: flex !important;

    flex-basis: auto;
}
.navbar-expand .navbar-toggler
{
    display: none;
}

.navbar-light .navbar-brand
{
    color: rgba(0, 0, 0, .9);
}
.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus
{
    color: rgba(0, 0, 0, .9);
}

.navbar-light .navbar-nav .nav-link
{
    color: rgba(0, 0, 0, .5);
}
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus
{
    color: rgba(0, 0, 0, .7);
}
.navbar-light .navbar-nav .nav-link.disabled
{
    color: rgba(0, 0, 0, .3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active
{
    color: rgba(0, 0, 0, .9);
}

.navbar-light .navbar-toggler
{
    color: rgba(0, 0, 0, .5);
    border-color: transparent;
}

.navbar-light .navbar-toggler-icon
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(0, 0, 0, 0.5)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');
}

.navbar-light .navbar-text
{
    color: rgba(0, 0, 0, .5);
}
.navbar-light .navbar-text a
{
    color: rgba(0, 0, 0, .9);
}
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus
{
    color: rgba(0, 0, 0, .9);
}

.navbar-dark .navbar-brand
{
    color: rgba(255, 255, 255, .65);
}
.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus
{
    color: rgba(255, 255, 255, .65);
}

.navbar-dark .navbar-nav .nav-link
{
    color: rgba(255, 255, 255, .95);
}
.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus
{
    color: rgba(255, 255, 255, .65);
}
.navbar-dark .navbar-nav .nav-link.disabled
{
    color: rgba(255, 255, 255, .25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active
{
    color: rgba(255, 255, 255, .65);
}

.navbar-dark .navbar-toggler
{
    color: rgba(255, 255, 255, .95);
    border-color: transparent;
}

.navbar-dark .navbar-toggler-icon
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255, 255, 255, 0.95)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');
}

.navbar-dark .navbar-text
{
    color: rgba(255, 255, 255, .95);
}
.navbar-dark .navbar-text a
{
    color: rgba(255, 255, 255, .65);
}
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus
{
    color: rgba(255, 255, 255, .65);
}

.card
{
    position: relative;

    display: flex;
    flex-direction: column;

    min-width: 0;

    word-wrap: break-word;

    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem; 
    background-color: #fff;
    background-clip: border-box;
}
.card > hr
{
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child
{
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
}
.card > .list-group:last-child .list-group-item:last-child
{
    border-bottom-right-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.card-body
{
    padding: 1.5rem; 

    flex: 1 1 auto;
}

.card-title
{
    margin-bottom: 1.25rem;
}

.card-subtitle
{
    margin-top: -.625rem;
    margin-bottom: 0;
}

.card-text:last-child
{
    margin-bottom: 0;
}

.card-link:hover
{
    text-decoration: none;
}

.card-link + .card-link
{
    margin-left: 1.5rem;
}

.card-header
{
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;

    border-bottom: 1px solid rgba(0, 0, 0, .05); 
    background-color: #fff;
}
.card-header:first-child
{
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child
{
    border-top: 0;
}

.card-footer
{
    padding: 1.25rem 1.5rem;

    border-top: 1px solid rgba(0, 0, 0, .05); 
    background-color: #fff;
}
.card-footer:last-child
{
    border-radius: 0 0 calc(.375rem - 1px) calc(.375rem - 1px);
}

.card-header-tabs
{
    margin-right: -.75rem;
    margin-bottom: -1.25rem;
    margin-left: -.75rem;

    border-bottom: 0;
}

.card-header-pills
{
    margin-right: -.75rem;
    margin-left: -.75rem;
}

.card-img-overlay
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    padding: 1.25rem;
}

.card-img
{
    width: 100%;

    border-radius: calc(.375rem - 1px);
}

.card-img-top
{
    width: 100%;

    border-top-left-radius: calc(.375rem - 1px);
    border-top-right-radius: calc(.375rem - 1px);
}

.card-img-bottom
{
    width: 100%;

    border-bottom-right-radius: calc(.375rem - 1px);
    border-bottom-left-radius: calc(.375rem - 1px);
}

.card-deck
{
    display: flex;
    flex-direction: column;
}
.card-deck .card
{
    margin-bottom: 15px;
}
@media (min-width: 576px)
{
    .card-deck
    {
        margin-right: -15px;
        margin-left: -15px; 

        flex-flow: row wrap;
    }
    .card-deck .card
    {
        display: flex;
        flex-direction: column;

        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; 

        flex: 1 0;
    }
}

.card-group
{
    display: flex;
    flex-direction: column;
}
.card-group > .card
{
    margin-bottom: 15px;
}
@media (min-width: 576px)
{
    .card-group
    {
        flex-flow: row wrap;
    }
    .card-group > .card
    {
        margin-bottom: 0; 

        flex: 1 0;
    }
    .card-group > .card + .card
    {
        margin-left: 0;

        border-left: 0;
    }
    .card-group > .card:first-child
    {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .card-group > .card:first-child .card-img-top,
    .card-group > .card:first-child .card-header
    {
        border-top-right-radius: 0;
    }
    .card-group > .card:first-child .card-img-bottom,
    .card-group > .card:first-child .card-footer
    {
        border-bottom-right-radius: 0;
    }
    .card-group > .card:last-child
    {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .card-group > .card:last-child .card-img-top,
    .card-group > .card:last-child .card-header
    {
        border-top-left-radius: 0;
    }
    .card-group > .card:last-child .card-img-bottom,
    .card-group > .card:last-child .card-footer
    {
        border-bottom-left-radius: 0;
    }
    .card-group > .card:only-child
    {
        border-radius: .375rem;
    }
    .card-group > .card:only-child .card-img-top,
    .card-group > .card:only-child .card-header
    {
        border-top-left-radius: .375rem;
        border-top-right-radius: .375rem;
    }
    .card-group > .card:only-child .card-img-bottom,
    .card-group > .card:only-child .card-footer
    {
        border-bottom-right-radius: .375rem;
        border-bottom-left-radius: .375rem;
    }
    .card-group > .card:not(:first-child):not(:last-child):not(:only-child)
    {
        border-radius: 0;
    }
    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer
    {
        border-radius: 0;
    }
}

.card-columns .card
{
    margin-bottom: 1.25rem;
}

@media (min-width: 576px)
{
    .card-columns
    {
        column-count: 3;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }
    .card-columns .card
    {
        display: inline-block;

        width: 100%;
    }
}

.accordion .card:not(:first-of-type):not(:last-of-type)
{
    border-bottom: 0;
    border-radius: 0;
}

.accordion .card:not(:first-of-type) .card-header:first-child
{
    border-radius: 0;
}

.accordion .card:first-of-type
{
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion .card:last-of-type
{
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.breadcrumb
{
    display: flex;

    margin-bottom: 1rem;
    padding: .75rem 1rem;

    list-style: none;

    border-radius: .375rem; 
    background-color: #e9ecef;

    flex-wrap: wrap;
}

.breadcrumb-item + .breadcrumb-item
{
    padding-left: .5rem;
}
.breadcrumb-item + .breadcrumb-item::before
{
    display: inline-block;

    padding-right: .5rem;

    content: '/'; 

    color: #8898aa;
}

.breadcrumb-item + .breadcrumb-item:hover::before
{
    text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before
{
    text-decoration: none;
}

.breadcrumb-item.active
{
    color: #8898aa;
}

.pagination
{
    display: flex;

    padding-left: 0;

    list-style: none;

    border-radius: .375rem;
}

.page-link
{
    line-height: 1.25;

    position: relative;

    display: block;

    margin-left: -1px;
    padding: .5rem .75rem;

    color: #8898aa;
    border: 1px solid #dee2e6; 
    background-color: #fff;
}
.page-link:hover
{
    z-index: 2;

    text-decoration: none;

    color: #8898aa;
    border-color: #dee2e6; 
    background-color: #dee2e6;
}
.page-link:focus
{
    z-index: 2;

    outline: 0;
    box-shadow: none;
}
.page-link:not(:disabled):not(.disabled)
{
    cursor: pointer;
}

.page-item:first-child .page-link
{
    margin-left: 0;

    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.page-item:last-child .page-link
{
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem;
}

.page-item.active .page-link
{
    z-index: 1;

    color: #fff;
    border-color: #5e72e4; 
    background-color: #5e72e4;
}

.page-item.disabled .page-link
{
    cursor: auto;
    pointer-events: none;

    color: #8898aa;
    border-color: #dee2e6; 
    background-color: #fff;
}

.pagination-lg .page-link
{
    font-size: 1.25rem;
    line-height: 1.5; 

    padding: .75rem 1.5rem;
}

.pagination-lg .page-item:first-child .page-link
{
    border-top-left-radius: .4375rem;
    border-bottom-left-radius: .4375rem;
}

.pagination-lg .page-item:last-child .page-link
{
    border-top-right-radius: .4375rem;
    border-bottom-right-radius: .4375rem;
}

.pagination-sm .page-link
{
    font-size: .875rem;
    line-height: 1.5; 

    padding: .25rem .5rem;
}

.pagination-sm .page-item:first-child .page-link
{
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem;
}

.pagination-sm .page-item:last-child .page-link
{
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
}

.badge
{
    font-size: 66%;
    font-weight: 600;
    line-height: 1;

    display: inline-block;

    padding: .35rem .375rem;

    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;

    border-radius: .375rem;
}
.badge:empty
{
    display: none;
}

.btn .badge
{
    position: relative;
    top: -1px;
}

.badge-pill
{
    padding-right: .875em;
    padding-left: .875em;

    border-radius: 10rem;
}

.badge-primary
{
    color: #2643e9;
    background-color: rgba(203, 210, 246, .5);
}
.badge-primary[href]:hover,
.badge-primary[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #324cdd;
}

.badge-secondary
{
    color: #cfe3f1;
    background-color: rgba(255, 255, 255, .5);
}
.badge-secondary[href]:hover,
.badge-secondary[href]:focus
{
    text-decoration: none;

    color: #212529;
    background-color: #d2e3ee;
}

.badge-success
{
    color: #1aae6f;
    background-color: rgba(147, 231, 195, .5);
}
.badge-success[href]:hover,
.badge-success[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #24a46d;
}

.badge-info
{
    color: #03acca;
    background-color: rgba(136, 230, 247, .5);
}
.badge-info[href]:hover,
.badge-info[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #0da5c0;
}

.badge-warning
{
    color: #ff3709;
    background-color: rgba(254, 201, 189, .5);
}
.badge-warning[href]:hover,
.badge-warning[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #fa3a0e;
}

.badge-danger
{
    color: #f80031;
    background-color: rgba(251, 175, 190, .5);
}
.badge-danger[href]:hover,
.badge-danger[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #ec0c38;
}

.badge-light
{
    color: #879cb0;
    background-color: rgba(244, 245, 246, .5);
}
.badge-light[href]:hover,
.badge-light[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #919ca6;
}

.badge-dark
{
    color: #090c0e;
    background-color: rgba(90, 101, 112, .5);
}
.badge-dark[href]:hover,
.badge-dark[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #0a0c0d;
}

.badge-default
{
    color: #091428;
    background-color: rgba(52, 98, 175, .5);
}
.badge-default[href]:hover,
.badge-default[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: #0b1526;
}

.badge-white
{
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, .5);
}
.badge-white[href]:hover,
.badge-white[href]:focus
{
    text-decoration: none;

    color: #212529;
    background-color: #e6e6e6;
}

.badge-neutral
{
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, .5);
}
.badge-neutral[href]:hover,
.badge-neutral[href]:focus
{
    text-decoration: none;

    color: #212529;
    background-color: #e6e6e6;
}

.badge-darker
{
    color: black;
    background-color: rgba(64, 64, 64, .5);
}
.badge-darker[href]:hover,
.badge-darker[href]:focus
{
    text-decoration: none;

    color: #fff;
    background-color: black;
}

.jumbotron
{
    margin-bottom: 2rem;
    padding: 2rem 1rem;

    border-radius: .4375rem; 
    background-color: #e9ecef;
}
@media (min-width: 576px)
{
    .jumbotron
    {
        padding: 4rem 2rem;
    }
}

.jumbotron-fluid
{
    padding-right: 0;
    padding-left: 0;

    border-radius: 0;
}

.alert
{
    position: relative;

    margin-bottom: 1rem;
    padding: 1rem 1.5rem;

    border: 1px solid transparent;
    border-radius: .375rem;
}

.alert-heading
{
    color: inherit;
}

.alert-link
{
    font-weight: 600;
}

.alert-dismissible
{
    padding-right: 4.5rem;
}
.alert-dismissible .close
{
    position: absolute;
    top: 0;
    right: 0;

    padding: 1rem 1.5rem;

    color: inherit;
}

.alert-primary
{
    color: #fff;
    border-color: #7889e8; 
    background-color: #7889e8;
}
.alert-primary hr
{
    border-top-color: #6276e4;
}
.alert-primary .alert-link
{
    color: #324cdd;
}

.alert-secondary
{
    color: #212529;
    border-color: #f8fbfc; 
    background-color: #f8fbfc;
}
.alert-secondary hr
{
    border-top-color: #e6f1f4;
}
.alert-secondary .alert-link
{
    color: #d2e3ee;
}

.alert-success
{
    color: #fff;
    border-color: #4fd69c; 
    background-color: #4fd69c;
}
.alert-success hr
{
    border-top-color: #3ad190;
}
.alert-success .alert-link
{
    color: #24a46d;
}

.alert-info
{
    color: #fff;
    border-color: #37d5f2; 
    background-color: #37d5f2;
}
.alert-info hr
{
    border-top-color: #1fd0f0;
}
.alert-info .alert-link
{
    color: #0da5c0;
}

.alert-warning
{
    color: #fff;
    border-color: #fc7c5f; 
    background-color: #fc7c5f;
}
.alert-warning hr
{
    border-top-color: #fc6846;
}
.alert-warning .alert-link
{
    color: #fa3a0e;
}

.alert-danger
{
    color: #fff;
    border-color: #f75676; 
    background-color: #f75676;
}
.alert-danger hr
{
    border-top-color: #f63e62;
}
.alert-danger .alert-link
{
    color: #ec0c38;
}

.alert-light
{
    color: #fff;
    border-color: #bac1c8; 
    background-color: #bac1c8;
}
.alert-light hr
{
    border-top-color: #acb4bd;
}
.alert-light .alert-link
{
    color: #919ca6;
}

.alert-dark
{
    color: #fff;
    border-color: #45484b; 
    background-color: #45484b;
}
.alert-dark hr
{
    border-top-color: #393b3e;
}
.alert-dark .alert-link
{
    color: #0a0c0d;
}

.alert-default
{
    color: #fff;
    border-color: #3c4d69; 
    background-color: #3c4d69;
}
.alert-default hr
{
    border-top-color: #334159;
}
.alert-default .alert-link
{
    color: #0b1526;
}

.alert-white
{
    color: #212529;
    border-color: white; 
    background-color: white;
}
.alert-white hr
{
    border-top-color: #f2f2f2;
}
.alert-white .alert-link
{
    color: #e6e6e6;
}

.alert-neutral
{
    color: #212529;
    border-color: white; 
    background-color: white;
}
.alert-neutral hr
{
    border-top-color: #f2f2f2;
}
.alert-neutral .alert-link
{
    color: #e6e6e6;
}

.alert-darker
{
    color: #fff;
    border-color: #292929; 
    background-color: #292929;
}
.alert-darker hr
{
    border-top-color: #1c1c1c;
}
.alert-darker .alert-link
{
    color: black;
}

@keyframes progress-bar-stripes
{
    from
    {
        background-position: 1rem 0;
    }
    to
    {
        background-position: 0 0;
    }
}

.progress
{
    font-size: .75rem;

    display: flex;
    overflow: hidden;

    height: 1rem;

    border-radius: .375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.progress-bar
{
    display: flex;
    flex-direction: column;

    transition: width .6s ease; 
    text-align: center;
    white-space: nowrap;

    color: #fff;
    background-color: #5e72e4;

    justify-content: center;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .progress-bar
    {
        transition: none;
    }
}

.progress-bar-striped
{
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

.progress-bar-animated
{
    animation: progress-bar-stripes 1s linear infinite;
}

.media
{
    display: flex;

    align-items: flex-start;
}

.media-body
{
    flex: 1 1;
}

.list-group
{
    display: flex;
    flex-direction: column;

    margin-bottom: 0; 
    padding-left: 0;
}

.list-group-item-action
{
    width: 100%;

    text-align: inherit; 

    color: #525f7f;
}
.list-group-item-action:hover,
.list-group-item-action:focus
{
    text-decoration: none;

    color: #525f7f;
    background-color: #f6f9fc;
}
.list-group-item-action:active
{
    color: #525f7f;
    background-color: #e9ecef;
}

.list-group-item
{
    position: relative;

    display: block;

    margin-bottom: -1px;
    padding: 1rem 1rem;

    border: 1px solid #e9ecef; 
    background-color: #fff;
}
.list-group-item:first-child
{
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
}
.list-group-item:last-child
{
    margin-bottom: 0;

    border-bottom-right-radius: .375rem;
    border-bottom-left-radius: .375rem;
}
.list-group-item:hover,
.list-group-item:focus
{
    z-index: 1;

    text-decoration: none;
}
.list-group-item.disabled,
.list-group-item:disabled
{
    color: #8898aa;
    background-color: #fff;
}
.list-group-item.active
{
    z-index: 2;

    color: #fff;
    border-color: #5e72e4; 
    background-color: #5e72e4;
}

.list-group-flush .list-group-item
{
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child
{
    border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child
{
    border-bottom: 0;
}

.list-group-item-primary
{
    color: #313b77;
    background-color: #d2d8f7;
}
.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus
{
    color: #313b77;
    background-color: #bcc5f3;
}
.list-group-item-primary.list-group-item-action.active
{
    color: #fff;
    border-color: #313b77; 
    background-color: #313b77;
}

.list-group-item-secondary
{
    color: #808283;
    background-color: #fdfefe;
}
.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus
{
    color: #808283;
    background-color: #ecf6f6;
}
.list-group-item-secondary.list-group-item-action.active
{
    color: #fff;
    border-color: #808283; 
    background-color: #808283;
}

.list-group-item-success
{
    color: #176b47;
    background-color: #c4f1de;
}
.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus
{
    color: #176b47;
    background-color: #afecd2;
}
.list-group-item-success.list-group-item-action.active
{
    color: #fff;
    border-color: #176b47; 
    background-color: #176b47;
}

.list-group-item-info
{
    color: #096b7c;
    background-color: #bcf1fb;
}
.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus
{
    color: #096b7c;
    background-color: #a4ecfa;
}
.list-group-item-info.list-group-item-action.active
{
    color: #fff;
    border-color: #096b7c; 
    background-color: #096b7c;
}

.list-group-item-warning
{
    color: #833321;
    background-color: #fed3ca;
}
.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus
{
    color: #833321;
    background-color: #febeb1;
}
.list-group-item-warning.list-group-item-action.active
{
    color: #fff;
    border-color: #833321; 
    background-color: #833321;
}

.list-group-item-danger
{
    color: #7f1c30;
    background-color: #fcc7d1;
}
.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus
{
    color: #7f1c30;
    background-color: #fbafbd;
}
.list-group-item-danger.list-group-item-action.active
{
    color: #fff;
    border-color: #7f1c30; 
    background-color: #7f1c30;
}

.list-group-item-light
{
    color: #5a5e62;
    background-color: #e8eaed;
}
.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus
{
    color: #5a5e62;
    background-color: #dadde2;
}
.list-group-item-light.list-group-item-action.active
{
    color: #fff;
    border-color: #5a5e62; 
    background-color: #5a5e62;
}

.list-group-item-dark
{
    color: #111315;
    background-color: #c1c2c3;
}
.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus
{
    color: #111315;
    background-color: #b4b5b6;
}
.list-group-item-dark.list-group-item-action.active
{
    color: #fff;
    border-color: #111315; 
    background-color: #111315;
}

.list-group-item-default
{
    color: #0c1628;
    background-color: #bec4cd;
}
.list-group-item-default.list-group-item-action:hover,
.list-group-item-default.list-group-item-action:focus
{
    color: #0c1628;
    background-color: #b0b7c2;
}
.list-group-item-default.list-group-item-action.active
{
    color: #fff;
    border-color: #0c1628; 
    background-color: #0c1628;
}

.list-group-item-white
{
    color: #858585;
    background-color: white;
}
.list-group-item-white.list-group-item-action:hover,
.list-group-item-white.list-group-item-action:focus
{
    color: #858585;
    background-color: #f2f2f2;
}
.list-group-item-white.list-group-item-action.active
{
    color: #fff;
    border-color: #858585; 
    background-color: #858585;
}

.list-group-item-neutral
{
    color: #858585;
    background-color: white;
}
.list-group-item-neutral.list-group-item-action:hover,
.list-group-item-neutral.list-group-item-action:focus
{
    color: #858585;
    background-color: #f2f2f2;
}
.list-group-item-neutral.list-group-item-action.active
{
    color: #fff;
    border-color: #858585; 
    background-color: #858585;
}

.list-group-item-darker
{
    color: black;
    background-color: #b8b8b8;
}
.list-group-item-darker.list-group-item-action:hover,
.list-group-item-darker.list-group-item-action:focus
{
    color: black;
    background-color: #ababab;
}
.list-group-item-darker.list-group-item-action.active
{
    color: #fff;
    border-color: black; 
    background-color: black;
}

.close
{
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1;

    float: right;

    opacity: .5; 
    color: rgba(0, 0, 0, .6);
    text-shadow: none;
}
.close:not(:disabled):not(.disabled)
{
    cursor: pointer;
}
.close:not(:disabled):not(.disabled):hover,
.close:not(:disabled):not(.disabled):focus
{
    text-decoration: none;

    opacity: .75; 
    color: rgba(0, 0, 0, .6);
}

button.close
{
    padding: 0;

    border: 0;
    background-color: transparent;

    -webkit-appearance: none;
}

.modal-open
{
    overflow: hidden;
}
.modal-open .modal
{
    overflow-x: hidden;
    overflow-y: auto;
}

.modal
{
    position: fixed;
    z-index: 1050;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    display: none;
    overflow: hidden;

    outline: 0;
}

.modal-dialog
{
    position: relative;

    width: auto;
    margin: .5rem;

    pointer-events: none;
}
.modal.fade .modal-dialog
{
    transition: transform .3s ease-out;
    transform: translate(0, -25%);
}
@media screen and (prefers-reduced-motion: reduce)
{
    .modal.fade .modal-dialog
    {
        transition: none;
    }
}
.modal.show .modal-dialog
{
    transform: translate(0, 0);
}

.modal-dialog-centered
{
    display: flex;

    min-height: calc(100% - (.5rem * 2)); 

    align-items: center;
}
.modal-dialog-centered::before
{
    display: block;

    height: calc(100vh - (.5rem * 2));

    content: '';
}

.modal-content
{
    position: relative;

    display: flex;
    flex-direction: column;

    width: 100%;

    pointer-events: auto;

    border: 0 solid rgba(0, 0, 0, .2);
    border-radius: .4375rem;
    outline: 0; 
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 15px 35px rgba(50, 50, 93, .2), 0 5px 15px rgba(0, 0, 0, .17);
}

.modal-backdrop
{
    position: fixed;
    z-index: 1040;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    background-color: #000;
}
.modal-backdrop.fade
{
    opacity: 0;
}
.modal-backdrop.show
{
    opacity: .16;
}

.modal-header
{
    display: flex;

    padding: 1.25rem;

    border-bottom: 0 solid #e9ecef;
    border-top-left-radius: .4375rem;
    border-top-right-radius: .4375rem; 

    align-items: flex-start;
    justify-content: space-between;
}
.modal-header .close
{
    margin: -1.25rem -1.25rem -1.25rem auto; 
    padding: 1.25rem;
}

.modal-title
{
    line-height: 1.1; 

    margin-bottom: 0;
}

.modal-body
{
    position: relative;

    padding: 1.5rem; 

    flex: 1 1 auto;
}

.modal-footer
{
    display: flex;

    padding: 1.5rem;

    border-top: 0 solid #e9ecef; 

    align-items: center;
    justify-content: flex-end;
}
.modal-footer > :not(:first-child)
{
    margin-left: .25rem;
}
.modal-footer > :not(:last-child)
{
    margin-right: .25rem;
}

.modal-scrollbar-measure
{
    position: absolute;
    top: -9999px;

    overflow: scroll; 

    width: 50px;
    height: 50px;
}

@media (min-width: 576px)
{
    .modal-dialog
    {
        max-width: 500px;
        margin: 1.75rem auto;
    }
    .modal-dialog-centered
    {
        min-height: calc(100% - (1.75rem * 2));
    }
    .modal-dialog-centered::before
    {
        height: calc(100vh - (1.75rem * 2));
    }
    .modal-content
    {
        box-shadow: 0 15px 35px rgba(50, 50, 93, .2), 0 5px 15px rgba(0, 0, 0, .17);
    }
    .modal-sm
    {
        max-width: 380px;
    }
}

@media (min-width: 992px)
{
    .modal-lg
    {
        max-width: 800px;
    }
}

.tooltip
{
    font-family: Open Sans, sans-serif;
    font-size: .875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;

    position: absolute;
    z-index: 1070;

    display: block;

    margin: 0;

    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;

    opacity: 0; 
    text-shadow: none;

    line-break: auto;
}
.tooltip.show
{
    opacity: .9;
}
.tooltip .arrow
{
    position: absolute;

    display: block;

    width: .8rem;
    height: .4rem;
}
.tooltip .arrow::before
{
    position: absolute;

    content: '';

    border-style: solid; 
    border-color: transparent;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^='top']
{
    padding: .4rem 0;
}
.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^='top'] .arrow
{
    bottom: 0;
}
.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^='top'] .arrow::before
{
    top: 0;

    border-width: .4rem .4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^='right']
{
    padding: 0 .4rem;
}
.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^='right'] .arrow
{
    left: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^='right'] .arrow::before
{
    right: 0;

    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^='bottom']
{
    padding: .4rem 0;
}
.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^='bottom'] .arrow
{
    top: 0;
}
.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^='bottom'] .arrow::before
{
    bottom: 0;

    border-width: 0 .4rem .4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^='left']
{
    padding: 0 .4rem;
}
.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^='left'] .arrow
{
    right: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^='left'] .arrow::before
{
    left: 0;

    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000;
}

.tooltip-inner
{
    max-width: 200px;
    padding: .25rem .5rem;

    text-align: center;

    color: #fff;
    border-radius: .375rem; 
    background-color: #000;
}

.popover
{
    font-family: Open Sans, sans-serif;
    font-size: .875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;

    position: absolute;
    z-index: 1060;
    top: 0;
    left: 0;

    display: block;

    max-width: 276px;

    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;

    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .4375rem;
    background-color: #fff;
    background-clip: padding-box;
    box-shadow: 0 .5rem 2rem 0 rgba(0, 0, 0, .2); 
    text-shadow: none;

    line-break: auto;
}
.popover .arrow
{
    position: absolute;

    display: block;

    width: 1.5rem;
    height: .75rem;
    margin: 0 .4375rem;
}
.popover .arrow::before,
.popover .arrow::after
{
    position: absolute;

    display: block;

    content: '';

    border-style: solid; 
    border-color: transparent;
}

.bs-popover-top,
.bs-popover-auto[x-placement^='top']
{
    margin-bottom: .75rem;
}
.bs-popover-top .arrow,
.bs-popover-auto[x-placement^='top'] .arrow
{
    bottom: calc((.75rem + 1px) * -1);
}
.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^='top'] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-width: .75rem .75rem 0;
}
.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^='top'] .arrow::before
{
    bottom: 0;

    border-top-color: transparent;
}

.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^='top'] .arrow::after
{
    bottom: 1px;

    border-top-color: #fff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^='right']
{
    margin-left: .75rem;
}
.bs-popover-right .arrow,
.bs-popover-auto[x-placement^='right'] .arrow
{
    left: calc((.75rem + 1px) * -1);

    width: .75rem;
    height: 1.5rem;
    margin: .4375rem 0;
}
.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^='right'] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-width: .75rem .75rem .75rem 0;
}
.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^='right'] .arrow::before
{
    left: 0;

    border-right-color: transparent;
}

.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^='right'] .arrow::after
{
    left: 1px;

    border-right-color: #fff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^='bottom']
{
    margin-top: .75rem;
}
.bs-popover-bottom .arrow,
.bs-popover-auto[x-placement^='bottom'] .arrow
{
    top: calc((.75rem + 1px) * -1);
}
.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^='bottom'] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-width: 0 .75rem .75rem .75rem;
}
.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^='bottom'] .arrow::before
{
    top: 0;

    border-bottom-color: transparent;
}

.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    top: 1px;

    border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^='bottom'] .popover-header::before
{
    position: absolute;
    top: 0;
    left: 50%;

    display: block;

    width: 1.5rem;
    margin-left: -.75rem;

    content: '';

    border-bottom: 1px solid #fff;
}

.bs-popover-left,
.bs-popover-auto[x-placement^='left']
{
    margin-right: .75rem;
}
.bs-popover-left .arrow,
.bs-popover-auto[x-placement^='left'] .arrow
{
    right: calc((.75rem + 1px) * -1);

    width: .75rem;
    height: 1.5rem;
    margin: .4375rem 0;
}
.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^='left'] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-width: .75rem 0 .75rem .75rem;
}
.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^='left'] .arrow::before
{
    right: 0;

    border-left-color: transparent;
}

.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^='left'] .arrow::after
{
    right: 1px;

    border-left-color: #fff;
}

.popover-header
{
    font-size: 1rem;

    margin-bottom: 0;
    padding: .5rem .95rem;

    color: #32325d;
    border-bottom: 1px solid #f2f2f2;
    border-top-left-radius: calc(.4375rem - 1px);
    border-top-right-radius: calc(.4375rem - 1px); 
    background-color: #fff;
}
.popover-header:empty
{
    display: none;
}

.popover-body
{
    padding: .5rem .95rem;

    color: #525f7f;
}

.carousel
{
    position: relative;
}

.carousel-inner
{
    position: relative;

    overflow: hidden; 

    width: 100%;
}

.carousel-item
{
    position: relative;

    display: none;

    width: 100%;

    align-items: center;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    perspective: 1000px;
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev
{
    display: block;

    transition: transform .6s ease;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev
    {
        transition: none;
    }
}

.carousel-item-next,
.carousel-item-prev
{
    position: absolute;
    top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right
{
    transform: translateX(0);
}
@supports (transform-style: preserve-3d)
{
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right
    {
        transform: translate3d(0, 0, 0);
    }
}

.carousel-item-next,
.active.carousel-item-right
{
    transform: translateX(100%);
}
@supports (transform-style: preserve-3d)
{
    .carousel-item-next,
    .active.carousel-item-right
    {
        transform: translate3d(100%, 0, 0);
    }
}

.carousel-item-prev,
.active.carousel-item-left
{
    transform: translateX(-100%);
}
@supports (transform-style: preserve-3d)
{
    .carousel-item-prev,
    .active.carousel-item-left
    {
        transform: translate3d(-100%, 0, 0);
    }
}

.carousel-fade .carousel-item
{
    transition-duration: .6s;
    transition-property: opacity; 

    opacity: 0;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right
{
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right
{
    opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev
{
    transform: translateX(0);
}
@supports (transform-style: preserve-3d)
{
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev
    {
        transform: translate3d(0, 0, 0);
    }
}

.carousel-control-prev,
.carousel-control-next
{
    position: absolute;
    top: 0;
    bottom: 0;

    display: flex;

    width: 15%;

    text-align: center;

    opacity: .5; 
    color: #fff;

    align-items: center;
    justify-content: center;
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus
{
    text-decoration: none;

    opacity: .9; 
    color: #fff;
    outline: 0;
}

.carousel-control-prev
{
    left: 0;
}

.carousel-control-next
{
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon
{
    display: inline-block;

    width: 20px;
    height: 20px;

    background: transparent no-repeat center center;
    background-size: 100% 100%;
}

.carousel-control-prev-icon
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z\'/%3E%3C/svg%3E');
}

.carousel-control-next-icon
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23fff\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z\'/%3E%3C/svg%3E');
}

.carousel-indicators
{
    position: absolute;
    z-index: 15;
    right: 0;
    bottom: 10px;
    left: 0;

    display: flex;

    margin-right: 15%;
    margin-left: 15%;
    padding-left: 0;

    list-style: none; 

    justify-content: center;
}
.carousel-indicators li
{
    position: relative;

    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;

    cursor: pointer;
    text-indent: -999px;

    background-color: rgba(255, 255, 255, .5); 

    flex: 0 1 auto;
}
.carousel-indicators li::before
{
    position: absolute;
    top: -10px;
    left: 0;

    display: inline-block;

    width: 100%;
    height: 10px;

    content: '';
}
.carousel-indicators li::after
{
    position: absolute;
    bottom: -10px;
    left: 0;

    display: inline-block;

    width: 100%;
    height: 10px;

    content: '';
}
.carousel-indicators .active
{
    background-color: #fff;
}

.carousel-caption
{
    position: absolute;
    z-index: 10;
    right: 15%;
    bottom: 20px;
    left: 15%;

    padding-top: 20px;
    padding-bottom: 20px;

    text-align: center; 

    color: #fff;
}

.align-baseline
{
    vertical-align: baseline !important;
}

.align-top
{
    vertical-align: top !important;
}

.align-middle
{
    vertical-align: middle !important;
}

.align-bottom
{
    vertical-align: bottom !important;
}

.align-text-bottom
{
    vertical-align: text-bottom !important;
}

.align-text-top
{
    vertical-align: text-top !important;
}

.bg-primary
{
    background-color: #5e72e4 !important;
}

a.bg-primary:hover,
a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus
{
    background-color: #324cdd !important;
}

.bg-secondary
{
    background-color: #f7fafc !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus
{
    background-color: #d2e3ee !important;
}

.bg-success
{
    background-color: #2dce89 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus
{
    background-color: #24a46d !important;
}

.bg-info
{
    background-color: #11cdef !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus
{
    background-color: #0da5c0 !important;
}

.bg-warning
{
    background-color: #fb6340 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus
{
    background-color: #fa3a0e !important;
}

.bg-danger
{
    background-color: #f5365c !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus
{
    background-color: #ec0c38 !important;
}

.bg-light
{
    background-color: #adb5bd !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus
{
    background-color: #919ca6 !important;
}

.bg-dark
{
    background-color: #212529 !important;
}

a.bg-dark:hover,
a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus
{
    background-color: #0a0c0d !important;
}

.bg-default
{
    background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus
{
    background-color: #0b1526 !important;
}

.bg-white
{
    background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,
button.bg-white:hover,
button.bg-white:focus
{
    background-color: #e6e6e6 !important;
}

.bg-neutral
{
    background-color: #fff !important;
}

a.bg-neutral:hover,
a.bg-neutral:focus,
button.bg-neutral:hover,
button.bg-neutral:focus
{
    background-color: #e6e6e6 !important;
}

.bg-darker
{
    background-color: black !important;
}

a.bg-darker:hover,
a.bg-darker:focus,
button.bg-darker:hover,
button.bg-darker:focus
{
    background-color: black !important;
}

.bg-white
{
    background-color: #fff !important;
}

.bg-transparent
{
    background-color: transparent !important;
}

.border
{
    border: 1px solid #e9ecef !important;
}

.border-top
{
    border-top: 1px solid #e9ecef !important;
}

.border-right
{
    border-right: 1px solid #e9ecef !important;
}

.border-bottom
{
    border-bottom: 1px solid #e9ecef !important;
}

.border-left
{
    border-left: 1px solid #e9ecef !important;
}

.border-0
{
    border: 0 !important;
}

.border-top-0
{
    border-top: 0 !important;
}

.border-right-0
{
    border-right: 0 !important;
}

.border-bottom-0
{
    border-bottom: 0 !important;
}

.border-left-0
{
    border-left: 0 !important;
}

.border-primary
{
    border-color: #5e72e4 !important;
}

.border-secondary
{
    border-color: #f7fafc !important;
}

.border-success
{
    border-color: #2dce89 !important;
}

.border-info
{
    border-color: #11cdef !important;
}

.border-warning
{
    border-color: #fb6340 !important;
}

.border-danger
{
    border-color: #f5365c !important;
}

.border-light
{
    border-color: #adb5bd !important;
}

.border-dark
{
    border-color: #212529 !important;
}

.border-default
{
    border-color: #172b4d !important;
}

.border-white
{
    border-color: #fff !important;
}

.border-neutral
{
    border-color: #fff !important;
}

.border-darker
{
    border-color: black !important;
}

.border-white
{
    border-color: #fff !important;
}

.rounded
{
    border-radius: .375rem !important;
}

.rounded-top
{
    border-top-left-radius: .375rem !important;
    border-top-right-radius: .375rem !important;
}

.rounded-right
{
    border-top-right-radius: .375rem !important;
    border-bottom-right-radius: .375rem !important;
}

.rounded-bottom
{
    border-bottom-right-radius: .375rem !important;
    border-bottom-left-radius: .375rem !important;
}

.rounded-left
{
    border-top-left-radius: .375rem !important;
    border-bottom-left-radius: .375rem !important;
}

.rounded-circle
{
    border-radius: 50% !important;
}

.rounded-0
{
    border-radius: 0 !important;
}

.clearfix::after
{
    display: block;
    clear: both;

    content: '';
}

.d-none
{
    display: none !important;
}

.d-inline
{
    display: inline !important;
}

.d-inline-block
{
    display: inline-block !important;
}

.d-block
{
    display: block !important;
}

.d-table
{
    display: table !important;
}

.d-table-row
{
    display: table-row !important;
}

.d-table-cell
{
    display: table-cell !important;
}

.d-flex
{
    display: flex !important;
}

.d-inline-flex
{
    display: inline-flex !important;
}

@media (min-width: 576px)
{
    .d-sm-none
    {
        display: none !important;
    }
    .d-sm-inline
    {
        display: inline !important;
    }
    .d-sm-inline-block
    {
        display: inline-block !important;
    }
    .d-sm-block
    {
        display: block !important;
    }
    .d-sm-table
    {
        display: table !important;
    }
    .d-sm-table-row
    {
        display: table-row !important;
    }
    .d-sm-table-cell
    {
        display: table-cell !important;
    }
    .d-sm-flex
    {
        display: flex !important;
    }
    .d-sm-inline-flex
    {
        display: inline-flex !important;
    }
}

@media (min-width: 768px)
{
    .d-md-none
    {
        display: none !important;
    }
    .d-md-inline
    {
        display: inline !important;
    }
    .d-md-inline-block
    {
        display: inline-block !important;
    }
    .d-md-block
    {
        display: block !important;
    }
    .d-md-table
    {
        display: table !important;
    }
    .d-md-table-row
    {
        display: table-row !important;
    }
    .d-md-table-cell
    {
        display: table-cell !important;
    }
    .d-md-flex
    {
        display: flex !important;
    }
    .d-md-inline-flex
    {
        display: inline-flex !important;
    }
}

@media (min-width: 992px)
{
    .d-lg-none
    {
        display: none !important;
    }
    .d-lg-inline
    {
        display: inline !important;
    }
    .d-lg-inline-block
    {
        display: inline-block !important;
    }
    .d-lg-block
    {
        display: block !important;
    }
    .d-lg-table
    {
        display: table !important;
    }
    .d-lg-table-row
    {
        display: table-row !important;
    }
    .d-lg-table-cell
    {
        display: table-cell !important;
    }
    .d-lg-flex
    {
        display: flex !important;
    }
    .d-lg-inline-flex
    {
        display: inline-flex !important;
    }
}

@media (min-width: 1200px)
{
    .d-xl-none
    {
        display: none !important;
    }
    .d-xl-inline
    {
        display: inline !important;
    }
    .d-xl-inline-block
    {
        display: inline-block !important;
    }
    .d-xl-block
    {
        display: block !important;
    }
    .d-xl-table
    {
        display: table !important;
    }
    .d-xl-table-row
    {
        display: table-row !important;
    }
    .d-xl-table-cell
    {
        display: table-cell !important;
    }
    .d-xl-flex
    {
        display: flex !important;
    }
    .d-xl-inline-flex
    {
        display: inline-flex !important;
    }
}

@media print
{
    .d-print-none
    {
        display: none !important;
    }
    .d-print-inline
    {
        display: inline !important;
    }
    .d-print-inline-block
    {
        display: inline-block !important;
    }
    .d-print-block
    {
        display: block !important;
    }
    .d-print-table
    {
        display: table !important;
    }
    .d-print-table-row
    {
        display: table-row !important;
    }
    .d-print-table-cell
    {
        display: table-cell !important;
    }
    .d-print-flex
    {
        display: flex !important;
    }
    .d-print-inline-flex
    {
        display: inline-flex !important;
    }
}

.embed-responsive
{
    position: relative;

    display: block;
    overflow: hidden; 

    width: 100%;
    padding: 0;
}
.embed-responsive::before
{
    display: block;

    content: '';
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video
{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;

    width: 100%;
    height: 100%;

    border: 0;
}

.embed-responsive-21by9::before
{
    padding-top: 42.85714%;
}

.embed-responsive-16by9::before
{
    padding-top: 56.25%;
}

.embed-responsive-4by3::before
{
    padding-top: 75%;
}

.embed-responsive-1by1::before
{
    padding-top: 100%;
}

.flex-row
{
    flex-direction: row !important;
}

.flex-column
{
    flex-direction: column !important;
}

.flex-row-reverse
{
    flex-direction: row-reverse !important;
}

.flex-column-reverse
{
    flex-direction: column-reverse !important;
}

.flex-wrap
{
    flex-wrap: wrap !important;
}

.flex-nowrap
{
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse
{
    flex-wrap: wrap-reverse !important;
}

.flex-fill
{
    flex: 1 1 auto !important;
}

.flex-grow-0
{
    flex-grow: 0 !important;
}

.flex-grow-1
{
    flex-grow: 1 !important;
}

.flex-shrink-0
{
    flex-shrink: 0 !important;
}

.flex-shrink-1
{
    flex-shrink: 1 !important;
}

.justify-content-start
{
    justify-content: flex-start !important;
}

.justify-content-end
{
    justify-content: flex-end !important;
}

.justify-content-center
{
    justify-content: center !important;
}

.justify-content-between
{
    justify-content: space-between !important;
}

.justify-content-around
{
    justify-content: space-around !important;
}

.align-items-start
{
    align-items: flex-start !important;
}

.align-items-end
{
    align-items: flex-end !important;
}

.align-items-center
{
    align-items: center !important;
}

.align-items-baseline
{
    align-items: baseline !important;
}

.align-items-stretch
{
    align-items: stretch !important;
}

.align-content-start
{
    align-content: flex-start !important;
}

.align-content-end
{
    align-content: flex-end !important;
}

.align-content-center
{
    align-content: center !important;
}

.align-content-between
{
    align-content: space-between !important;
}

.align-content-around
{
    align-content: space-around !important;
}

.align-content-stretch
{
    align-content: stretch !important;
}

.align-self-auto
{
    align-self: auto !important;
}

.align-self-start
{
    align-self: flex-start !important;
}

.align-self-end
{
    align-self: flex-end !important;
}

.align-self-center
{
    align-self: center !important;
}

.align-self-baseline
{
    align-self: baseline !important;
}

.align-self-stretch
{
    align-self: stretch !important;
}

@media (min-width: 576px)
{
    .flex-sm-row
    {
        flex-direction: row !important;
    }
    .flex-sm-column
    {
        flex-direction: column !important;
    }
    .flex-sm-row-reverse
    {
        flex-direction: row-reverse !important;
    }
    .flex-sm-column-reverse
    {
        flex-direction: column-reverse !important;
    }
    .flex-sm-wrap
    {
        flex-wrap: wrap !important;
    }
    .flex-sm-nowrap
    {
        flex-wrap: nowrap !important;
    }
    .flex-sm-wrap-reverse
    {
        flex-wrap: wrap-reverse !important;
    }
    .flex-sm-fill
    {
        flex: 1 1 auto !important;
    }
    .flex-sm-grow-0
    {
        flex-grow: 0 !important;
    }
    .flex-sm-grow-1
    {
        flex-grow: 1 !important;
    }
    .flex-sm-shrink-0
    {
        flex-shrink: 0 !important;
    }
    .flex-sm-shrink-1
    {
        flex-shrink: 1 !important;
    }
    .justify-content-sm-start
    {
        justify-content: flex-start !important;
    }
    .justify-content-sm-end
    {
        justify-content: flex-end !important;
    }
    .justify-content-sm-center
    {
        justify-content: center !important;
    }
    .justify-content-sm-between
    {
        justify-content: space-between !important;
    }
    .justify-content-sm-around
    {
        justify-content: space-around !important;
    }
    .align-items-sm-start
    {
        align-items: flex-start !important;
    }
    .align-items-sm-end
    {
        align-items: flex-end !important;
    }
    .align-items-sm-center
    {
        align-items: center !important;
    }
    .align-items-sm-baseline
    {
        align-items: baseline !important;
    }
    .align-items-sm-stretch
    {
        align-items: stretch !important;
    }
    .align-content-sm-start
    {
        align-content: flex-start !important;
    }
    .align-content-sm-end
    {
        align-content: flex-end !important;
    }
    .align-content-sm-center
    {
        align-content: center !important;
    }
    .align-content-sm-between
    {
        align-content: space-between !important;
    }
    .align-content-sm-around
    {
        align-content: space-around !important;
    }
    .align-content-sm-stretch
    {
        align-content: stretch !important;
    }
    .align-self-sm-auto
    {
        align-self: auto !important;
    }
    .align-self-sm-start
    {
        align-self: flex-start !important;
    }
    .align-self-sm-end
    {
        align-self: flex-end !important;
    }
    .align-self-sm-center
    {
        align-self: center !important;
    }
    .align-self-sm-baseline
    {
        align-self: baseline !important;
    }
    .align-self-sm-stretch
    {
        align-self: stretch !important;
    }
}

@media (min-width: 768px)
{
    .flex-md-row
    {
        flex-direction: row !important;
    }
    .flex-md-column
    {
        flex-direction: column !important;
    }
    .flex-md-row-reverse
    {
        flex-direction: row-reverse !important;
    }
    .flex-md-column-reverse
    {
        flex-direction: column-reverse !important;
    }
    .flex-md-wrap
    {
        flex-wrap: wrap !important;
    }
    .flex-md-nowrap
    {
        flex-wrap: nowrap !important;
    }
    .flex-md-wrap-reverse
    {
        flex-wrap: wrap-reverse !important;
    }
    .flex-md-fill
    {
        flex: 1 1 auto !important;
    }
    .flex-md-grow-0
    {
        flex-grow: 0 !important;
    }
    .flex-md-grow-1
    {
        flex-grow: 1 !important;
    }
    .flex-md-shrink-0
    {
        flex-shrink: 0 !important;
    }
    .flex-md-shrink-1
    {
        flex-shrink: 1 !important;
    }
    .justify-content-md-start
    {
        justify-content: flex-start !important;
    }
    .justify-content-md-end
    {
        justify-content: flex-end !important;
    }
    .justify-content-md-center
    {
        justify-content: center !important;
    }
    .justify-content-md-between
    {
        justify-content: space-between !important;
    }
    .justify-content-md-around
    {
        justify-content: space-around !important;
    }
    .align-items-md-start
    {
        align-items: flex-start !important;
    }
    .align-items-md-end
    {
        align-items: flex-end !important;
    }
    .align-items-md-center
    {
        align-items: center !important;
    }
    .align-items-md-baseline
    {
        align-items: baseline !important;
    }
    .align-items-md-stretch
    {
        align-items: stretch !important;
    }
    .align-content-md-start
    {
        align-content: flex-start !important;
    }
    .align-content-md-end
    {
        align-content: flex-end !important;
    }
    .align-content-md-center
    {
        align-content: center !important;
    }
    .align-content-md-between
    {
        align-content: space-between !important;
    }
    .align-content-md-around
    {
        align-content: space-around !important;
    }
    .align-content-md-stretch
    {
        align-content: stretch !important;
    }
    .align-self-md-auto
    {
        align-self: auto !important;
    }
    .align-self-md-start
    {
        align-self: flex-start !important;
    }
    .align-self-md-end
    {
        align-self: flex-end !important;
    }
    .align-self-md-center
    {
        align-self: center !important;
    }
    .align-self-md-baseline
    {
        align-self: baseline !important;
    }
    .align-self-md-stretch
    {
        align-self: stretch !important;
    }
}

@media (min-width: 992px)
{
    .flex-lg-row
    {
        flex-direction: row !important;
    }
    .flex-lg-column
    {
        flex-direction: column !important;
    }
    .flex-lg-row-reverse
    {
        flex-direction: row-reverse !important;
    }
    .flex-lg-column-reverse
    {
        flex-direction: column-reverse !important;
    }
    .flex-lg-wrap
    {
        flex-wrap: wrap !important;
    }
    .flex-lg-nowrap
    {
        flex-wrap: nowrap !important;
    }
    .flex-lg-wrap-reverse
    {
        flex-wrap: wrap-reverse !important;
    }
    .flex-lg-fill
    {
        flex: 1 1 auto !important;
    }
    .flex-lg-grow-0
    {
        flex-grow: 0 !important;
    }
    .flex-lg-grow-1
    {
        flex-grow: 1 !important;
    }
    .flex-lg-shrink-0
    {
        flex-shrink: 0 !important;
    }
    .flex-lg-shrink-1
    {
        flex-shrink: 1 !important;
    }
    .justify-content-lg-start
    {
        justify-content: flex-start !important;
    }
    .justify-content-lg-end
    {
        justify-content: flex-end !important;
    }
    .justify-content-lg-center
    {
        justify-content: center !important;
    }
    .justify-content-lg-between
    {
        justify-content: space-between !important;
    }
    .justify-content-lg-around
    {
        justify-content: space-around !important;
    }
    .align-items-lg-start
    {
        align-items: flex-start !important;
    }
    .align-items-lg-end
    {
        align-items: flex-end !important;
    }
    .align-items-lg-center
    {
        align-items: center !important;
    }
    .align-items-lg-baseline
    {
        align-items: baseline !important;
    }
    .align-items-lg-stretch
    {
        align-items: stretch !important;
    }
    .align-content-lg-start
    {
        align-content: flex-start !important;
    }
    .align-content-lg-end
    {
        align-content: flex-end !important;
    }
    .align-content-lg-center
    {
        align-content: center !important;
    }
    .align-content-lg-between
    {
        align-content: space-between !important;
    }
    .align-content-lg-around
    {
        align-content: space-around !important;
    }
    .align-content-lg-stretch
    {
        align-content: stretch !important;
    }
    .align-self-lg-auto
    {
        align-self: auto !important;
    }
    .align-self-lg-start
    {
        align-self: flex-start !important;
    }
    .align-self-lg-end
    {
        align-self: flex-end !important;
    }
    .align-self-lg-center
    {
        align-self: center !important;
    }
    .align-self-lg-baseline
    {
        align-self: baseline !important;
    }
    .align-self-lg-stretch
    {
        align-self: stretch !important;
    }
}

@media (min-width: 1200px)
{
    .flex-xl-row
    {
        flex-direction: row !important;
    }
    .flex-xl-column
    {
        flex-direction: column !important;
    }
    .flex-xl-row-reverse
    {
        flex-direction: row-reverse !important;
    }
    .flex-xl-column-reverse
    {
        flex-direction: column-reverse !important;
    }
    .flex-xl-wrap
    {
        flex-wrap: wrap !important;
    }
    .flex-xl-nowrap
    {
        flex-wrap: nowrap !important;
    }
    .flex-xl-wrap-reverse
    {
        flex-wrap: wrap-reverse !important;
    }
    .flex-xl-fill
    {
        flex: 1 1 auto !important;
    }
    .flex-xl-grow-0
    {
        flex-grow: 0 !important;
    }
    .flex-xl-grow-1
    {
        flex-grow: 1 !important;
    }
    .flex-xl-shrink-0
    {
        flex-shrink: 0 !important;
    }
    .flex-xl-shrink-1
    {
        flex-shrink: 1 !important;
    }
    .justify-content-xl-start
    {
        justify-content: flex-start !important;
    }
    .justify-content-xl-end
    {
        justify-content: flex-end !important;
    }
    .justify-content-xl-center
    {
        justify-content: center !important;
    }
    .justify-content-xl-between
    {
        justify-content: space-between !important;
    }
    .justify-content-xl-around
    {
        justify-content: space-around !important;
    }
    .align-items-xl-start
    {
        align-items: flex-start !important;
    }
    .align-items-xl-end
    {
        align-items: flex-end !important;
    }
    .align-items-xl-center
    {
        align-items: center !important;
    }
    .align-items-xl-baseline
    {
        align-items: baseline !important;
    }
    .align-items-xl-stretch
    {
        align-items: stretch !important;
    }
    .align-content-xl-start
    {
        align-content: flex-start !important;
    }
    .align-content-xl-end
    {
        align-content: flex-end !important;
    }
    .align-content-xl-center
    {
        align-content: center !important;
    }
    .align-content-xl-between
    {
        align-content: space-between !important;
    }
    .align-content-xl-around
    {
        align-content: space-around !important;
    }
    .align-content-xl-stretch
    {
        align-content: stretch !important;
    }
    .align-self-xl-auto
    {
        align-self: auto !important;
    }
    .align-self-xl-start
    {
        align-self: flex-start !important;
    }
    .align-self-xl-end
    {
        align-self: flex-end !important;
    }
    .align-self-xl-center
    {
        align-self: center !important;
    }
    .align-self-xl-baseline
    {
        align-self: baseline !important;
    }
    .align-self-xl-stretch
    {
        align-self: stretch !important;
    }
}

.float-left
{
    float: left !important;
}

.float-right
{
    float: right !important;
}

.float-none
{
    float: none !important;
}

@media (min-width: 576px)
{
    .float-sm-left
    {
        float: left !important;
    }
    .float-sm-right
    {
        float: right !important;
    }
    .float-sm-none
    {
        float: none !important;
    }
}

@media (min-width: 768px)
{
    .float-md-left
    {
        float: left !important;
    }
    .float-md-right
    {
        float: right !important;
    }
    .float-md-none
    {
        float: none !important;
    }
}

@media (min-width: 992px)
{
    .float-lg-left
    {
        float: left !important;
    }
    .float-lg-right
    {
        float: right !important;
    }
    .float-lg-none
    {
        float: none !important;
    }
}

@media (min-width: 1200px)
{
    .float-xl-left
    {
        float: left !important;
    }
    .float-xl-right
    {
        float: right !important;
    }
    .float-xl-none
    {
        float: none !important;
    }
}

.position-static
{
    position: static !important;
}

.position-relative
{
    position: relative !important;
}

.position-absolute
{
    position: absolute !important;
}

.position-fixed
{
    position: fixed !important;
}

.position-sticky
{
    position: -webkit-sticky !important;
    position:         sticky !important;
}

.fixed-top
{
    position: fixed;
    z-index: 1030; 
    top: 0;
    right: 0;
    left: 0;
}

.fixed-bottom
{
    position: fixed;
    z-index: 1030; 
    right: 0;
    bottom: 0;
    left: 0;
}

@supports ((position: -webkit-sticky) or (position: sticky))
{
    .sticky-top
    {
        position: -webkit-sticky;
        position:         sticky;
        z-index: 1020; 
        top: 0;
    }
}

.sr-only
{
    position: absolute;

    overflow: hidden;
    clip: rect(0, 0, 0, 0);

    width: 1px;
    height: 1px;
    padding: 0;

    white-space: nowrap;

    border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus
{
    position: static;

    overflow: visible;
    clip: auto;

    width: auto;
    height: auto;

    white-space: normal;
}

.shadow-sm
{
    box-shadow: 0 0 .5rem rgba(136, 152, 170, .075) !important;
}

.shadow,
.card-profile-image img
{
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.shadow-lg
{
    box-shadow: 0 0 3rem rgba(136, 152, 170, .175) !important;
}

.shadow-none
{
    box-shadow: none !important;
}

.w-25
{
    width: 25% !important;
}

.w-50
{
    width: 50% !important;
}

.w-75
{
    width: 75% !important;
}

.w-100
{
    width: 100% !important;
}

.w-auto
{
    width: auto !important;
}

.h-25
{
    height: 25% !important;
}

.h-50
{
    height: 50% !important;
}

.h-75
{
    height: 75% !important;
}

.h-100
{
    height: 100% !important;
}

.h-auto
{
    height: auto !important;
}

.mw-100
{
    max-width: 100% !important;
}

.mh-100
{
    max-height: 100% !important;
}

.m-0
{
    margin: 0 !important;
}

.mt-0,
.my-0
{
    margin-top: 0 !important;
}

.mr-0,
.mx-0
{
    margin-right: 0 !important;
}

.mb-0,
.my-0
{
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0
{
    margin-left: 0 !important;
}

.m-1
{
    margin: .25rem !important;
}

.mt-1,
.my-1
{
    margin-top: .25rem !important;
}

.mr-1,
.mx-1
{
    margin-right: .25rem !important;
}

.mb-1,
.my-1
{
    margin-bottom: .25rem !important;
}

.ml-1,
.mx-1
{
    margin-left: .25rem !important;
}

.m-2
{
    margin: .5rem !important;
}

.mt-2,
.my-2
{
    margin-top: .5rem !important;
}

.mr-2,
.mx-2
{
    margin-right: .5rem !important;
}

.mb-2,
.my-2
{
    margin-bottom: .5rem !important;
}

.ml-2,
.mx-2
{
    margin-left: .5rem !important;
}

.m-3
{
    margin: 1rem !important;
}

.mt-3,
.my-3
{
    margin-top: 1rem !important;
}

.mr-3,
.mx-3
{
    margin-right: 1rem !important;
}

.mb-3,
.my-3
{
    margin-bottom: 1rem !important;
}

.ml-3,
.mx-3
{
    margin-left: 1rem !important;
}

.m-4
{
    margin: 1.5rem !important;
}

.mt-4,
.my-4
{
    margin-top: 1.5rem !important;
}

.mr-4,
.mx-4
{
    margin-right: 1.5rem !important;
}

.mb-4,
.my-4
{
    margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4
{
    margin-left: 1.5rem !important;
}

.m-5
{
    margin: 3rem !important;
}

.mt-5,
.my-5
{
    margin-top: 5rem !important;
    overflow: hidden;
    overflow-x: scroll;
    -ms-overflow-style: none;  /* Para IE y Edge */
    scrollbar-width: none;  
}

.mr-5,
.mx-5
{
    margin-right: 3rem !important;
}

.mb-5,
.my-5
{
    margin-bottom: 3rem !important;
}

.ml-5,
.mx-5
{
    margin-left: 3rem !important;
}

.m--9
{
    margin: -10rem !important;
}

.mt--9,
.my--9
{
    margin-top: -10rem !important;
}

.mr--9,
.mx--9
{
    margin-right: -10rem !important;
}

.mb--9,
.my--9
{
    margin-bottom: -10rem !important;
}

.ml--9,
.mx--9
{
    margin-left: -10rem !important;
}

.m--8
{
    margin: -8rem !important;
}

.mt--8,
.my--8
{
    margin-top: -8rem !important;
}

.mr--8,
.mx--8
{
    margin-right: -8rem !important;
}

.mb--8,
.my--8
{
    margin-bottom: -8rem !important;
}

.ml--8,
.mx--8
{
    margin-left: -8rem !important;
}

.m--7
{
    margin: -6rem !important;
}

.mt--7,
.my--7
{
    margin-top: -6rem !important;
}

.mr--7,
.mx--7
{
    margin-right: -6rem !important;
}

.mb--7,
.my--7
{
    margin-bottom: -6rem !important;
}

.ml--7,
.mx--7
{
    margin-left: -6rem !important;
}

.m--6
{
    margin: -4.5rem !important;
}

.mt--6,
.my--6
{
    margin-top: -4.5rem !important;
}

.mr--6,
.mx--6
{
    margin-right: -4.5rem !important;
}

.mb--6,
.my--6
{
    margin-bottom: -4.5rem !important;
}

.ml--6,
.mx--6
{
    margin-left: -4.5rem !important;
}

.m--5
{
    margin: -3rem !important;
}

.mt--5,
.my--5
{
    margin-top: -3rem !important;
}

.mr--5,
.mx--5
{
    margin-right: -3rem !important;
}

.mb--5,
.my--5
{
    margin-bottom: -3rem !important;
}

.ml--5,
.mx--5
{
    margin-left: -3rem !important;
}

.m--4
{
    margin: -1.5rem !important;
}

.mt--4,
.my--4
{
    margin-top: -1.5rem !important;
}

.mr--4,
.mx--4
{
    margin-right: -1.5rem !important;
}

.mb--4,
.my--4
{
    margin-bottom: -1.5rem !important;
}

.ml--4,
.mx--4
{
    margin-left: -1.5rem !important;
}

.m--3
{
    margin: -1rem !important;
}

.mt--3,
.my--3
{
    margin-top: -1rem !important;
}

.mr--3,
.mx--3
{
    margin-right: -1rem !important;
}

.mb--3,
.my--3
{
    margin-bottom: -1rem !important;
}

.ml--3,
.mx--3
{
    margin-left: -1rem !important;
}

.m--2
{
    margin: -.5rem !important;
}

.mt--2,
.my--2
{
    margin-top: -.5rem !important;
}

.mr--2,
.mx--2
{
    margin-right: -.5rem !important;
}

.mb--2,
.my--2
{
    margin-bottom: -.5rem !important;
}

.ml--2,
.mx--2
{
    margin-left: -.5rem !important;
}

.m--1
{
    margin: -.25rem !important;
}

.mt--1,
.my--1
{
    margin-top: -.25rem !important;
}

.mr--1,
.mx--1
{
    margin-right: -.25rem !important;
}

.mb--1,
.my--1
{
    margin-bottom: -.25rem !important;
}

.ml--1,
.mx--1
{
    margin-left: -.25rem !important;
}

.m-6
{
    margin: 4.5rem !important;
}

.mt-6,
.my-6
{
    margin-top: 4.5rem !important;
}

.mr-6,
.mx-6
{
    margin-right: 4.5rem !important;
}

.mb-6,
.my-6
{
    margin-bottom: 4.5rem !important;
}

.ml-6,
.mx-6
{
    margin-left: 4.5rem !important;
}

.m-7
{
    margin: 6rem !important;
}

.mt-7,
.my-7
{
    margin-top: 6rem !important;
}

.mr-7,
.mx-7
{
    margin-right: 6rem !important;
}

.mb-7,
.my-7
{
    margin-bottom: 6rem !important;
}

.ml-7,
.mx-7
{
    margin-left: 6rem !important;
}

.m-8
{
    margin: 8rem !important;
}

.mt-8,
.my-8
{
    margin-top: 8rem !important;
}

.mr-8,
.mx-8
{
    margin-right: 8rem !important;
}

.mb-8,
.my-8
{
    margin-bottom: 8rem !important;
}

.ml-8,
.mx-8
{
    margin-left: 8rem !important;
}

.m-9
{
    margin: 10rem !important;
}

.mt-9,
.my-9
{
    margin-top: 10rem !important;
}

.mr-9,
.mx-9
{
    margin-right: 10rem !important;
}

.mb-9,
.my-9
{
    margin-bottom: 10rem !important;
}

.ml-9,
.mx-9
{
    margin-left: 10rem !important;
}

.p-0
{
    padding: 0 !important;
}

.pt-0,
.py-0
{
    padding-top: 0 !important;
}

.pr-0,
.px-0
{
    padding-right: 0 !important;
}

.pb-0,
.py-0
{
    padding-bottom: 0 !important;
}

.pl-0,
.px-0
{
    padding-left: 0 !important;
}

.p-1
{
    padding: .25rem !important;
}

.pt-1,
.py-1
{
    padding-top: .25rem !important;
}

.pr-1,
.px-1
{
    padding-right: .25rem !important;
}

.pb-1,
.py-1
{
    padding-bottom: .25rem !important;
}

.pl-1,
.px-1
{
    padding-left: .25rem !important;
}

.p-2
{
    padding: .5rem !important;
}

.pt-2,
.py-2
{
    padding-top: .5rem !important;
}

.pr-2,
.px-2
{
    padding-right: .5rem !important;
}

.pb-2,
.py-2
{
    padding-bottom: .5rem !important;
}

.pl-2,
.px-2
{
    padding-left: .5rem !important;
}

.p-3
{
    padding: 1rem !important;
}

.pt-3,
.py-3
{
    padding-left: 21rem !important;
}

.pr-3,
.px-3
{
    padding-right: 1rem !important;
}

.pb-3,
.py-3
{
    padding-bottom: 1rem !important;
}

.pl-3,
.px-3
{
    padding-left: 1rem !important;
}

.p-4
{
    padding: 1.5rem !important;
}

.pt-4,
.py-4
{
    padding-top: 1.5rem !important;
}

.pr-4,
.px-4
{
    padding-right: 1.5rem !important;
}

.pb-4,
.py-4
{
    padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4
{
    padding-left: 1.5rem !important;
}

.p-5
{
    padding: 3rem !important;
}

.pt-5,
.py-5
{
    padding-top: 3rem !important;
}

.pr-5,
.px-5
{
    padding-right: 3rem !important;
}

.pb-5,
.py-5
{
    padding-bottom: 3rem !important;
}

.pl-5,
.px-5
{
    padding-left: 3rem !important;
}

.p--9
{
    padding: -10rem !important;
}

.pt--9,
.py--9
{
    padding-top: -10rem !important;
}

.pr--9,
.px--9
{
    padding-right: -10rem !important;
}

.pb--9,
.py--9
{
    padding-bottom: -10rem !important;
}

.pl--9,
.px--9
{
    padding-left: -10rem !important;
}

.p--8
{
    padding: -8rem !important;
}

.pt--8,
.py--8
{
    padding-top: -8rem !important;
}

.pr--8,
.px--8
{
    padding-right: -8rem !important;
}

.pb--8,
.py--8
{
    padding-bottom: -8rem !important;
}

.pl--8,
.px--8
{
    padding-left: -8rem !important;
}

.p--7
{
    padding: -6rem !important;
}

.pt--7,
.py--7
{
    padding-top: -6rem !important;
}

.pr--7,
.px--7
{
    padding-right: -6rem !important;
}

.pb--7,
.py--7
{
    padding-bottom: -6rem !important;
}

.pl--7,
.px--7
{
    padding-left: -6rem !important;
}

.p--6
{
    padding: -4.5rem !important;
}

.pt--6,
.py--6
{
    padding-top: -4.5rem !important;
}

.pr--6,
.px--6
{
    padding-right: -4.5rem !important;
}

.pb--6,
.py--6
{
    padding-bottom: -4.5rem !important;
}

.pl--6,
.px--6
{
    padding-left: -4.5rem !important;
}

.p--5
{
    padding: -3rem !important;
}

.pt--5,
.py--5
{
    padding-top: -3rem !important;
}

.pr--5,
.px--5
{
    padding-right: -3rem !important;
}

.pb--5,
.py--5
{
    padding-bottom: -3rem !important;
}

.pl--5,
.px--5
{
    padding-left: -3rem !important;
}

.p--4
{
    padding: -1.5rem !important;
}

.pt--4,
.py--4
{
    padding-top: -1.5rem !important;
}

.pr--4,
.px--4
{
    padding-right: -1.5rem !important;
}

.pb--4,
.py--4
{
    padding-bottom: -1.5rem !important;
}

.pl--4,
.px--4
{
    padding-left: -1.5rem !important;
}

.p--3
{
    padding: -1rem !important;
}

.pt--3,
.py--3
{
    padding-top: -1rem !important;
}

.pr--3,
.px--3
{
    padding-right: -1rem !important;
}

.pb--3,
.py--3
{
    padding-bottom: -1rem !important;
}

.pl--3,
.px--3
{
    padding-left: -1rem !important;
}

.p--2
{
    padding: -.5rem !important;
}

.pt--2,
.py--2
{
    padding-top: -.5rem !important;
}

.pr--2,
.px--2
{
    padding-right: -.5rem !important;
}

.pb--2,
.py--2
{
    padding-bottom: -.5rem !important;
}

.pl--2,
.px--2
{
    padding-left: -.5rem !important;
}

.p--1
{
    padding: -.25rem !important;
}

.pt--1,
.py--1
{
    padding-top: -.25rem !important;
}

.pr--1,
.px--1
{
    padding-right: -.25rem !important;
}

.pb--1,
.py--1
{
    padding-bottom: -.25rem !important;
}

.pl--1,
.px--1
{
    padding-left: -.25rem !important;
}

.p-6
{
    padding: 4.5rem !important;
}

.pt-6,
.py-6
{
    padding-top: 4.5rem !important;
}

.pr-6,
.px-6
{
    padding-right: 4.5rem !important;
}

.pb-6,
.py-6
{
    padding-bottom: 4.5rem !important;
}

.pl-6,
.px-6
{
    padding-left: 4.5rem !important;
}

.p-7
{
    padding: 6rem !important;
}

.pt-7,
.py-7
{
    padding-top: 6rem !important;
}

.pr-7,
.px-7
{
    padding-right: 6rem !important;
}

.pb-7,
.py-7
{
    padding-bottom: 6rem !important;
}

.pl-7,
.px-7
{
    padding-left: 6rem !important;
}

.p-8
{
    padding: 8rem !important;
}

.pt-8,
.py-8
{
    padding-top: 8rem !important;
}

.pr-8,
.px-8
{
    padding-right: 8rem !important;
}

.pb-8,
.py-8
{
    padding-bottom: 8rem !important;
}

.pl-8,
.px-8
{
    padding-left: 8rem !important;
}

.p-9
{
    padding: 10rem !important;
}

.pt-9,
.py-9
{
    padding-top: 10rem !important;
}

.pr-9,
.px-9
{
    padding-right: 10rem !important;
}

.pb-9,
.py-9
{
    padding-bottom: 10rem !important;
}

.pl-9,
.px-9
{
    padding-left: 10rem !important;
}

.m-auto
{
    margin: auto !important;
}

.mt-auto,
.my-auto
{
    margin-top: auto !important;
}

.mr-auto,
.mx-auto
{
    margin-right: auto !important;
}

.mb-auto,
.my-auto
{
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto
{
    margin-left: auto !important;
}

@media (min-width: 576px)
{
    .m-sm-0
    {
        margin: 0 !important;
    }
    .mt-sm-0,
    .my-sm-0
    {
        margin-top: 0 !important;
    }
    .mr-sm-0,
    .mx-sm-0
    {
        margin-right: 0 !important;
    }
    .mb-sm-0,
    .my-sm-0
    {
        margin-bottom: 0 !important;
    }
    .ml-sm-0,
    .mx-sm-0
    {
        margin-left: 0 !important;
    }
    .m-sm-1
    {
        margin: .25rem !important;
    }
    .mt-sm-1,
    .my-sm-1
    {
        margin-top: .25rem !important;
    }
    .mr-sm-1,
    .mx-sm-1
    {
        margin-right: .25rem !important;
    }
    .mb-sm-1,
    .my-sm-1
    {
        margin-bottom: .25rem !important;
    }
    .ml-sm-1,
    .mx-sm-1
    {
        margin-left: .25rem !important;
    }
    .m-sm-2
    {
        margin: .5rem !important;
    }
    .mt-sm-2,
    .my-sm-2
    {
        margin-top: .5rem !important;
    }
    .mr-sm-2,
    .mx-sm-2
    {
        margin-right: .5rem !important;
    }
    .mb-sm-2,
    .my-sm-2
    {
        margin-bottom: .5rem !important;
    }
    .ml-sm-2,
    .mx-sm-2
    {
        margin-left: .5rem !important;
    }
    .m-sm-3
    {
        margin: 1rem !important;
    }
    .mt-sm-3,
    .my-sm-3
    {
        margin-top: 1rem !important;
    }
    .mr-sm-3,
    .mx-sm-3
    {
        margin-right: 1rem !important;
    }
    .mb-sm-3,
    .my-sm-3
    {
        margin-bottom: 1rem !important;
    }
    .ml-sm-3,
    .mx-sm-3
    {
        margin-left: 1rem !important;
    }
    .m-sm-4
    {
        margin: 1.5rem !important;
    }
    .mt-sm-4,
    .my-sm-4
    {
        margin-top: 1.5rem !important;
    }
    .mr-sm-4,
    .mx-sm-4
    {
        margin-right: 1.5rem !important;
    }
    .mb-sm-4,
    .my-sm-4
    {
        margin-bottom: 1.5rem !important;
    }
    .ml-sm-4,
    .mx-sm-4
    {
        margin-left: 1.5rem !important;
    }
    .m-sm-5
    {
        margin: 3rem !important;
    }
    .mt-sm-5,
    .my-sm-5
    {
        margin-top: 3rem !important;
    }
    .mr-sm-5,
    .mx-sm-5
    {
        margin-right: 3rem !important;
    }
    .mb-sm-5,
    .my-sm-5
    {
        margin-bottom: 3rem !important;
    }
    .ml-sm-5,
    .mx-sm-5
    {
        margin-left: 3rem !important;
    }
    .m-sm--9
    {
        margin: -10rem !important;
    }
    .mt-sm--9,
    .my-sm--9
    {
        margin-top: -10rem !important;
    }
    .mr-sm--9,
    .mx-sm--9
    {
        margin-right: -10rem !important;
    }
    .mb-sm--9,
    .my-sm--9
    {
        margin-bottom: -10rem !important;
    }
    .ml-sm--9,
    .mx-sm--9
    {
        margin-left: -10rem !important;
    }
    .m-sm--8
    {
        margin: -8rem !important;
    }
    .mt-sm--8,
    .my-sm--8
    {
        margin-top: -8rem !important;
    }
    .mr-sm--8,
    .mx-sm--8
    {
        margin-right: -8rem !important;
    }
    .mb-sm--8,
    .my-sm--8
    {
        margin-bottom: -8rem !important;
    }
    .ml-sm--8,
    .mx-sm--8
    {
        margin-left: -8rem !important;
    }
    .m-sm--7
    {
        margin: -6rem !important;
    }
    .mt-sm--7,
    .my-sm--7
    {
        margin-top: -6rem !important;
    }
    .mr-sm--7,
    .mx-sm--7
    {
        margin-right: -6rem !important;
    }
    .mb-sm--7,
    .my-sm--7
    {
        margin-bottom: -6rem !important;
    }
    .ml-sm--7,
    .mx-sm--7
    {
        margin-left: -6rem !important;
    }
    .m-sm--6
    {
        margin: -4.5rem !important;
    }
    .mt-sm--6,
    .my-sm--6
    {
        margin-top: -4.5rem !important;
    }
    .mr-sm--6,
    .mx-sm--6
    {
        margin-right: -4.5rem !important;
    }
    .mb-sm--6,
    .my-sm--6
    {
        margin-bottom: -4.5rem !important;
    }
    .ml-sm--6,
    .mx-sm--6
    {
        margin-left: -4.5rem !important;
    }
    .m-sm--5
    {
        margin: -3rem !important;
    }
    .mt-sm--5,
    .my-sm--5
    {
        margin-top: -3rem !important;
    }
    .mr-sm--5,
    .mx-sm--5
    {
        margin-right: -3rem !important;
    }
    .mb-sm--5,
    .my-sm--5
    {
        margin-bottom: -3rem !important;
    }
    .ml-sm--5,
    .mx-sm--5
    {
        margin-left: -3rem !important;
    }
    .m-sm--4
    {
        margin: -1.5rem !important;
    }
    .mt-sm--4,
    .my-sm--4
    {
        margin-top: -1.5rem !important;
    }
    .mr-sm--4,
    .mx-sm--4
    {
        margin-right: -1.5rem !important;
    }
    .mb-sm--4,
    .my-sm--4
    {
        margin-bottom: -1.5rem !important;
    }
    .ml-sm--4,
    .mx-sm--4
    {
        margin-left: -1.5rem !important;
    }
    .m-sm--3
    {
        margin: -1rem !important;
    }
    .mt-sm--3,
    .my-sm--3
    {
        margin-top: -1rem !important;
    }
    .mr-sm--3,
    .mx-sm--3
    {
        margin-right: -1rem !important;
    }
    .mb-sm--3,
    .my-sm--3
    {
        margin-bottom: -1rem !important;
    }
    .ml-sm--3,
    .mx-sm--3
    {
        margin-left: -1rem !important;
    }
    .m-sm--2
    {
        margin: -.5rem !important;
    }
    .mt-sm--2,
    .my-sm--2
    {
        margin-top: -.5rem !important;
    }
    .mr-sm--2,
    .mx-sm--2
    {
        margin-right: -.5rem !important;
    }
    .mb-sm--2,
    .my-sm--2
    {
        margin-bottom: -.5rem !important;
    }
    .ml-sm--2,
    .mx-sm--2
    {
        margin-left: -.5rem !important;
    }
    .m-sm--1
    {
        margin: -.25rem !important;
    }
    .mt-sm--1,
    .my-sm--1
    {
        margin-top: -.25rem !important;
    }
    .mr-sm--1,
    .mx-sm--1
    {
        margin-right: -.25rem !important;
    }
    .mb-sm--1,
    .my-sm--1
    {
        margin-bottom: -.25rem !important;
    }
    .ml-sm--1,
    .mx-sm--1
    {
        margin-left: -.25rem !important;
    }
    .m-sm-6
    {
        margin: 4.5rem !important;
    }
    .mt-sm-6,
    .my-sm-6
    {
        margin-top: 4.5rem !important;
    }
    .mr-sm-6,
    .mx-sm-6
    {
        margin-right: 4.5rem !important;
    }
    .mb-sm-6,
    .my-sm-6
    {
        margin-bottom: 4.5rem !important;
    }
    .ml-sm-6,
    .mx-sm-6
    {
        margin-left: 4.5rem !important;
    }
    .m-sm-7
    {
        margin: 6rem !important;
    }
    .mt-sm-7,
    .my-sm-7
    {
        margin-top: 6rem !important;
    }
    .mr-sm-7,
    .mx-sm-7
    {
        margin-right: 6rem !important;
    }
    .mb-sm-7,
    .my-sm-7
    {
        margin-bottom: 6rem !important;
    }
    .ml-sm-7,
    .mx-sm-7
    {
        margin-left: 6rem !important;
    }
    .m-sm-8
    {
        margin: 8rem !important;
    }
    .mt-sm-8,
    .my-sm-8
    {
        margin-top: 8rem !important;
    }
    .mr-sm-8,
    .mx-sm-8
    {
        margin-right: 8rem !important;
    }
    .mb-sm-8,
    .my-sm-8
    {
        margin-bottom: 8rem !important;
    }
    .ml-sm-8,
    .mx-sm-8
    {
        margin-left: 8rem !important;
    }
    .m-sm-9
    {
        margin: 10rem !important;
    }
    .mt-sm-9,
    .my-sm-9
    {
        margin-top: 10rem !important;
    }
    .mr-sm-9,
    .mx-sm-9
    {
        margin-right: 10rem !important;
    }
    .mb-sm-9,
    .my-sm-9
    {
        margin-bottom: 10rem !important;
    }
    .ml-sm-9,
    .mx-sm-9
    {
        margin-left: 10rem !important;
    }
    .p-sm-0
    {
        padding: 0 !important;
    }
    .pt-sm-0,
    .py-sm-0
    {
        padding-top: 0 !important;
    }
    .pr-sm-0,
    .px-sm-0
    {
        padding-right: 0 !important;
    }
    .pb-sm-0,
    .py-sm-0
    {
        padding-bottom: 0 !important;
    }
    .pl-sm-0,
    .px-sm-0
    {
        padding-left: 0 !important;
    }
    .p-sm-1
    {
        padding: .25rem !important;
    }
    .pt-sm-1,
    .py-sm-1
    {
        padding-top: .25rem !important;
    }
    .pr-sm-1,
    .px-sm-1
    {
        padding-right: .25rem !important;
    }
    .pb-sm-1,
    .py-sm-1
    {
        padding-bottom: .25rem !important;
    }
    .pl-sm-1,
    .px-sm-1
    {
        padding-left: .25rem !important;
    }
    .p-sm-2
    {
        padding: .5rem !important;
    }
    .pt-sm-2,
    .py-sm-2
    {
        padding-top: .5rem !important;
    }
    .pr-sm-2,
    .px-sm-2
    {
        padding-right: .5rem !important;
    }
    .pb-sm-2,
    .py-sm-2
    {
        padding-bottom: .5rem !important;
    }
    .pl-sm-2,
    .px-sm-2
    {
        padding-left: .5rem !important;
    }
    .p-sm-3
    {
        padding: 1rem !important;
    }
    .pt-sm-3,
    .py-sm-3
    {
        padding-top: 1rem !important;
    }
    .pr-sm-3,
    .px-sm-3
    {
        padding-right: 1rem !important;
    }
    .pb-sm-3,
    .py-sm-3
    {
        padding-bottom: 1rem !important;
    }
    .pl-sm-3,
    .px-sm-3
    {
        padding-left: 1rem !important;
    }
    .p-sm-4
    {
        padding: 1.5rem !important;
    }
    .pt-sm-4,
    .py-sm-4
    {
        padding-top: 1.5rem !important;
    }
    .pr-sm-4,
    .px-sm-4
    {
        padding-right: 1.5rem !important;
    }
    .pb-sm-4,
    .py-sm-4
    {
        padding-bottom: 1.5rem !important;
    }
    .pl-sm-4,
    .px-sm-4
    {
        padding-left: 1.5rem !important;
    }
    .p-sm-5
    {
        padding: 3rem !important;
    }
    .pt-sm-5,
    .py-sm-5
    {
        padding-top: 3rem !important;
    }
    .pr-sm-5,
    .px-sm-5
    {
        padding-right: 3rem !important;
    }
    .pb-sm-5,
    .py-sm-5
    {
        padding-bottom: 3rem !important;
    }
    .pl-sm-5,
    .px-sm-5
    {
        padding-left: 3rem !important;
    }
    .p-sm--9
    {
        padding: -10rem !important;
    }
    .pt-sm--9,
    .py-sm--9
    {
        padding-top: -10rem !important;
    }
    .pr-sm--9,
    .px-sm--9
    {
        padding-right: -10rem !important;
    }
    .pb-sm--9,
    .py-sm--9
    {
        padding-bottom: -10rem !important;
    }
    .pl-sm--9,
    .px-sm--9
    {
        padding-left: -10rem !important;
    }
    .p-sm--8
    {
        padding: -8rem !important;
    }
    .pt-sm--8,
    .py-sm--8
    {
        padding-top: -8rem !important;
    }
    .pr-sm--8,
    .px-sm--8
    {
        padding-right: -8rem !important;
    }
    .pb-sm--8,
    .py-sm--8
    {
        padding-bottom: -8rem !important;
    }
    .pl-sm--8,
    .px-sm--8
    {
        padding-left: -8rem !important;
    }
    .p-sm--7
    {
        padding: -6rem !important;
    }
    .pt-sm--7,
    .py-sm--7
    {
        padding-top: -6rem !important;
    }
    .pr-sm--7,
    .px-sm--7
    {
        padding-right: -6rem !important;
    }
    .pb-sm--7,
    .py-sm--7
    {
        padding-bottom: -6rem !important;
    }
    .pl-sm--7,
    .px-sm--7
    {
        padding-left: -6rem !important;
    }
    .p-sm--6
    {
        padding: -4.5rem !important;
    }
    .pt-sm--6,
    .py-sm--6
    {
        padding-top: -4.5rem !important;
    }
    .pr-sm--6,
    .px-sm--6
    {
        padding-right: -4.5rem !important;
    }
    .pb-sm--6,
    .py-sm--6
    {
        padding-bottom: -4.5rem !important;
    }
    .pl-sm--6,
    .px-sm--6
    {
        padding-left: -4.5rem !important;
    }
    .p-sm--5
    {
        padding: -3rem !important;
    }
    .pt-sm--5,
    .py-sm--5
    {
        padding-top: -3rem !important;
    }
    .pr-sm--5,
    .px-sm--5
    {
        padding-right: -3rem !important;
    }
    .pb-sm--5,
    .py-sm--5
    {
        padding-bottom: -3rem !important;
    }
    .pl-sm--5,
    .px-sm--5
    {
        padding-left: -3rem !important;
    }
    .p-sm--4
    {
        padding: -1.5rem !important;
    }
    .pt-sm--4,
    .py-sm--4
    {
        padding-top: -1.5rem !important;
    }
    .pr-sm--4,
    .px-sm--4
    {
        padding-right: -1.5rem !important;
    }
    .pb-sm--4,
    .py-sm--4
    {
        padding-bottom: -1.5rem !important;
    }
    .pl-sm--4,
    .px-sm--4
    {
        padding-left: -1.5rem !important;
    }
    .p-sm--3
    {
        padding: -1rem !important;
    }
    .pt-sm--3,
    .py-sm--3
    {
        padding-top: -1rem !important;
    }
    .pr-sm--3,
    .px-sm--3
    {
        padding-right: -1rem !important;
    }
    .pb-sm--3,
    .py-sm--3
    {
        padding-bottom: -1rem !important;
    }
    .pl-sm--3,
    .px-sm--3
    {
        padding-left: -1rem !important;
    }
    .p-sm--2
    {
        padding: -.5rem !important;
    }
    .pt-sm--2,
    .py-sm--2
    {
        padding-top: -.5rem !important;
    }
    .pr-sm--2,
    .px-sm--2
    {
        padding-right: -.5rem !important;
    }
    .pb-sm--2,
    .py-sm--2
    {
        padding-bottom: -.5rem !important;
    }
    .pl-sm--2,
    .px-sm--2
    {
        padding-left: -.5rem !important;
    }
    .p-sm--1
    {
        padding: -.25rem !important;
    }
    .pt-sm--1,
    .py-sm--1
    {
        padding-top: -.25rem !important;
    }
    .pr-sm--1,
    .px-sm--1
    {
        padding-right: -.25rem !important;
    }
    .pb-sm--1,
    .py-sm--1
    {
        padding-bottom: -.25rem !important;
    }
    .pl-sm--1,
    .px-sm--1
    {
        padding-left: -.25rem !important;
    }
    .p-sm-6
    {
        padding: 4.5rem !important;
    }
    .pt-sm-6,
    .py-sm-6
    {
        padding-top: 4.5rem !important;
    }
    .pr-sm-6,
    .px-sm-6
    {
        padding-right: 4.5rem !important;
    }
    .pb-sm-6,
    .py-sm-6
    {
        padding-bottom: 4.5rem !important;
    }
    .pl-sm-6,
    .px-sm-6
    {
        padding-left: 4.5rem !important;
    }
    .p-sm-7
    {
        padding: 6rem !important;
    }
    .pt-sm-7,
    .py-sm-7
    {
        padding-top: 6rem !important;
    }
    .pr-sm-7,
    .px-sm-7
    {
        padding-right: 6rem !important;
    }
    .pb-sm-7,
    .py-sm-7
    {
        padding-bottom: 6rem !important;
    }
    .pl-sm-7,
    .px-sm-7
    {
        padding-left: 6rem !important;
    }
    .p-sm-8
    {
        padding: 8rem !important;
    }
    .pt-sm-8,
    .py-sm-8
    {
        padding-top: 8rem !important;
    }
    .pr-sm-8,
    .px-sm-8
    {
        padding-right: 8rem !important;
    }
    .pb-sm-8,
    .py-sm-8
    {
        padding-bottom: 8rem !important;
    }
    .pl-sm-8,
    .px-sm-8
    {
        padding-left: 8rem !important;
    }
    .p-sm-9
    {
        padding: 10rem !important;
    }
    .pt-sm-9,
    .py-sm-9
    {
        padding-top: 10rem !important;
    }
    .pr-sm-9,
    .px-sm-9
    {
        padding-right: 10rem !important;
    }
    .pb-sm-9,
    .py-sm-9
    {
        padding-bottom: 10rem !important;
    }
    .pl-sm-9,
    .px-sm-9
    {
        padding-left: 10rem !important;
    }
    .m-sm-auto
    {
        margin: auto !important;
    }
    .mt-sm-auto,
    .my-sm-auto
    {
        margin-top: auto !important;
    }
    .mr-sm-auto,
    .mx-sm-auto
    {
        margin-right: auto !important;
    }
    .mb-sm-auto,
    .my-sm-auto
    {
        margin-bottom: auto !important;
    }
    .ml-sm-auto,
    .mx-sm-auto
    {
        margin-left: auto !important;
    }
}

@media (min-width: 768px)
{
    .m-md-0
    {
        margin: 0 !important;
    }
    .mt-md-0,
    .my-md-0
    {
        margin-top: 0 !important;
    }
    .mr-md-0,
    .mx-md-0
    {
        margin-right: 0 !important;
    }
    .mb-md-0,
    .my-md-0
    {
        margin-bottom: 0 !important;
    }
    .ml-md-0,
    .mx-md-0
    {
        margin-left: 0 !important;
    }
    .m-md-1
    {
        margin: .25rem !important;
    }
    .mt-md-1,
    .my-md-1
    {
        margin-top: .25rem !important;
    }
    .mr-md-1,
    .mx-md-1
    {
        margin-right: .25rem !important;
    }
    .mb-md-1,
    .my-md-1
    {
        margin-bottom: .25rem !important;
    }
    .ml-md-1,
    .mx-md-1
    {
        margin-left: .25rem !important;
    }
    .m-md-2
    {
        margin: .5rem !important;
    }
    .mt-md-2,
    .my-md-2
    {
        margin-top: .5rem !important;
    }
    .mr-md-2,
    .mx-md-2
    {
        margin-right: .5rem !important;
    }
    .mb-md-2,
    .my-md-2
    {
        margin-bottom: .5rem !important;
    }
    .ml-md-2,
    .mx-md-2
    {
        margin-left: .5rem !important;
    }
    .m-md-3
    {
        margin: 1rem !important;
    }
    .mt-md-3,
    .my-md-3
    {
        margin-top: 1rem !important;
    }
    .mr-md-3,
    .mx-md-3
    {
        margin-right: 1rem !important;
    }
    .mb-md-3,
    .my-md-3
    {
        margin-bottom: 1rem !important;
    }
    .ml-md-3,
    .mx-md-3
    {
        margin-left: 1rem !important;
    }
    .m-md-4
    {
        margin: 1.5rem !important;
    }
    .mt-md-4,
    .my-md-4
    {
        margin-top: 1.5rem !important;
    }
    .mr-md-4,
    .mx-md-4
    {
        margin-right: 1.5rem !important;
    }
    .mb-md-4,
    .my-md-4
    {
        margin-bottom: 1.5rem !important;
    }
    .ml-md-4,
    .mx-md-4
    {
        margin-left: 1.5rem !important;
    }
    .m-md-5
    {
        margin: 3rem !important;
    }
    .mt-md-5,
    .my-md-5
    {
        margin-top: 3rem !important;
    }
    .mr-md-5,
    .mx-md-5
    {
        margin-right: 3rem !important;
    }
    .mb-md-5,
    .my-md-5
    {
        margin-bottom: 3rem !important;
    }
    .ml-md-5,
    .mx-md-5
    {
        margin-left: 3rem !important;
    }
    .m-md--9
    {
        margin: -10rem !important;
    }
    .mt-md--9,
    .my-md--9
    {
        margin-top: -10rem !important;
    }
    .mr-md--9,
    .mx-md--9
    {
        margin-right: -10rem !important;
    }
    .mb-md--9,
    .my-md--9
    {
        margin-bottom: -10rem !important;
    }
    .ml-md--9,
    .mx-md--9
    {
        margin-left: -10rem !important;
    }
    .m-md--8
    {
        margin: -8rem !important;
    }
    .mt-md--8,
    .my-md--8
    {
        margin-top: -8rem !important;
    }
    .mr-md--8,
    .mx-md--8
    {
        margin-right: -8rem !important;
    }
    .mb-md--8,
    .my-md--8
    {
        margin-bottom: -8rem !important;
    }
    .ml-md--8,
    .mx-md--8
    {
        margin-left: -8rem !important;
    }
    .m-md--7
    {
        margin: -6rem !important;
    }
    .mt-md--7,
    .my-md--7
    {
        margin-top: -6rem !important;
    }
    .mr-md--7,
    .mx-md--7
    {
        margin-right: -6rem !important;
    }
    .mb-md--7,
    .my-md--7
    {
        margin-bottom: -6rem !important;
    }
    .ml-md--7,
    .mx-md--7
    {
        margin-left: -6rem !important;
    }
    .m-md--6
    {
        margin: -4.5rem !important;
    }
    .mt-md--6,
    .my-md--6
    {
        margin-top: -4.5rem !important;
    }
    .mr-md--6,
    .mx-md--6
    {
        margin-right: -4.5rem !important;
    }
    .mb-md--6,
    .my-md--6
    {
        margin-bottom: -4.5rem !important;
    }
    .ml-md--6,
    .mx-md--6
    {
        margin-left: -4.5rem !important;
    }
    .m-md--5
    {
        margin: -3rem !important;
    }
    .mt-md--5,
    .my-md--5
    {
        margin-top: -3rem !important;
    }
    .mr-md--5,
    .mx-md--5
    {
        margin-right: -3rem !important;
    }
    .mb-md--5,
    .my-md--5
    {
        margin-bottom: -3rem !important;
    }
    .ml-md--5,
    .mx-md--5
    {
        margin-left: -3rem !important;
    }
    .m-md--4
    {
        margin: -1.5rem !important;
    }
    .mt-md--4,
    .my-md--4
    {
        margin-top: -1.5rem !important;
    }
    .mr-md--4,
    .mx-md--4
    {
        margin-right: -1.5rem !important;
    }
    .mb-md--4,
    .my-md--4
    {
        margin-bottom: -1.5rem !important;
    }
    .ml-md--4,
    .mx-md--4
    {
        margin-left: -1.5rem !important;
    }
    .m-md--3
    {
        margin: -1rem !important;
    }
    .mt-md--3,
    .my-md--3
    {
        margin-top: -1rem !important;
    }
    .mr-md--3,
    .mx-md--3
    {
        margin-right: -1rem !important;
    }
    .mb-md--3,
    .my-md--3
    {
        margin-bottom: -1rem !important;
    }
    .ml-md--3,
    .mx-md--3
    {
        margin-left: -1rem !important;
    }
    .m-md--2
    {
        margin: -.5rem !important;
    }
    .mt-md--2,
    .my-md--2
    {
        margin-top: -.5rem !important;
    }
    .mr-md--2,
    .mx-md--2
    {
        margin-right: -.5rem !important;
    }
    .mb-md--2,
    .my-md--2
    {
        margin-bottom: -.5rem !important;
    }
    .ml-md--2,
    .mx-md--2
    {
        margin-left: -.5rem !important;
    }
    .m-md--1
    {
        margin: -.25rem !important;
    }
    .mt-md--1,
    .my-md--1
    {
        margin-top: -.25rem !important;
    }
    .mr-md--1,
    .mx-md--1
    {
        margin-right: -.25rem !important;
    }
    .mb-md--1,
    .my-md--1
    {
        margin-bottom: -.25rem !important;
    }
    .ml-md--1,
    .mx-md--1
    {
        margin-left: -.25rem !important;
    }
    .m-md-6
    {
        margin: 4.5rem !important;
    }
    .mt-md-6,
    .my-md-6
    {
        margin-top: 4.5rem !important;
    }
    .mr-md-6,
    .mx-md-6
    {
        margin-right: 4.5rem !important;
    }
    .mb-md-6,
    .my-md-6
    {
        margin-bottom: 4.5rem !important;
    }
    .ml-md-6,
    .mx-md-6
    {
        margin-left: 4.5rem !important;
    }
    .m-md-7
    {
        margin: 6rem !important;
    }
    .mt-md-7,
    .my-md-7
    {
        margin-top: 6rem !important;
    }
    .mr-md-7,
    .mx-md-7
    {
        margin-right: 6rem !important;
    }
    .mb-md-7,
    .my-md-7
    {
        margin-bottom: 6rem !important;
    }
    .ml-md-7,
    .mx-md-7
    {
        margin-left: 6rem !important;
    }
    .m-md-8
    {
        margin: 8rem !important;
    }
    .mt-md-8,
    .my-md-8
    {
        margin-top: 8rem !important;
    }
    .mr-md-8,
    .mx-md-8
    {
        margin-right: 8rem !important;
    }
    .mb-md-8,
    .my-md-8
    {
        margin-bottom: 8rem !important;
    }
    .ml-md-8,
    .mx-md-8
    {
        margin-left: 8rem !important;
    }
    .m-md-9
    {
        margin: 10rem !important;
    }
    .mt-md-9,
    .my-md-9
    {
        margin-top: 10rem !important;
    }
    .mr-md-9,
    .mx-md-9
    {
        margin-right: 10rem !important;
    }
    .mb-md-9,
    .my-md-9
    {
        margin-bottom: 10rem !important;
    }
    .ml-md-9,
    .mx-md-9
    {
        margin-left: 10rem !important;
    }
    .p-md-0
    {
        padding: 0 !important;
    }
    .pt-md-0,
    .py-md-0
    {
        padding-top: 0 !important;
    }
    .pr-md-0,
    .px-md-0
    {
        padding-right: 0 !important;
    }
    .pb-md-0,
    .py-md-0
    {
        padding-bottom: 0 !important;
    }
    .pl-md-0,
    .px-md-0
    {
        padding-left: 0 !important;
    }
    .p-md-1
    {
        padding: .25rem !important;
    }
    .pt-md-1,
    .py-md-1
    {
        padding-top: .25rem !important;
    }
    .pr-md-1,
    .px-md-1
    {
        padding-right: .25rem !important;
    }
    .pb-md-1,
    .py-md-1
    {
        padding-bottom: .25rem !important;
    }
    .pl-md-1,
    .px-md-1
    {
        padding-left: .25rem !important;
    }
    .p-md-2
    {
        padding: .5rem !important;
    }
    .pt-md-2,
    .py-md-2
    {
        padding-top: .5rem !important;
    }
    .pr-md-2,
    .px-md-2
    {
        padding-right: .5rem !important;
    }
    .pb-md-2,
    .py-md-2
    {
        padding-bottom: .5rem !important;
    }
    .pl-md-2,
    .px-md-2
    {
        padding-left: .5rem !important;
    }
    .p-md-3
    {
        padding: 1rem !important;
    }
    .pt-md-3,
    .py-md-3
    {
        padding-top: 1rem !important;
    }
    .pr-md-3,
    .px-md-3
    {
        padding-right: 1rem !important;
    }
    .pb-md-3,
    .py-md-3
    {
        padding-bottom: 1rem !important;
    }
    .pl-md-3,
    .px-md-3
    {
        padding-left: 1rem !important;
    }
    .p-md-4
    {
        padding: 1.5rem !important;
    }
    .pt-md-4,
    .py-md-4
    {
        padding-top: 1.5rem !important;
    }
    .pr-md-4,
    .px-md-4
    {
        padding-right: 1.5rem !important;
    }
    .pb-md-4,
    .py-md-4
    {
        padding-bottom: 1.5rem !important;
    }
    .pl-md-4,
    .px-md-4
    {
        padding-left: 1.5rem !important;
    }
    .p-md-5
    {
        padding: 3rem !important;
    }
    .pt-md-5,
    .py-md-5
    {
        padding-top: 3rem !important;
    }
    .pr-md-5,
    .px-md-5
    {
        padding-right: 3rem !important;
    }
    .pb-md-5,
    .py-md-5
    {
        padding-bottom: 3rem !important;
    }
    .pl-md-5,
    .px-md-5
    {
        padding-left: 3rem !important;
    }
    .p-md--9
    {
        padding: -10rem !important;
    }
    .pt-md--9,
    .py-md--9
    {
        padding-top: -10rem !important;
    }
    .pr-md--9,
    .px-md--9
    {
        padding-right: -10rem !important;
    }
    .pb-md--9,
    .py-md--9
    {
        padding-bottom: -10rem !important;
    }
    .pl-md--9,
    .px-md--9
    {
        padding-left: -10rem !important;
    }
    .p-md--8
    {
        padding: -8rem !important;
    }
    .pt-md--8,
    .py-md--8
    {
        padding-top: -8rem !important;
    }
    .pr-md--8,
    .px-md--8
    {
        padding-right: -8rem !important;
    }
    .pb-md--8,
    .py-md--8
    {
        padding-bottom: -8rem !important;
    }
    .pl-md--8,
    .px-md--8
    {
        padding-left: -8rem !important;
    }
    .p-md--7
    {
        padding: -6rem !important;
    }
    .pt-md--7,
    .py-md--7
    {
        padding-top: -6rem !important;
    }
    .pr-md--7,
    .px-md--7
    {
        padding-right: -6rem !important;
    }
    .pb-md--7,
    .py-md--7
    {
        padding-bottom: -6rem !important;
    }
    .pl-md--7,
    .px-md--7
    {
        padding-left: -6rem !important;
    }
    .p-md--6
    {
        padding: -4.5rem !important;
    }
    .pt-md--6,
    .py-md--6
    {
        padding-top: -4.5rem !important;
    }
    .pr-md--6,
    .px-md--6
    {
        padding-right: -4.5rem !important;
    }
    .pb-md--6,
    .py-md--6
    {
        padding-bottom: -4.5rem !important;
    }
    .pl-md--6,
    .px-md--6
    {
        padding-left: -4.5rem !important;
    }
    .p-md--5
    {
        padding: -3rem !important;
    }
    .pt-md--5,
    .py-md--5
    {
        padding-top: -3rem !important;
    }
    .pr-md--5,
    .px-md--5
    {
        padding-right: -3rem !important;
    }
    .pb-md--5,
    .py-md--5
    {
        padding-bottom: -3rem !important;
    }
    .pl-md--5,
    .px-md--5
    {
        padding-left: -3rem !important;
    }
    .p-md--4
    {
        padding: -1.5rem !important;
    }
    .pt-md--4,
    .py-md--4
    {
        padding-top: -1.5rem !important;
    }
    .pr-md--4,
    .px-md--4
    {
        padding-right: -1.5rem !important;
    }
    .pb-md--4,
    .py-md--4
    {
        padding-bottom: -1.5rem !important;
    }
    .pl-md--4,
    .px-md--4
    {
        padding-left: -1.5rem !important;
    }
    .p-md--3
    {
        padding: -1rem !important;
    }
    .pt-md--3,
    .py-md--3
    {
        padding-top: -1rem !important;
    }
    .pr-md--3,
    .px-md--3
    {
        padding-right: -1rem !important;
    }
    .pb-md--3,
    .py-md--3
    {
        padding-bottom: -1rem !important;
    }
    .pl-md--3,
    .px-md--3
    {
        padding-left: -1rem !important;
    }
    .p-md--2
    {
        padding: -.5rem !important;
    }
    .pt-md--2,
    .py-md--2
    {
        padding-top: -.5rem !important;
    }
    .pr-md--2,
    .px-md--2
    {
        padding-right: -.5rem !important;
    }
    .pb-md--2,
    .py-md--2
    {
        padding-bottom: -.5rem !important;
    }
    .pl-md--2,
    .px-md--2
    {
        padding-left: -.5rem !important;
    }
    .p-md--1
    {
        padding: -.25rem !important;
    }
    .pt-md--1,
    .py-md--1
    {
        padding-top: -.25rem !important;
    }
    .pr-md--1,
    .px-md--1
    {
        padding-right: -.25rem !important;
    }
    .pb-md--1,
    .py-md--1
    {
        padding-bottom: -.25rem !important;
    }
    .pl-md--1,
    .px-md--1
    {
        padding-left: -.25rem !important;
    }
    .p-md-6
    {
        padding: 4.5rem !important;
    }
    .pt-md-6,
    .py-md-6
    {
        padding-top: 4.5rem !important;
    }
    .pr-md-6,
    .px-md-6
    {
        padding-right: 4.5rem !important;
    }
    .pb-md-6,
    .py-md-6
    {
        padding-bottom: 4.5rem !important;
    }
    .pl-md-6,
    .px-md-6
    {
        padding-left: 4.5rem !important;
    }
    .p-md-7
    {
        padding: 6rem !important;
    }
    .pt-md-7,
    .py-md-7
    {
        padding-top: 6rem !important;
    }
    .pr-md-7,
    .px-md-7
    {
        padding-right: 6rem !important;
    }
    .pb-md-7,
    .py-md-7
    {
        padding-bottom: 6rem !important;
    }
    .pl-md-7,
    .px-md-7
    {
        padding-left: 6rem !important;
    }
    .p-md-8
    {
        padding: 8rem !important;
    }
    .pt-md-8,
    .py-md-8
    {
        padding-top: 8rem !important;
    }
    .pr-md-8,
    .px-md-8
    {
        padding-right: 8rem !important;
    }
    .pb-md-8,
    .py-md-8
    {
        padding-bottom: 8rem !important;
    }
    .pl-md-8,
    .px-md-8
    {
        padding-left: 8rem !important;
    }
    .p-md-9
    {
        padding: 10rem !important;
    }
    .pt-md-9,
    .py-md-9
    {
        padding-top: 10rem !important;
    }
    .pr-md-9,
    .px-md-9
    {
        padding-right: 10rem !important;
    }
    .pb-md-9,
    .py-md-9
    {
        padding-bottom: 10rem !important;
    }
    .pl-md-9,
    .px-md-9
    {
        padding-left: 10rem !important;
    }
    .m-md-auto
    {
        margin: auto !important;
    }
    .mt-md-auto,
    .my-md-auto
    {
        margin-top: auto !important;
    }
    .mr-md-auto,
    .mx-md-auto
    {
        margin-right: auto !important;
    }
    .mb-md-auto,
    .my-md-auto
    {
        margin-bottom: auto !important;
    }
    .ml-md-auto,
    .mx-md-auto
    {
        margin-left: auto !important;
    }
}

@media (min-width: 992px)
{
    .m-lg-0
    {
        margin: 0 !important;
    }
    .mt-lg-0,
    .my-lg-0
    {
        margin-top: 0 !important;
    }
    .mr-lg-0,
    .mx-lg-0
    {
        margin-right: 0 !important;
    }
    .mb-lg-0,
    .my-lg-0
    {
        margin-bottom: 0 !important;
    }
    .ml-lg-0,
    .mx-lg-0
    {
        margin-left: 0 !important;
    }
    .m-lg-1
    {
        margin: .25rem !important;
    }
    .mt-lg-1,
    .my-lg-1
    {
        margin-top: .25rem !important;
    }
    .mr-lg-1,
    .mx-lg-1
    {
        margin-right: .25rem !important;
    }
    .mb-lg-1,
    .my-lg-1
    {
        margin-bottom: .25rem !important;
    }
    .ml-lg-1,
    .mx-lg-1
    {
        margin-left: .25rem !important;
    }
    .m-lg-2
    {
        margin: .5rem !important;
    }
    .mt-lg-2,
    .my-lg-2
    {
        margin-top: .5rem !important;
    }
    .mr-lg-2,
    .mx-lg-2
    {
        margin-right: .5rem !important;
    }
    .mb-lg-2,
    .my-lg-2
    {
        margin-bottom: .5rem !important;
    }
    .ml-lg-2,
    .mx-lg-2
    {
        margin-left: .5rem !important;
    }
    .m-lg-3
    {
        margin: 1rem !important;
    }
    .mt-lg-3,
    .my-lg-3
    {
        margin-top: 1rem !important;
    }
    .mr-lg-3,
    .mx-lg-3
    {
        margin-right: 1rem !important;
    }
    .mb-lg-3,
    .my-lg-3
    {
        margin-bottom: 1rem !important;
    }
    .ml-lg-3,
    .mx-lg-3
    {
        margin-left: 1rem !important;
    }
    .m-lg-4
    {
        margin: 1.5rem !important;
    }
    .mt-lg-4,
    .my-lg-4
    {
        margin-top: 1.5rem !important;
    }
    .mr-lg-4,
    .mx-lg-4
    {
        margin-right: 1.5rem !important;
    }
    .mb-lg-4,
    .my-lg-4
    {
        margin-bottom: 1.5rem !important;
    }
    .ml-lg-4,
    .mx-lg-4
    {
        margin-left: 1.5rem !important;
    }
    .m-lg-5
    {
        margin: 3rem !important;
    }
    .mt-lg-5,
    .my-lg-5
    {
        margin-top: 3rem !important;
    }
    .mr-lg-5,
    .mx-lg-5
    {
        margin-right: 3rem !important;
    }
    .mb-lg-5,
    .my-lg-5
    {
        margin-bottom: 3rem !important;
    }
    .ml-lg-5,
    .mx-lg-5
    {
        margin-left: 3rem !important;
    }
    .m-lg--9
    {
        margin: -10rem !important;
    }
    .mt-lg--9,
    .my-lg--9
    {
        margin-top: -10rem !important;
    }
    .mr-lg--9,
    .mx-lg--9
    {
        margin-right: -10rem !important;
    }
    .mb-lg--9,
    .my-lg--9
    {
        margin-bottom: -10rem !important;
    }
    .ml-lg--9,
    .mx-lg--9
    {
        margin-left: -10rem !important;
    }
    .m-lg--8
    {
        margin: -8rem !important;
    }
    .mt-lg--8,
    .my-lg--8
    {
        margin-top: -8rem !important;
    }
    .mr-lg--8,
    .mx-lg--8
    {
        margin-right: -8rem !important;
    }
    .mb-lg--8,
    .my-lg--8
    {
        margin-bottom: -8rem !important;
    }
    .ml-lg--8,
    .mx-lg--8
    {
        margin-left: -8rem !important;
    }
    .m-lg--7
    {
        margin: -6rem !important;
    }
    .mt-lg--7,
    .my-lg--7
    {
        margin-top: -6rem !important;
    }
    .mr-lg--7,
    .mx-lg--7
    {
        margin-right: -6rem !important;
    }
    .mb-lg--7,
    .my-lg--7
    {
        margin-bottom: -6rem !important;
    }
    .ml-lg--7,
    .mx-lg--7
    {
        margin-left: -6rem !important;
    }
    .m-lg--6
    {
        margin: -4.5rem !important;
    }
    .mt-lg--6,
    .my-lg--6
    {
        margin-top: -4.5rem !important;
    }
    .mr-lg--6,
    .mx-lg--6
    {
        margin-right: -4.5rem !important;
    }
    .mb-lg--6,
    .my-lg--6
    {
        margin-bottom: -4.5rem !important;
    }
    .ml-lg--6,
    .mx-lg--6
    {
        margin-left: -4.5rem !important;
    }
    .m-lg--5
    {
        margin: -3rem !important;
    }
    .mt-lg--5,
    .my-lg--5
    {
        margin-top: -3rem !important;
    }
    .mr-lg--5,
    .mx-lg--5
    {
        margin-right: -3rem !important;
    }
    .mb-lg--5,
    .my-lg--5
    {
        margin-bottom: -3rem !important;
    }
    .ml-lg--5,
    .mx-lg--5
    {
        margin-left: -3rem !important;
    }
    .m-lg--4
    {
        margin: -1.5rem !important;
    }
    .mt-lg--4,
    .my-lg--4
    {
        margin-top: -1.5rem !important;
    }
    .mr-lg--4,
    .mx-lg--4
    {
        margin-right: -1.5rem !important;
    }
    .mb-lg--4,
    .my-lg--4
    {
        margin-bottom: -1.5rem !important;
    }
    .ml-lg--4,
    .mx-lg--4
    {
        margin-left: -1.5rem !important;
    }
    .m-lg--3
    {
        margin: -1rem !important;
    }
    .mt-lg--3,
    .my-lg--3
    {
        margin-top: -1rem !important;
    }
    .mr-lg--3,
    .mx-lg--3
    {
        margin-right: -1rem !important;
    }
    .mb-lg--3,
    .my-lg--3
    {
        margin-bottom: -1rem !important;
    }
    .ml-lg--3,
    .mx-lg--3
    {
        margin-left: -1rem !important;
    }
    .m-lg--2
    {
        margin: -.5rem !important;
    }
    .mt-lg--2,
    .my-lg--2
    {
        margin-top: -.5rem !important;
    }
    .mr-lg--2,
    .mx-lg--2
    {
        margin-right: -.5rem !important;
    }
    .mb-lg--2,
    .my-lg--2
    {
        margin-bottom: -.5rem !important;
    }
    .ml-lg--2,
    .mx-lg--2
    {
        margin-left: -.5rem !important;
    }
    .m-lg--1
    {
        margin: -.25rem !important;
    }
    .mt-lg--1,
    .my-lg--1
    {
        margin-top: -.25rem !important;
    }
    .mr-lg--1,
    .mx-lg--1
    {
        margin-right: -.25rem !important;
    }
    .mb-lg--1,
    .my-lg--1
    {
        margin-bottom: -.25rem !important;
    }
    .ml-lg--1,
    .mx-lg--1
    {
        margin-left: -.25rem !important;
    }
    .m-lg-6
    {
        margin: 4.5rem !important;
    }
    .mt-lg-6,
    .my-lg-6
    {
        margin-top: 4.5rem !important;
    }
    .mr-lg-6,
    .mx-lg-6
    {
        margin-right: 4.5rem !important;
    }
    .mb-lg-6,
    .my-lg-6
    {
        margin-bottom: 4.5rem !important;
    }
    .ml-lg-6,
    .mx-lg-6
    {
        margin-left: 4.5rem !important;
    }
    .m-lg-7
    {
        margin: 6rem !important;
    }
    .mt-lg-7,
    .my-lg-7
    {
        margin-top: 6rem !important;
    }
    .mr-lg-7,
    .mx-lg-7
    {
        margin-right: 6rem !important;
    }
    .mb-lg-7,
    .my-lg-7
    {
        margin-bottom: 6rem !important;
    }
    .ml-lg-7,
    .mx-lg-7
    {
        margin-left: 6rem !important;
    }
    .m-lg-8
    {
        margin: 8rem !important;
    }
    .mt-lg-8,
    .my-lg-8
    {
        margin-top: 8rem !important;
    }
    .mr-lg-8,
    .mx-lg-8
    {
        margin-right: 8rem !important;
    }
    .mb-lg-8,
    .my-lg-8
    {
        margin-bottom: 8rem !important;
    }
    .ml-lg-8,
    .mx-lg-8
    {
        margin-left: 8rem !important;
    }
    .m-lg-9
    {
        margin: 10rem !important;
    }
    .mt-lg-9,
    .my-lg-9
    {
        margin-top: 10rem !important;
    }
    .mr-lg-9,
    .mx-lg-9
    {
        margin-right: 10rem !important;
    }
    .mb-lg-9,
    .my-lg-9
    {
        margin-bottom: 10rem !important;
    }
    .ml-lg-9,
    .mx-lg-9
    {
        margin-left: 10rem !important;
    }
    .p-lg-0
    {
        padding: 0 !important;
    }
    .pt-lg-0,
    .py-lg-0
    {
        padding-top: 0 !important;
    }
    .pr-lg-0,
    .px-lg-0
    {
        padding-right: 0 !important;
    }
    .pb-lg-0,
    .py-lg-0
    {
        padding-bottom: 0 !important;
    }
    .pl-lg-0,
    .px-lg-0
    {
        padding-left: 0 !important;
    }
    .p-lg-1
    {
        padding: .25rem !important;
    }
    .pt-lg-1,
    .py-lg-1
    {
        padding-top: .25rem !important;
    }
    .pr-lg-1,
    .px-lg-1
    {
        padding-right: .25rem !important;
    }
    .pb-lg-1,
    .py-lg-1
    {
        padding-bottom: .25rem !important;
    }
    .pl-lg-1,
    .px-lg-1
    {
        padding-left: .25rem !important;
    }
    .p-lg-2
    {
        padding: .5rem !important;
    }
    .pt-lg-2,
    .py-lg-2
    {
        padding-top: .5rem !important;
    }
    .pr-lg-2,
    .px-lg-2
    {
        padding-right: .5rem !important;
    }
    .pb-lg-2,
    .py-lg-2
    {
        padding-bottom: .5rem !important;
    }
    .pl-lg-2,
    .px-lg-2
    {
        padding-left: .5rem !important;
    }
    .p-lg-3
    {
        padding: 1rem !important;
    }
    .pt-lg-3,
    .py-lg-3
    {
        padding-top: 1rem !important;
    }
    .pr-lg-3,
    .px-lg-3
    {
        padding-right: 1rem !important;
    }
    .pb-lg-3,
    .py-lg-3
    {
        padding-bottom: 1rem !important;
    }
    .pl-lg-3,
    .px-lg-3
    {
        padding-left: 1rem !important;
    }
    .p-lg-4
    {
        padding: 1.5rem !important;
    }
    .pt-lg-4,
    .py-lg-4
    {
        padding-top: 1.5rem !important;
    }
    .pr-lg-4,
    .px-lg-4
    {
        padding-right: 1.5rem !important;
    }
    .pb-lg-4,
    .py-lg-4
    {
        padding-bottom: 1.5rem !important;
    }
    .pl-lg-4,
    .px-lg-4
    {
        padding-left: 1.5rem !important;
    }
    .p-lg-5
    {
        padding: 3rem !important;
    }
    .pt-lg-5,
    .py-lg-5
    {
        padding-top: 3rem !important;
    }
    .pr-lg-5,
    .px-lg-5
    {
        padding-right: 3rem !important;
    }
    .pb-lg-5,
    .py-lg-5
    {
        padding-bottom: 3rem !important;
    }
    .pl-lg-5,
    .px-lg-5
    {
        padding-left: 3rem !important;
    }
    .p-lg--9
    {
        padding: -10rem !important;
    }
    .pt-lg--9,
    .py-lg--9
    {
        padding-top: -10rem !important;
    }
    .pr-lg--9,
    .px-lg--9
    {
        padding-right: -10rem !important;
    }
    .pb-lg--9,
    .py-lg--9
    {
        padding-bottom: -10rem !important;
    }
    .pl-lg--9,
    .px-lg--9
    {
        padding-left: -10rem !important;
    }
    .p-lg--8
    {
        padding: -8rem !important;
    }
    .pt-lg--8,
    .py-lg--8
    {
        padding-top: -8rem !important;
    }
    .pr-lg--8,
    .px-lg--8
    {
        padding-right: -8rem !important;
    }
    .pb-lg--8,
    .py-lg--8
    {
        padding-bottom: -8rem !important;
    }
    .pl-lg--8,
    .px-lg--8
    {
        padding-left: -8rem !important;
    }
    .p-lg--7
    {
        padding: -6rem !important;
    }
    .pt-lg--7,
    .py-lg--7
    {
        padding-top: -6rem !important;
    }
    .pr-lg--7,
    .px-lg--7
    {
        padding-right: -6rem !important;
    }
    .pb-lg--7,
    .py-lg--7
    {
        padding-bottom: -6rem !important;
    }
    .pl-lg--7,
    .px-lg--7
    {
        padding-left: -6rem !important;
    }
    .p-lg--6
    {
        padding: -4.5rem !important;
    }
    .pt-lg--6,
    .py-lg--6
    {
        padding-top: -4.5rem !important;
    }
    .pr-lg--6,
    .px-lg--6
    {
        padding-right: -4.5rem !important;
    }
    .pb-lg--6,
    .py-lg--6
    {
        padding-bottom: -4.5rem !important;
    }
    .pl-lg--6,
    .px-lg--6
    {
        padding-left: -4.5rem !important;
    }
    .p-lg--5
    {
        padding: -3rem !important;
    }
    .pt-lg--5,
    .py-lg--5
    {
        padding-top: -3rem !important;
    }
    .pr-lg--5,
    .px-lg--5
    {
        padding-right: -3rem !important;
    }
    .pb-lg--5,
    .py-lg--5
    {
        padding-bottom: -3rem !important;
    }
    .pl-lg--5,
    .px-lg--5
    {
        padding-left: -3rem !important;
    }
    .p-lg--4
    {
        padding: -1.5rem !important;
    }
    .pt-lg--4,
    .py-lg--4
    {
        padding-top: -1.5rem !important;
    }
    .pr-lg--4,
    .px-lg--4
    {
        padding-right: -1.5rem !important;
    }
    .pb-lg--4,
    .py-lg--4
    {
        padding-bottom: -1.5rem !important;
    }
    .pl-lg--4,
    .px-lg--4
    {
        padding-left: -1.5rem !important;
    }
    .p-lg--3
    {
        padding: -1rem !important;
    }
    .pt-lg--3,
    .py-lg--3
    {
        padding-top: -1rem !important;
    }
    .pr-lg--3,
    .px-lg--3
    {
        padding-right: -1rem !important;
    }
    .pb-lg--3,
    .py-lg--3
    {
        padding-bottom: -1rem !important;
    }
    .pl-lg--3,
    .px-lg--3
    {
        padding-left: -1rem !important;
    }
    .p-lg--2
    {
        padding: -.5rem !important;
    }
    .pt-lg--2,
    .py-lg--2
    {
        padding-top: -.5rem !important;
    }
    .pr-lg--2,
    .px-lg--2
    {
        padding-right: -.5rem !important;
    }
    .pb-lg--2,
    .py-lg--2
    {
        padding-bottom: -.5rem !important;
    }
    .pl-lg--2,
    .px-lg--2
    {
        padding-left: -.5rem !important;
    }
    .p-lg--1
    {
        padding: -.25rem !important;
    }
    .pt-lg--1,
    .py-lg--1
    {
        padding-top: -.25rem !important;
    }
    .pr-lg--1,
    .px-lg--1
    {
        padding-right: -.25rem !important;
    }
    .pb-lg--1,
    .py-lg--1
    {
        padding-bottom: -.25rem !important;
    }
    .pl-lg--1,
    .px-lg--1
    {
        padding-left: -.25rem !important;
    }
    .p-lg-6
    {
        padding: 4.5rem !important;
    }
    .pt-lg-6,
    .py-lg-6
    {
        padding-top: 4.5rem !important;
    }
    .pr-lg-6,
    .px-lg-6
    {
        padding-right: 4.5rem !important;
    }
    .pb-lg-6,
    .py-lg-6
    {
        padding-bottom: 4.5rem !important;
    }
    .pl-lg-6,
    .px-lg-6
    {
        padding-left: 4.5rem !important;
    }
    .p-lg-7
    {
        padding: 6rem !important;
    }
    .pt-lg-7,
    .py-lg-7
    {
        padding-top: 6rem !important;
    }
    .pr-lg-7,
    .px-lg-7
    {
        padding-right: 6rem !important;
    }
    .pb-lg-7,
    .py-lg-7
    {
        padding-bottom: 6rem !important;
    }
    .pl-lg-7,
    .px-lg-7
    {
        padding-left: 6rem !important;
    }
    .p-lg-8
    {
        padding: 8rem !important;
    }
    .pt-lg-8,
    .py-lg-8
    {
        padding-top: 8rem !important;
    }
    .pr-lg-8,
    .px-lg-8
    {
        padding-right: 8rem !important;
    }
    .pb-lg-8,
    .py-lg-8
    {
        padding-bottom: 8rem !important;
    }
    .pl-lg-8,
    .px-lg-8
    {
        padding-left: 8rem !important;
    }
    .p-lg-9
    {
        padding: 10rem !important;
    }
    .pt-lg-9,
    .py-lg-9
    {
        padding-top: 10rem !important;
    }
    .pr-lg-9,
    .px-lg-9
    {
        padding-right: 10rem !important;
    }
    .pb-lg-9,
    .py-lg-9
    {
        padding-bottom: 10rem !important;
    }
    .pl-lg-9,
    .px-lg-9
    {
        padding-left: 10rem !important;
    }
    .m-lg-auto
    {
        margin: auto !important;
    }
    .mt-lg-auto,
    .my-lg-auto
    {
        margin-top: auto !important;
    }
    .mr-lg-auto,
    .mx-lg-auto
    {
        margin-right: auto !important;
    }
    .mb-lg-auto,
    .my-lg-auto
    {
        margin-bottom: auto !important;
    }
    .ml-lg-auto,
    .mx-lg-auto
    {
        margin-left: auto !important;
    }
}

@media (min-width: 1200px)
{
    .m-xl-0
    {
        margin: 0 !important;
    }
    .mt-xl-0,
    .my-xl-0
    {
        margin-top: 0 !important;
    }
    .mr-xl-0,
    .mx-xl-0
    {
        margin-right: 0 !important;
    }
    .mb-xl-0,
    .my-xl-0
    {
        margin-bottom: 0 !important;
    }
    .ml-xl-0,
    .mx-xl-0
    {
        margin-left: 0 !important;
    }
    .m-xl-1
    {
        margin: .25rem !important;
    }
    .mt-xl-1,
    .my-xl-1
    {
        margin-top: .25rem !important;
    }
    .mr-xl-1,
    .mx-xl-1
    {
        margin-right: .25rem !important;
    }
    .mb-xl-1,
    .my-xl-1
    {
        margin-bottom: .25rem !important;
    }
    .ml-xl-1,
    .mx-xl-1
    {
        margin-left: .25rem !important;
    }
    .m-xl-2
    {
        margin: .5rem !important;
    }
    .mt-xl-2,
    .my-xl-2
    {
        margin-top: .5rem !important;
    }
    .mr-xl-2,
    .mx-xl-2
    {
        margin-right: .5rem !important;
    }
    .mb-xl-2,
    .my-xl-2
    {
        margin-bottom: .5rem !important;
    }
    .ml-xl-2,
    .mx-xl-2
    {
        margin-left: .5rem !important;
    }
    .m-xl-3
    {
        margin: 1rem !important;
    }
    .mt-xl-3,
    .my-xl-3
    {
        margin-top: 1rem !important;
    }
    .mr-xl-3,
    .mx-xl-3
    {
        margin-right: 1rem !important;
    }
    .mb-xl-3,
    .my-xl-3
    {
        margin-bottom: 1rem !important;
    }
    .ml-xl-3,
    .mx-xl-3
    {
        margin-left: 1rem !important;
    }
    .m-xl-4
    {
        margin: 1.5rem !important;
    }
    .mt-xl-4,
    .my-xl-4
    {
        margin-top: 1.5rem !important;
    }
    .mr-xl-4,
    .mx-xl-4
    {
        margin-right: 1.5rem !important;
    }
    .mb-xl-4,
    .my-xl-4
    {
        margin-bottom: 1.5rem !important;
    }
    .ml-xl-4,
    .mx-xl-4
    {
        margin-left: 1.5rem !important;
    }
    .m-xl-5
    {
        margin: 3rem !important;
    }
    .mt-xl-5,
    .my-xl-5
    {
        margin-top: 3rem !important;
    }
    .mr-xl-5,
    .mx-xl-5
    {
        margin-right: 3rem !important;
    }
    .mb-xl-5,
    .my-xl-5
    {
        margin-bottom: 3rem !important;
    }
    .ml-xl-5,
    .mx-xl-5
    {
        margin-left: 3rem !important;
    }
    .m-xl--9
    {
        margin: -10rem !important;
    }
    .mt-xl--9,
    .my-xl--9
    {
        margin-top: -10rem !important;
    }
    .mr-xl--9,
    .mx-xl--9
    {
        margin-right: -10rem !important;
    }
    .mb-xl--9,
    .my-xl--9
    {
        margin-bottom: -10rem !important;
    }
    .ml-xl--9,
    .mx-xl--9
    {
        margin-left: -10rem !important;
    }
    .m-xl--8
    {
        margin: -8rem !important;
    }
    .mt-xl--8,
    .my-xl--8
    {
        margin-top: -8rem !important;
    }
    .mr-xl--8,
    .mx-xl--8
    {
        margin-right: -8rem !important;
    }
    .mb-xl--8,
    .my-xl--8
    {
        margin-bottom: -8rem !important;
    }
    .ml-xl--8,
    .mx-xl--8
    {
        margin-left: -8rem !important;
    }
    .m-xl--7
    {
        margin: -6rem !important;
    }
    .mt-xl--7,
    .my-xl--7
    {
        margin-top: -6rem !important;
    }
    .mr-xl--7,
    .mx-xl--7
    {
        margin-right: -6rem !important;
    }
    .mb-xl--7,
    .my-xl--7
    {
        margin-bottom: -6rem !important;
    }
    .ml-xl--7,
    .mx-xl--7
    {
        margin-left: -6rem !important;
    }
    .m-xl--6
    {
        margin: -4.5rem !important;
    }
    .mt-xl--6,
    .my-xl--6
    {
        margin-top: -4.5rem !important;
    }
    .mr-xl--6,
    .mx-xl--6
    {
        margin-right: -4.5rem !important;
    }
    .mb-xl--6,
    .my-xl--6
    {
        margin-bottom: -4.5rem !important;
    }
    .ml-xl--6,
    .mx-xl--6
    {
        margin-left: -4.5rem !important;
    }
    .m-xl--5
    {
        margin: -3rem !important;
    }
    .mt-xl--5,
    .my-xl--5
    {
        margin-top: -3rem !important;
    }
    .mr-xl--5,
    .mx-xl--5
    {
        margin-right: -3rem !important;
    }
    .mb-xl--5,
    .my-xl--5
    {
        margin-bottom: -3rem !important;
    }
    .ml-xl--5,
    .mx-xl--5
    {
        margin-left: -3rem !important;
    }
    .m-xl--4
    {
        margin: -1.5rem !important;
    }
    .mt-xl--4,
    .my-xl--4
    {
        margin-top: -1.5rem !important;
    }
    .mr-xl--4,
    .mx-xl--4
    {
        margin-right: -1.5rem !important;
    }
    .mb-xl--4,
    .my-xl--4
    {
        margin-bottom: -1.5rem !important;
    }
    .ml-xl--4,
    .mx-xl--4
    {
        margin-left: -1.5rem !important;
    }
    .m-xl--3
    {
        margin: -1rem !important;
    }
    .mt-xl--3,
    .my-xl--3
    {
        margin-top: -1rem !important;
    }
    .mr-xl--3,
    .mx-xl--3
    {
        margin-right: -1rem !important;
    }
    .mb-xl--3,
    .my-xl--3
    {
        margin-bottom: -1rem !important;
    }
    .ml-xl--3,
    .mx-xl--3
    {
        margin-left: -1rem !important;
    }
    .m-xl--2
    {
        margin: -.5rem !important;
    }
    .mt-xl--2,
    .my-xl--2
    {
        margin-top: -.5rem !important;
    }
    .mr-xl--2,
    .mx-xl--2
    {
        margin-right: -.5rem !important;
    }
    .mb-xl--2,
    .my-xl--2
    {
        margin-bottom: -.5rem !important;
    }
    .ml-xl--2,
    .mx-xl--2
    {
        margin-left: -.5rem !important;
    }
    .m-xl--1
    {
        margin: -.25rem !important;
    }
    .mt-xl--1,
    .my-xl--1
    {
        margin-top: -.25rem !important;
    }
    .mr-xl--1,
    .mx-xl--1
    {
        margin-right: -.25rem !important;
    }
    .mb-xl--1,
    .my-xl--1
    {
        margin-bottom: -.25rem !important;
    }
    .ml-xl--1,
    .mx-xl--1
    {
        margin-left: -.25rem !important;
    }
    .m-xl-6
    {
        margin: 4.5rem !important;
    }
    .mt-xl-6,
    .my-xl-6
    {
        margin-top: 4.5rem !important;
    }
    .mr-xl-6,
    .mx-xl-6
    {
        margin-right: 4.5rem !important;
    }
    .mb-xl-6,
    .my-xl-6
    {
        margin-bottom: 4.5rem !important;
    }
    .ml-xl-6,
    .mx-xl-6
    {
        margin-left: 4.5rem !important;
    }
    .m-xl-7
    {
        margin: 6rem !important;
    }
    .mt-xl-7,
    .my-xl-7
    {
        margin-top: 6rem !important;
    }
    .mr-xl-7,
    .mx-xl-7
    {
        margin-right: 6rem !important;
    }
    .mb-xl-7,
    .my-xl-7
    {
        margin-bottom: 6rem !important;
    }
    .ml-xl-7,
    .mx-xl-7
    {
        margin-left: 6rem !important;
    }
    .m-xl-8
    {
        margin: 8rem !important;
    }
    .mt-xl-8,
    .my-xl-8
    {
        margin-top: 8rem !important;
    }
    .mr-xl-8,
    .mx-xl-8
    {
        margin-right: 8rem !important;
    }
    .mb-xl-8,
    .my-xl-8
    {
        margin-bottom: 8rem !important;
    }
    .ml-xl-8,
    .mx-xl-8
    {
        margin-left: 8rem !important;
    }
    .m-xl-9
    {
        margin: 10rem !important;
    }
    .mt-xl-9,
    .my-xl-9
    {
        margin-top: 10rem !important;
    }
    .mr-xl-9,
    .mx-xl-9
    {
        margin-right: 10rem !important;
    }
    .mb-xl-9,
    .my-xl-9
    {
        margin-bottom: 10rem !important;
    }
    .ml-xl-9,
    .mx-xl-9
    {
        margin-left: 10rem !important;
    }
    .p-xl-0
    {
        padding: 0 !important;
    }
    .pt-xl-0,
    .py-xl-0
    {
        padding-top: 0 !important;
    }
    .pr-xl-0,
    .px-xl-0
    {
        padding-right: 0 !important;
    }
    .pb-xl-0,
    .py-xl-0
    {
        padding-bottom: 0 !important;
    }
    .pl-xl-0,
    .px-xl-0
    {
        padding-left: 0 !important;
    }
    .p-xl-1
    {
        padding: .25rem !important;
    }
    .pt-xl-1,
    .py-xl-1
    {
        padding-top: .25rem !important;
    }
    .pr-xl-1,
    .px-xl-1
    {
        padding-right: .25rem !important;
    }
    .pb-xl-1,
    .py-xl-1
    {
        padding-bottom: .25rem !important;
    }
    .pl-xl-1,
    .px-xl-1
    {
        padding-left: .25rem !important;
    }
    .p-xl-2
    {
        padding: .5rem !important;
    }
    .pt-xl-2,
    .py-xl-2
    {
        padding-top: .5rem !important;
    }
    .pr-xl-2,
    .px-xl-2
    {
        padding-right: .5rem !important;
    }
    .pb-xl-2,
    .py-xl-2
    {
        padding-bottom: .5rem !important;
    }
    .pl-xl-2,
    .px-xl-2
    {
        padding-left: .5rem !important;
    }
    .p-xl-3
    {
        padding: 1rem !important;
    }
    .pt-xl-3,
    .py-xl-3
    {
        padding-top: 1rem !important;
    }
    .pr-xl-3,
    .px-xl-3
    {
        padding-right: 1rem !important;
    }
    .pb-xl-3,
    .py-xl-3
    {
        padding-bottom: 1rem !important;
    }
    .pl-xl-3,
    .px-xl-3
    {
        padding-left: 1rem !important;
    }
    .p-xl-4
    {
        padding: 1.5rem !important;
    }
    .pt-xl-4,
    .py-xl-4
    {
        padding-top: 1.5rem !important;
    }
    .pr-xl-4,
    .px-xl-4
    {
        padding-right: 1.5rem !important;
    }
    .pb-xl-4,
    .py-xl-4
    {
        padding-bottom: 1.5rem !important;
    }
    .pl-xl-4,
    .px-xl-4
    {
        padding-left: 1.5rem !important;
    }
    .p-xl-5
    {
        padding: 3rem !important;
    }
    .pt-xl-5,
    .py-xl-5
    {
        padding-top: 3rem !important;
    }
    .pr-xl-5,
    .px-xl-5
    {
        padding-right: 3rem !important;
    }
    .pb-xl-5,
    .py-xl-5
    {
        padding-bottom: 3rem !important;
    }
    .pl-xl-5,
    .px-xl-5
    {
        padding-left: 3rem !important;
    }
    .p-xl--9
    {
        padding: -10rem !important;
    }
    .pt-xl--9,
    .py-xl--9
    {
        padding-top: -10rem !important;
    }
    .pr-xl--9,
    .px-xl--9
    {
        padding-right: -10rem !important;
    }
    .pb-xl--9,
    .py-xl--9
    {
        padding-bottom: -10rem !important;
    }
    .pl-xl--9,
    .px-xl--9
    {
        padding-left: -10rem !important;
    }
    .p-xl--8
    {
        padding: -8rem !important;
    }
    .pt-xl--8,
    .py-xl--8
    {
        padding-top: -8rem !important;
    }
    .pr-xl--8,
    .px-xl--8
    {
        padding-right: -8rem !important;
    }
    .pb-xl--8,
    .py-xl--8
    {
        padding-bottom: -8rem !important;
    }
    .pl-xl--8,
    .px-xl--8
    {
        padding-left: -8rem !important;
    }
    .p-xl--7
    {
        padding: -6rem !important;
    }
    .pt-xl--7,
    .py-xl--7
    {
        padding-top: -6rem !important;
    }
    .pr-xl--7,
    .px-xl--7
    {
        padding-right: -6rem !important;
    }
    .pb-xl--7,
    .py-xl--7
    {
        padding-bottom: -6rem !important;
    }
    .pl-xl--7,
    .px-xl--7
    {
        padding-left: -6rem !important;
    }
    .p-xl--6
    {
        padding: -4.5rem !important;
    }
    .pt-xl--6,
    .py-xl--6
    {
        padding-top: -4.5rem !important;
    }
    .pr-xl--6,
    .px-xl--6
    {
        padding-right: -4.5rem !important;
    }
    .pb-xl--6,
    .py-xl--6
    {
        padding-bottom: -4.5rem !important;
    }
    .pl-xl--6,
    .px-xl--6
    {
        padding-left: -4.5rem !important;
    }
    .p-xl--5
    {
        padding: -3rem !important;
    }
    .pt-xl--5,
    .py-xl--5
    {
        padding-top: -3rem !important;
    }
    .pr-xl--5,
    .px-xl--5
    {
        padding-right: -3rem !important;
    }
    .pb-xl--5,
    .py-xl--5
    {
        padding-bottom: -3rem !important;
    }
    .pl-xl--5,
    .px-xl--5
    {
        padding-left: -3rem !important;
    }
    .p-xl--4
    {
        padding: -1.5rem !important;
    }
    .pt-xl--4,
    .py-xl--4
    {
        padding-top: -1.5rem !important;
    }
    .pr-xl--4,
    .px-xl--4
    {
        padding-right: -1.5rem !important;
    }
    .pb-xl--4,
    .py-xl--4
    {
        padding-bottom: -1.5rem !important;
    }
    .pl-xl--4,
    .px-xl--4
    {
        padding-left: -1.5rem !important;
    }
    .p-xl--3
    {
        padding: -1rem !important;
    }
    .pt-xl--3,
    .py-xl--3
    {
        padding-top: -1rem !important;
    }
    .pr-xl--3,
    .px-xl--3
    {
        padding-right: -1rem !important;
    }
    .pb-xl--3,
    .py-xl--3
    {
        padding-bottom: -1rem !important;
    }
    .pl-xl--3,
    .px-xl--3
    {
        padding-left: -1rem !important;
    }
    .p-xl--2
    {
        padding: -.5rem !important;
    }
    .pt-xl--2,
    .py-xl--2
    {
        padding-top: -.5rem !important;
    }
    .pr-xl--2,
    .px-xl--2
    {
        padding-right: -.5rem !important;
    }
    .pb-xl--2,
    .py-xl--2
    {
        padding-bottom: -.5rem !important;
    }
    .pl-xl--2,
    .px-xl--2
    {
        padding-left: -.5rem !important;
    }
    .p-xl--1
    {
        padding: -.25rem !important;
    }
    .pt-xl--1,
    .py-xl--1
    {
        padding-top: -.25rem !important;
    }
    .pr-xl--1,
    .px-xl--1
    {
        padding-right: -.25rem !important;
    }
    .pb-xl--1,
    .py-xl--1
    {
        padding-bottom: -.25rem !important;
    }
    .pl-xl--1,
    .px-xl--1
    {
        padding-left: -.25rem !important;
    }
    .p-xl-6
    {
        padding: 4.5rem !important;
    }
    .pt-xl-6,
    .py-xl-6
    {
        padding-top: 4.5rem !important;
    }
    .pr-xl-6,
    .px-xl-6
    {
        padding-right: 4.5rem !important;
    }
    .pb-xl-6,
    .py-xl-6
    {
        padding-bottom: 4.5rem !important;
    }
    .pl-xl-6,
    .px-xl-6
    {
        padding-left: 4.5rem !important;
    }
    .p-xl-7
    {
        padding: 6rem !important;
    }
    .pt-xl-7,
    .py-xl-7
    {
        padding-top: 6rem !important;
    }
    .pr-xl-7,
    .px-xl-7
    {
        padding-right: 6rem !important;
    }
    .pb-xl-7,
    .py-xl-7
    {
        padding-bottom: 6rem !important;
    }
    .pl-xl-7,
    .px-xl-7
    {
        padding-left: 6rem !important;
    }
    .p-xl-8
    {
        padding: 8rem !important;
    }
    .pt-xl-8,
    .py-xl-8
    {
        padding-top: 8rem !important;
    }
    .pr-xl-8,
    .px-xl-8
    {
        padding-right: 8rem !important;
    }
    .pb-xl-8,
    .py-xl-8
    {
        padding-bottom: 8rem !important;
    }
    .pl-xl-8,
    .px-xl-8
    {
        padding-left: 8rem !important;
    }
    .p-xl-9
    {
        padding: 10rem !important;
    }
    .pt-xl-9,
    .py-xl-9
    {
        padding-top: 10rem !important;
    }
    .pr-xl-9,
    .px-xl-9
    {
        padding-right: 10rem !important;
    }
    .pb-xl-9,
    .py-xl-9
    {
        padding-bottom: 10rem !important;
    }
    .pl-xl-9,
    .px-xl-9
    {
        padding-left: 10rem !important;
    }
    .m-xl-auto
    {
        margin: auto !important;
    }
    .mt-xl-auto,
    .my-xl-auto
    {
        margin-top: auto !important;
    }
    .mr-xl-auto,
    .mx-xl-auto
    {
        margin-right: auto !important;
    }
    .mb-xl-auto,
    .my-xl-auto
    {
        margin-bottom: auto !important;
    }
    .ml-xl-auto,
    .mx-xl-auto
    {
        margin-left: auto !important;
    }
}

.text-monospace
{
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

.text-justify
{
    text-align: justify !important;
}

.text-nowrap
{
    white-space: nowrap !important;
}

.text-truncate
{
    overflow: hidden;

    white-space: nowrap; 
    text-overflow: ellipsis;
}

.text-left
{
    text-align: left !important;
}

.text-right
{
    text-align: right !important;
}

.text-center
{
    text-align: center !important;
}

@media (min-width: 576px)
{
    .text-sm-left
    {
        text-align: left !important;
    }
    .text-sm-right
    {
        text-align: right !important;
    }
    .text-sm-center
    {
        text-align: center !important;
    }
}

@media (min-width: 768px)
{
    .text-md-left
    {
        text-align: left !important;
    }
    .text-md-right
    {
        text-align: right !important;
    }
    .text-md-center
    {
        text-align: center !important;
    }
}

@media (min-width: 992px)
{
    .text-lg-left
    {
        text-align: left !important;
    }
    .text-lg-right
    {
        text-align: right !important;
    }
    .text-lg-center
    {
        text-align: center !important;
    }
}

@media (min-width: 1200px)
{
    .text-xl-left
    {
        text-align: left !important;
    }
    .text-xl-right
    {
        text-align: right !important;
    }
    .text-xl-center
    {
        text-align: center !important;
    }
}

.text-lowercase
{
    text-transform: lowercase !important;
}

.text-uppercase
{
    text-transform: uppercase !important;
}

.text-capitalize
{
    text-transform: capitalize !important;
}

.font-weight-light
{
    font-weight: 300 !important;
}

.font-weight-normal
{
    font-weight: 400 !important;
}

.font-weight-bold
{
    font-weight: 600 !important;
}

.font-italic
{
    font-style: italic !important;
}

.text-white
{
    color: #fff !important;
}

.text-primary
{
    color: #5e72e4 !important;
}

a.text-primary:hover,
a.text-primary:focus
{
    color: #324cdd !important;
}

.text-secondary
{
    color: #f7fafc !important;
}

a.text-secondary:hover,
a.text-secondary:focus
{
    color: #d2e3ee !important;
}

.text-success
{
    color: #2dce89 !important;
}

a.text-success:hover,
a.text-success:focus
{
    color: #24a46d !important;
}

.text-info
{
    color: #11cdef !important;
}

a.text-info:hover,
a.text-info:focus
{
    color: #0da5c0 !important;
}

.text-warning
{
    color: #fb6340 !important;
}

a.text-warning:hover,
a.text-warning:focus
{
    color: #fa3a0e !important;
}

.text-danger
{
    color: #f5365c !important;
}

a.text-danger:hover,
a.text-danger:focus
{
    color: #ec0c38 !important;
}

.text-light
{
    color: #adb5bd !important;
}

a.text-light:hover,
a.text-light:focus
{
    color: #919ca6 !important;
}

.text-dark
{
    color: #212529 !important;
}

a.text-dark:hover,
a.text-dark:focus
{
    color: #0a0c0d !important;
}

.text-default
{
    color: #172b4d !important;
}

a.text-default:hover,
a.text-default:focus
{
    color: #0b1526 !important;
}

.text-white
{
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus
{
    color: #e6e6e6 !important;
}

.text-neutral
{
    color: #fff !important;
}

a.text-neutral:hover,
a.text-neutral:focus
{
    color: #e6e6e6 !important;
}

.text-darker
{
    color: black !important;
}

a.text-darker:hover,
a.text-darker:focus
{
    color: black !important;
}

.text-body
{
    color: #525f7f !important;
}

.text-muted
{
    color: #8898aa !important;
}

.text-black-50
{
    color: rgba(0, 0, 0, .5) !important;
}

.text-white-50
{
    color: rgba(255, 255, 255, .5) !important;
}

.text-hide
{
    font: 0/0 a;

    color: transparent;
    border: 0; 
    background-color: transparent;
    text-shadow: none;
}

.visible
{
    visibility: visible !important;
}

.invisible
{
    visibility: hidden !important;
}

@media print
{
    *,
    *::before,
    *::after
    {
        box-shadow: none !important; 
        text-shadow: none !important;
    }
    a:not(.btn)
    {
        text-decoration: underline;
    }
    abbr[title]::after
    {
        content: ' (' attr(title) ')';
    }
    pre
    {
        white-space: pre-wrap !important;
    }
    pre,
    blockquote
    {
        border: 1px solid #adb5bd;

        page-break-inside: avoid;
    }
    thead
    {
        display: table-header-group;
    }
    tr,
    img
    {
        page-break-inside: avoid;
    }
    p,
    h2,
    h3
    {
        orphans: 3;
        widows: 3;
    }
    h2,
    h3
    {
        page-break-after: avoid;
    }
    @page
    {
        size: a3;
    }
    body
    {
        min-width: 992px !important;
    }
    .container
    {
        min-width: 992px !important;
    }
    .navbar
    {
        display: none;
    }
    .badge
    {
        border: 1px solid #000;
    }
    .table
    {
        border-collapse: collapse !important;
    }
    .table td,
    .table th
    {
        background-color: #fff !important;
    }
    .table-bordered th,
    .table-bordered td
    {
        border: 1px solid #dee2e6 !important;
    }
    .table-dark
    {
        color: inherit;
    }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody
    {
        border-color: #e9ecef;
    }
    .table .thead-dark th
    {
        color: inherit;
        border-color: #e9ecef;
    }
}

iframe
{
    border: 0;
}

figcaption,
figure,
main
{
    display: block;
}

main
{
    overflow: hidden;
}

.bg-blue
{
    background-color: #5e72e4 !important;
}

a.bg-blue:hover,
a.bg-blue:focus,
button.bg-blue:hover,
button.bg-blue:focus
{
    background-color: #324cdd !important;
}

.bg-indigo
{
    background-color: #5603ad !important;
}

a.bg-indigo:hover,
a.bg-indigo:focus,
button.bg-indigo:hover,
button.bg-indigo:focus
{
    background-color: #3d027b !important;
}

.bg-purple
{
    background-color: #8965e0 !important;
}

a.bg-purple:hover,
a.bg-purple:focus,
button.bg-purple:hover,
button.bg-purple:focus
{
    background-color: #683bd7 !important;
}

.bg-pink
{
    background-color: #f3a4b5 !important;
}

a.bg-pink:hover,
a.bg-pink:focus,
button.bg-pink:hover,
button.bg-pink:focus
{
    background-color: #ed7790 !important;
}

.bg-red
{
    background-color: #f5365c !important;
}

a.bg-red:hover,
a.bg-red:focus,
button.bg-red:hover,
button.bg-red:focus
{
    background-color: #ec0c38 !important;
}

.bg-orange
{
    background-color: #fb6340 !important;
}

a.bg-orange:hover,
a.bg-orange:focus,
button.bg-orange:hover,
button.bg-orange:focus
{
    background-color: #fa3a0e !important;
}

.bg-yellow
{
    background-color: #ffd600 !important;
}

a.bg-yellow:hover,
a.bg-yellow:focus,
button.bg-yellow:hover,
button.bg-yellow:focus
{
    background-color: #ccab00 !important;
}

.bg-green
{
    background-color: #2dce89 !important;
}

a.bg-green:hover,
a.bg-green:focus,
button.bg-green:hover,
button.bg-green:focus
{
    background-color: #24a46d !important;
}

.bg-teal
{
    background-color: #11cdef !important;
}

a.bg-teal:hover,
a.bg-teal:focus,
button.bg-teal:hover,
button.bg-teal:focus
{
    background-color: #0da5c0 !important;
}

.bg-cyan
{
    background-color: #2bffc6 !important;
}

a.bg-cyan:hover,
a.bg-cyan:focus,
button.bg-cyan:hover,
button.bg-cyan:focus
{
    background-color: #00f7b5 !important;
}

.bg-white
{
    background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,
button.bg-white:hover,
button.bg-white:focus
{
    background-color: #e6e6e6 !important;
}

.bg-gray
{
    background-color: #8898aa !important;
}

a.bg-gray:hover,
a.bg-gray:focus,
button.bg-gray:hover,
button.bg-gray:focus
{
    background-color: #6a7e95 !important;
}

.bg-gray-dark
{
    background-color: #32325d !important;
}

a.bg-gray-dark:hover,
a.bg-gray-dark:focus,
button.bg-gray-dark:hover,
button.bg-gray-dark:focus
{
    background-color: #20203c !important;
}

.bg-light
{
    background-color: #ced4da !important;
}

a.bg-light:hover,
a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus
{
    background-color: #b1bbc4 !important;
}

.bg-lighter
{
    background-color: #e9ecef !important;
}

a.bg-lighter:hover,
a.bg-lighter:focus,
button.bg-lighter:hover,
button.bg-lighter:focus
{
    background-color: #cbd3da !important;
}

.bg-gradient-primary
{
    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-secondary
{
    background: linear-gradient(87deg, #f7fafc 0, #f7f8fc 100%) !important;
}

.bg-gradient-success
{
    background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-info
{
    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-gradient-warning
{
    background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-danger
{
    background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-light
{
    background: linear-gradient(87deg, #adb5bd 0, #adaebd 100%) !important;
}

.bg-gradient-dark
{
    background: linear-gradient(87deg, #212529 0, #212229 100%) !important;
}

.bg-gradient-default
{
    background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-white
{
    background: linear-gradient(87deg, #fff 0, white 100%) !important;
}

.bg-gradient-neutral
{
    background: linear-gradient(87deg, #fff 0, white 100%) !important;
}

.bg-gradient-darker
{
    background: linear-gradient(87deg, black 0, black 100%) !important;
}

.bg-gradient-blue
{
    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-indigo
{
    background: linear-gradient(87deg, #5603ad 0, #9d03ad 100%) !important;
}

.bg-gradient-purple
{
    background: linear-gradient(87deg, #8965e0 0, #bc65e0 100%) !important;
}

.bg-gradient-pink
{
    background: linear-gradient(87deg, #f3a4b5 0, #f3b4a4 100%) !important;
}

.bg-gradient-red
{
    background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-orange
{
    background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-yellow
{
    background: linear-gradient(87deg, #ffd600 0, #beff00 100%) !important;
}

.bg-gradient-green
{
    background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-teal
{
    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-gradient-cyan
{
    background: linear-gradient(87deg, #2bffc6 0, #2be0ff 100%) !important;
}

.bg-gradient-white
{
    background: linear-gradient(87deg, #fff 0, white 100%) !important;
}

.bg-gradient-gray
{
    background: linear-gradient(87deg, #8898aa 0, #888aaa 100%) !important;
}

.bg-gradient-gray-dark
{
    background: linear-gradient(87deg, #32325d 0, #44325d 100%) !important;
}

.bg-gradient-light
{
    background: linear-gradient(87deg, #ced4da 0, #cecfda 100%) !important;
}

.bg-gradient-lighter
{
    background: linear-gradient(87deg, #e9ecef 0, #e9eaef 100%) !important;
}

.bg-translucent-primary
{
    background-color: rgba(63, 87, 223, .6) !important;
}

a.bg-translucent-primary:hover,
a.bg-translucent-primary:focus,
button.bg-translucent-primary:hover,
button.bg-translucent-primary:focus
{
    background-color: rgba(42, 68, 219, .6) !important;
}

.bg-translucent-secondary
{
    background-color: rgba(221, 234, 242, .6) !important;
}

a.bg-translucent-secondary:hover,
a.bg-translucent-secondary:focus,
button.bg-translucent-secondary:hover,
button.bg-translucent-secondary:focus
{
    background-color: rgba(202, 222, 235, .6) !important;
}

.bg-translucent-success
{
    background-color: rgba(39, 177, 118, .6) !important;
}

a.bg-translucent-success:hover,
a.bg-translucent-success:focus,
button.bg-translucent-success:hover,
button.bg-translucent-success:focus
{
    background-color: rgba(34, 156, 104, .6) !important;
}

.bg-translucent-info
{
    background-color: rgba(14, 177, 206, .6) !important;
}

a.bg-translucent-info:hover,
a.bg-translucent-info:focus,
button.bg-translucent-info:hover,
button.bg-translucent-info:focus
{
    background-color: rgba(12, 156, 183, .6) !important;
}

.bg-translucent-warning
{
    background-color: rgba(250, 70, 29, .6) !important;
}

a.bg-translucent-warning:hover,
a.bg-translucent-warning:focus,
button.bg-translucent-warning:hover,
button.bg-translucent-warning:focus
{
    background-color: rgba(249, 51, 5, .6) !important;
}

.bg-translucent-danger
{
    background-color: rgba(243, 20, 64, .6) !important;
}

a.bg-translucent-danger:hover,
a.bg-translucent-danger:focus,
button.bg-translucent-danger:hover,
button.bg-translucent-danger:focus
{
    background-color: rgba(227, 11, 54, .6) !important;
}

.bg-translucent-light
{
    background-color: rgba(153, 163, 173, .6) !important;
}

a.bg-translucent-light:hover,
a.bg-translucent-light:focus,
button.bg-translucent-light:hover,
button.bg-translucent-light:focus
{
    background-color: rgba(139, 150, 162, .6) !important;
}

.bg-translucent-dark
{
    background-color: rgba(17, 19, 21, .6) !important;
}

a.bg-translucent-dark:hover,
a.bg-translucent-dark:focus,
button.bg-translucent-dark:hover,
button.bg-translucent-dark:focus
{
    background-color: rgba(6, 6, 7, .6) !important;
}

.bg-translucent-default
{
    background-color: rgba(15, 28, 50, .6) !important;
}

a.bg-translucent-default:hover,
a.bg-translucent-default:focus,
button.bg-translucent-default:hover,
button.bg-translucent-default:focus
{
    background-color: rgba(9, 17, 30, .6) !important;
}

.bg-translucent-white
{
    background-color: rgba(237, 237, 237, .6) !important;
}

a.bg-translucent-white:hover,
a.bg-translucent-white:focus,
button.bg-translucent-white:hover,
button.bg-translucent-white:focus
{
    background-color: rgba(224, 224, 224, .6) !important;
}

.bg-translucent-neutral
{
    background-color: rgba(237, 237, 237, .6) !important;
}

a.bg-translucent-neutral:hover,
a.bg-translucent-neutral:focus,
button.bg-translucent-neutral:hover,
button.bg-translucent-neutral:focus
{
    background-color: rgba(224, 224, 224, .6) !important;
}

.bg-translucent-darker
{
    background-color: rgba(0, 0, 0, .6) !important;
}

a.bg-translucent-darker:hover,
a.bg-translucent-darker:focus,
button.bg-translucent-darker:hover,
button.bg-translucent-darker:focus
{
    background-color: rgba(0, 0, 0, .6) !important;
}

.section-primary
{
    background-color: #f8f9fe !important;
}

a.section-primary:hover,
a.section-primary:focus,
button.section-primary:hover,
button.section-primary:focus
{
    background-color: #cbd3f8 !important;
}

.section-secondary
{
    background-color: #f7fafc !important;
}

a.section-secondary:hover,
a.section-secondary:focus,
button.section-secondary:hover,
button.section-secondary:focus
{
    background-color: #d2e3ee !important;
}

.section-light
{
    background-color: #ced4da !important;
}

a.section-light:hover,
a.section-light:focus,
button.section-light:hover,
button.section-light:focus
{
    background-color: #b1bbc4 !important;
}

.section-dark
{
    background-color: #212529 !important;
}

a.section-dark:hover,
a.section-dark:focus,
button.section-dark:hover,
button.section-dark:focus
{
    background-color: #0a0c0d !important;
}

.section-darker
{
    background-color: black !important;
}

a.section-darker:hover,
a.section-darker:focus,
button.section-darker:hover,
button.section-darker:focus
{
    background-color: black !important;
}

.bg-gradient-primary
{
    background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-secondary
{
    background: linear-gradient(87deg, #f7fafc 0, #f7f8fc 100%) !important;
}

.bg-gradient-success
{
    background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-info
{
    background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-gradient-warning
{
    background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-danger
{
    background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-light
{
    background: linear-gradient(87deg, #adb5bd 0, #adaebd 100%) !important;
}

.bg-gradient-dark
{
    background: linear-gradient(87deg, #212529 0, #212229 100%) !important;
}

.bg-gradient-default
{
    background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-white
{
    background: linear-gradient(87deg, #fff 0, white 100%) !important;
}

.bg-gradient-neutral
{
    background: linear-gradient(87deg, #fff 0, white 100%) !important;
}

.bg-gradient-darker
{
    background: linear-gradient(87deg, black 0, black 100%) !important;
}

.fill-primary
{
    fill: #5e72e4;
}

.stroke-primary
{
    stroke: #5e72e4;
}

.fill-secondary
{
    fill: #f7fafc;
}

.stroke-secondary
{
    stroke: #f7fafc;
}

.fill-success
{
    fill: #2dce89;
}

.stroke-success
{
    stroke: #2dce89;
}

.fill-info
{
    fill: #11cdef;
}

.stroke-info
{
    stroke: #11cdef;
}

.fill-warning
{
    fill: #fb6340;
}

.stroke-warning
{
    stroke: #fb6340;
}

.fill-danger
{
    fill: #f5365c;
}

.stroke-danger
{
    stroke: #f5365c;
}

.fill-light
{
    fill: #adb5bd;
}

.stroke-light
{
    stroke: #adb5bd;
}

.fill-dark
{
    fill: #212529;
}

.stroke-dark
{
    stroke: #212529;
}

.fill-default
{
    fill: #172b4d;
}

.stroke-default
{
    stroke: #172b4d;
}

.fill-white
{
    fill: #fff;
}

.stroke-white
{
    stroke: #fff;
}

.fill-neutral
{
    fill: #fff;
}

.stroke-neutral
{
    stroke: #fff;
}

.fill-darker
{
    fill: black;
}

.stroke-darker
{
    stroke: black;
}

.fill-opacity-8
{
    fill-opacity: .8;
}

.floating
{
    animation: floating 3s ease infinite;

    will-change: transform;
}
.floating:hover
{
    animation-play-state: paused;
}

.floating-lg
{
    animation: floating-lg 3s ease infinite;
}

.floating-sm
{
    animation: floating-sm 3s ease infinite;
}

@keyframes floating-lg
{
    0%
    {
        transform: translateY(0px);
    }
    50%
    {
        transform: translateY(15px);
    }
    100%
    {
        transform: translateY(0px);
    }
}

@keyframes floating
{
    0%
    {
        transform: translateY(0px);
    }
    50%
    {
        transform: translateY(10px);
    }
    100%
    {
        transform: translateY(0px);
    }
}

@keyframes floating-sm
{
    0%
    {
        transform: translateY(0px);
    }
    50%
    {
        transform: translateY(5px);
    }
    100%
    {
        transform: translateY(0px);
    }
}

.floatfix:before,
.floatfix:after
{
    display: table; 

    content: '';
}

.floatfix:after
{
    clear: both;
}

.img-center
{
    display: block;

    margin-right: auto; 
    margin-left: auto;
}

.opacity-1
{
    opacity: .1 !important;
}

.opacity-2
{
    opacity: .2 !important;
}

.opacity-3
{
    opacity: .3 !important;
}

.opacity-4
{
    opacity: .4 !important;
}

.opacity-5
{
    opacity: .5 !important;
}

.opacity-6
{
    opacity: .6 !important;
}

.opacity-7
{
    opacity: .7 !important;
}

.opacity-8
{
    opacity: .8 !important;
}

.opacity-8
{
    opacity: .9 !important;
}

.opacity-10
{
    opacity: 1 !important;
}

.overflow-visible
{
    overflow: visible !important;
}

.overflow-hidden
{
    overflow: hidden !important;
}

.top-0
{
    top: 0;
}

.right-0
{
    right: 0;
}

.bottom-0
{
    bottom: 0;
}

.left-0
{
    left: 0;
}

.top-1
{
    top: .25rem;
}

.right-1
{
    right: .25rem;
}

.bottom-1
{
    bottom: .25rem;
}

.left-1
{
    left: .25rem;
}

.top-2
{
    top: .5rem;
}

.right-2
{
    right: .5rem;
}

.bottom-2
{
    bottom: .5rem;
}

.left-2
{
    left: .5rem;
}

.top-3
{
    top: 1rem;
}

.right-3
{
    right: 1rem;
}

.bottom-3
{
    bottom: 1rem;
}

.left-3
{
    left: 1rem;
}

.top-4
{
    top: 1.5rem;
}

.right-4
{
    right: 1.5rem;
}

.bottom-4
{
    bottom: 1.5rem;
}

.left-4
{
    left: 1.5rem;
}

.top-5
{
    top: 3rem;
}

.right-5
{
    right: 3rem;
}

.bottom-5
{
    bottom: 3rem;
}

.left-5
{
    left: 3rem;
}

.top--9
{
    top: -10rem;
}

.right--9
{
    right: -10rem;
}

.bottom--9
{
    bottom: -10rem;
}

.left--9
{
    left: -10rem;
}

.top--8
{
    top: -8rem;
}

.right--8
{
    right: -8rem;
}

.bottom--8
{
    bottom: -8rem;
}

.left--8
{
    left: -8rem;
}

.top--7
{
    top: -6rem;
}

.right--7
{
    right: -6rem;
}

.bottom--7
{
    bottom: -6rem;
}

.left--7
{
    left: -6rem;
}

.top--6
{
    top: -4.5rem;
}

.right--6
{
    right: -4.5rem;
}

.bottom--6
{
    bottom: -4.5rem;
}

.left--6
{
    left: -4.5rem;
}

.top--5
{
    top: -3rem;
}

.right--5
{
    right: -3rem;
}

.bottom--5
{
    bottom: -3rem;
}

.left--5
{
    left: -3rem;
}

.top--4
{
    top: -1.5rem;
}

.right--4
{
    right: -1.5rem;
}

.bottom--4
{
    bottom: -1.5rem;
}

.left--4
{
    left: -1.5rem;
}

.top--3
{
    top: -1rem;
}

.right--3
{
    right: -1rem;
}

.bottom--3
{
    bottom: -1rem;
}

.left--3
{
    left: -1rem;
}

.top--2
{
    top: -.5rem;
}

.right--2
{
    right: -.5rem;
}

.bottom--2
{
    bottom: -.5rem;
}

.left--2
{
    left: -.5rem;
}

.top--1
{
    top: -.25rem;
}

.right--1
{
    right: -.25rem;
}

.bottom--1
{
    bottom: -.25rem;
}

.left--1
{
    left: -.25rem;
}

.top-6
{
    top: 4.5rem;
}

.right-6
{
    right: 4.5rem;
}

.bottom-6
{
    bottom: 4.5rem;
}

.left-6
{
    left: 4.5rem;
}

.top-7
{
    top: 6rem;
}

.right-7
{
    right: 6rem;
}

.bottom-7
{
    bottom: 6rem;
}

.left-7
{
    left: 6rem;
}

.top-8
{
    top: 8rem;
}

.right-8
{
    right: 8rem;
}

.bottom-8
{
    bottom: 8rem;
}

.left-8
{
    left: 8rem;
}

.top-9
{
    top: 10rem;
}

.right-9
{
    right: 10rem;
}

.bottom-9
{
    bottom: 10rem;
}

.left-9
{
    left: 10rem;
}

.center
{
    left: 50%;

    transform: translateX(-50%);
}

.h-100vh
{
    height: 100vh !important;
}

.row.row-grid > [class*='col-'] + [class*='col-']
{
    margin-top: 3rem;
}

@media (min-width: 992px)
{
    .row.row-grid > [class*='col-lg-'] + [class*='col-lg-']
    {
        margin-top: 0;
    }
}

@media (min-width: 768px)
{
    .row.row-grid > [class*='col-md-'] + [class*='col-md-']
    {
        margin-top: 0;
    }
}

@media (min-width: 576px)
{
    .row.row-grid > [class*='col-sm-'] + [class*='col-sm-']
    {
        margin-top: 0;
    }
}

.row-grid + .row-grid
{
    margin-top: 3rem;
}

@media (min-width: 992px)
{
    .mt--100
    {
        margin-top: -100px !important;
    }
    .mr--100
    {
        margin-right: -100px !important;
    }
    .mb--100
    {
        margin-bottom: -100px !important;
    }
    .ml--100
    {
        margin-left: -100px !important;
    }
    .mt--150
    {
        margin-top: -150px !important;
    }
    .mb--150
    {
        margin-bottom: -150px !important;
    }
    .mt--200
    {
        margin-top: -200px !important;
    }
    .mb--200
    {
        margin-bottom: -200px !important;
    }
    .mt--300
    {
        margin-top: -300px !important;
    }
    .mb--300
    {
        margin-bottom: -300px !important;
    }
    .pt-100
    {
        padding-top: 100px !important;
    }
    .pb-100
    {
        padding-bottom: 100px !important;
    }
    .pt-150
    {
        padding-top: 150px !important;
    }
    .pb-150
    {
        padding-bottom: 150px !important;
    }
    .pt-200
    {
        padding-top: 200px !important;
    }
    .pb-200
    {
        padding-bottom: 200px !important;
    }
    .pt-250
    {
        padding-top: 250px !important;
    }
    .pb-250
    {
        padding-bottom: 250px !important;
    }
    .pt-300
    {
        padding-top: 300px !important;
    }
    .pb-300
    {
        padding-bottom: 300px !important;
    }
}

[class*='shadow']
{
    transition: all .15s ease;
}

.shadow-sm--hover:hover
{
    box-shadow: 0 0 .5rem rgba(136, 152, 170, .075) !important;
}

.shadow--hover:hover
{
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.shadow-lg--hover:hover
{
    box-shadow: 0 0 3rem rgba(136, 152, 170, .175) !important;
}

.shadow-none--hover:hover
{
    box-shadow: none !important;
}

.font-weight-300
{
    font-weight: 300 !important;
}

.font-weight-400
{
    font-weight: 400 !important;
}

.font-weight-500
{
    font-weight: 500 !important;
}

.font-weight-600
{
    font-weight: 600 !important;
}

.font-weight-700
{
    font-weight: 700 !important;
}

.font-weight-800
{
    font-weight: 800 !important;
}

.font-weight-900
{
    font-weight: 900 !important;
}

.text-underline
{
    text-decoration: underline;
}

.text-through
{
    text-decoration: line-through;
}

.text-xs
{
    font-size: .75rem !important;
}

.text-sm
{
    font-size: .875rem !important;
}

.text-lg
{
    font-size: 1.25rem !important;
}

.text-xl
{
    font-size: 1.5rem !important;
}

.lh-100
{
    line-height: 1;
}

.lh-110
{
    line-height: 1.1;
}

.lh-120
{
    line-height: 1.2;
}

.lh-130
{
    line-height: 1.3;
}

.lh-140
{
    line-height: 1.4;
}

.lh-150
{
    line-height: 1.5;
}

.lh-160
{
    line-height: 1.6;
}

.lh-170
{
    line-height: 1.7;
}

.lh-180
{
    line-height: 1.8;
}

.ls-1
{
    letter-spacing: .0625rem;
}

.ls-15
{
    letter-spacing: .09375rem;
}

.ls-2
{
    letter-spacing: .125rem;
}

.text-blue
{
    color: #5e72e4 !important;
}

a.text-blue:hover,
a.text-blue:focus
{
    color: #324cdd !important;
}

.text-indigo
{
    color: #5603ad !important;
}

a.text-indigo:hover,
a.text-indigo:focus
{
    color: #3d027b !important;
}

.text-purple
{
    color: #8965e0 !important;
}

a.text-purple:hover,
a.text-purple:focus
{
    color: #683bd7 !important;
}

.text-pink
{
    color: #f3a4b5 !important;
}

a.text-pink:hover,
a.text-pink:focus
{
    color: #ed7790 !important;
}

.text-red
{
    color: #f5365c !important;
}

a.text-red:hover,
a.text-red:focus
{
    color: #ec0c38 !important;
}

.text-orange
{
    color: #fb6340 !important;
}

a.text-orange:hover,
a.text-orange:focus
{
    color: #fa3a0e !important;
}

.text-yellow
{
    color: #ffd600 !important;
}

a.text-yellow:hover,
a.text-yellow:focus
{
    color: #ccab00 !important;
}

.text-green
{
    color: #2dce89 !important;
}

a.text-green:hover,
a.text-green:focus
{
    color: #24a46d !important;
}

.text-teal
{
    color: #11cdef !important;
}

a.text-teal:hover,
a.text-teal:focus
{
    color: #0da5c0 !important;
}

.text-cyan
{
    color: #2bffc6 !important;
}

a.text-cyan:hover,
a.text-cyan:focus
{
    color: #00f7b5 !important;
}

.text-white
{
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus
{
    color: #e6e6e6 !important;
}

.text-gray
{
    color: #8898aa !important;
}

a.text-gray:hover,
a.text-gray:focus
{
    color: #6a7e95 !important;
}

.text-gray-dark
{
    color: #32325d !important;
}

a.text-gray-dark:hover,
a.text-gray-dark:focus
{
    color: #20203c !important;
}

.text-light
{
    color: #ced4da !important;
}

a.text-light:hover,
a.text-light:focus
{
    color: #b1bbc4 !important;
}

.text-lighter
{
    color: #e9ecef !important;
}

a.text-lighter:hover,
a.text-lighter:focus
{
    color: #cbd3da !important;
}

@media (min-width: 992px)
{
    .transform-perspective-right
    {
        transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);
    }
    .transform-perspective-left
    {
        transform: scale(1) perspective(2000px) rotateY(11deg) rotateX(2deg) rotate(-2deg);
    }
}

.alert
{
    font-size: .875rem;
}

.alert-heading
{
    font-size: .9375rem;
    font-weight: 600;

    margin-top: .15rem;
}

.alert-icon
{
    font-size: 1.25rem;

    display: inline-block;

    margin-right: 1.25rem;

    vertical-align: middle;
}
.alert-icon i.ni
{
    position: relative;
    top: 1px;
}

.alert-text
{
    display: inline-block;

    vertical-align: middle;
}

[class*='alert-'] .alert-link
{
    color: #fff;
    border-bottom: 1px dotted rgba(255, 255, 255, .5);
}

.alert-dismissible .close
{
    top: 50%;
    right: 1.5rem;

    padding: 0;

    transform: translateY(-50%);

    opacity: 1; 
    color: rgba(255, 255, 255, .6);
}
.alert-dismissible .close:hover,
.alert-dismissible .close:focus
{
    opacity: 1 !important; 
    color: rgba(255, 255, 255, .9);
}
@media (max-width: 575.98px)
{
    .alert-dismissible .close
    {
        top: 1rem;
        right: .5rem;
    }
}
.alert-dismissible .close > span:not(.sr-only)
{
    font-size: 1.5rem;

    color: rgba(255, 255, 255, .6); 
    background-color: transparent;
}
.alert-dismissible .close:hover > span:not(.sr-only),
.alert-dismissible .close:focus > span:not(.sr-only)
{
    color: rgba(255, 255, 255, .9); 
    background-color: transparent;
}



.badge
{
    text-transform: uppercase;
}
.badge a
{
    color: #fff;
}

.badge-md
{
    padding: .65em 1em;
}

.badge-lg
{
    padding: .85em 1.375em;
}

.badge-inline
{
    margin-right: .625rem;
}
.badge-inline + span
{
    position: relative; 
    top: 2px;
}
.badge-inline + span > a
{
    text-decoration: underline;
}

.btn .badge:not(:first-child)
{
    margin-left: .5rem;
}

.btn .badge:not(:last-child)
{
    margin-right: .5rem;
}

.badge-circle
{
    font-size: .875rem; 

    display: inline-flex;

    width: 2rem;
    height: 2rem;

    text-align: center;

    border-radius: 50%;

    align-items: center;
    justify-content: center;
}

.badge-dot
{
    font-size: .875rem;
    font-weight: 400;

    padding-right: 0;
    padding-left: 0;

    text-transform: none; 

    background: transparent;
}
.badge-dot strong
{
    color: #32325d;
}
.badge-dot i
{
    display: inline-block;

    width: .375rem;
    height: .375rem;
    margin-right: .375rem; 

    vertical-align: middle;

    border-radius: 50%;
}
.badge-dot.badge-md i
{
    width: .5rem;
    height: .5rem;
}
.badge-dot.badge-lg i
{
    width: .625rem;
    height: .625rem;
}

.btn
{
    font-size: .875rem;

    position: relative;

    transition: all .15s ease;
    letter-spacing: .025em;
    text-transform: none;

    will-change: transform;
}
.btn:hover
{
    transform: translateY(-1px); 

    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}
.btn:not(:last-child)
{
    margin-right: .5rem;
}
.btn i:not(:first-child),
.btn svg:not(:first-child)
{
    margin-left: .5rem;
}
.btn i:not(:last-child),
.btn svg:not(:last-child)
{
    margin-right: .5rem;
}

.btn-group .btn,
.input-group .btn
{
    margin-right: 0;

    transform: translateY(0);
}

.btn-sm,
.btn-group-sm > .btn
{
    font-size: .75rem;
}

.btn-lg,
.btn-group-lg > .btn
{
    font-size: .875rem;
}

[class*='btn-outline-']
{
    border-width: 1px;
}

.btn-outline-secondary
{
    color: #4385b1;
}

.btn-inner--icon i:not(.fa)
{
    position: relative;
    top: 2px;
}

.btn-link
{
    font-weight: 600;

    box-shadow: none;
}
.btn-link:hover
{
    transform: none; 

    box-shadow: none;
}

.btn-neutral
{
    color: #5e72e4;
}

.btn-icon .btn-inner--icon img
{
    width: 20px;
}

.btn-icon .btn-inner--text:not(:first-child)
{
    margin-left: .75em;
}

.btn-icon .btn-inner--text:not(:last-child)
{
    margin-right: .75em;
}

.btn-icon-only
{
    width: 2.375rem;
    height: 2.375rem;
    padding: 0;
}

a.btn-icon-only
{
    line-height: 2.5;
}

.btn-icon-only.btn-sm,
.btn-group-sm > .btn-icon-only.btn
{
    width: 2rem;
    height: 2rem;
}

.btn-icon-clipboard
{
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;

    display: inline-block;

    width: 100%;
    margin: 0;
    margin: .5rem 0; 
    padding: 1.5rem;

    cursor: pointer;
    text-align: left;
    vertical-align: middle;
    text-decoration: none;

    color: #32325d;
    border: 0;
    border-radius: .375rem;
    background-color: #f6f9fc;

    -moz-appearance: none;
}
.btn-icon-clipboard:hover
{
    background-color: #fff;
    box-shadow: rgba(0, 0, 0, .1) 0 0 0 1px, rgba(0, 0, 0, .1) 0 4px 16px;
}
.btn-icon-clipboard > div
{
    display: flex; 

    align-items: center;
}
.btn-icon-clipboard i
{
    font-size: 1.5rem; 

    box-sizing: content-box;

    vertical-align: middle;

    color: #5e72e4;
}
.btn-icon-clipboard span
{
    font-size: .875rem;
    line-height: 1.5;

    display: inline-block;
    overflow: hidden;

    margin-left: 16px;

    vertical-align: middle; 
    white-space: nowrap;
    text-overflow: ellipsis;
}

.btn-facebook
{
    color: #fff;
    border-color: #3b5999;
    background-color: #3b5999;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-facebook:hover
{
    color: #fff;
    border-color: #3b5999; 
    background-color: #3b5999;
}
.btn-facebook:focus,
.btn-facebook.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(59, 89, 153, .5);
}
.btn-facebook.disabled,
.btn-facebook:disabled
{
    color: #fff;
    border-color: #3b5999; 
    background-color: #3b5999;
}
.btn-facebook:not(:disabled):not(.disabled):active,
.btn-facebook:not(:disabled):not(.disabled).active,
.show > .btn-facebook.dropdown-toggle
{
    color: #fff;
    border-color: #3b5999; 
    background-color: #2d4474;
}
.btn-facebook:not(:disabled):not(.disabled):active:focus,
.btn-facebook:not(:disabled):not(.disabled).active:focus,
.show > .btn-facebook.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(59, 89, 153, .5);
}

.btn-twitter
{
    color: #fff;
    border-color: #1da1f2;
    background-color: #1da1f2;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-twitter:hover
{
    color: #fff;
    border-color: #1da1f2; 
    background-color: #1da1f2;
}
.btn-twitter:focus,
.btn-twitter.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(29, 161, 242, .5);
}
.btn-twitter.disabled,
.btn-twitter:disabled
{
    color: #fff;
    border-color: #1da1f2; 
    background-color: #1da1f2;
}
.btn-twitter:not(:disabled):not(.disabled):active,
.btn-twitter:not(:disabled):not(.disabled).active,
.show > .btn-twitter.dropdown-toggle
{
    color: #fff;
    border-color: #1da1f2; 
    background-color: #0c85d0;
}
.btn-twitter:not(:disabled):not(.disabled):active:focus,
.btn-twitter:not(:disabled):not(.disabled).active:focus,
.show > .btn-twitter.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(29, 161, 242, .5);
}

.btn-google-plus
{
    color: #fff;
    border-color: #dd4b39;
    background-color: #dd4b39;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-google-plus:hover
{
    color: #fff;
    border-color: #dd4b39; 
    background-color: #dd4b39;
}
.btn-google-plus:focus,
.btn-google-plus.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(221, 75, 57, .5);
}
.btn-google-plus.disabled,
.btn-google-plus:disabled
{
    color: #fff;
    border-color: #dd4b39; 
    background-color: #dd4b39;
}
.btn-google-plus:not(:disabled):not(.disabled):active,
.btn-google-plus:not(:disabled):not(.disabled).active,
.show > .btn-google-plus.dropdown-toggle
{
    color: #fff;
    border-color: #dd4b39; 
    background-color: #c23321;
}
.btn-google-plus:not(:disabled):not(.disabled):active:focus,
.btn-google-plus:not(:disabled):not(.disabled).active:focus,
.show > .btn-google-plus.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(221, 75, 57, .5);
}

.btn-instagram
{
    color: #fff;
    border-color: #e4405f;
    background-color: #e4405f;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-instagram:hover
{
    color: #fff;
    border-color: #e4405f; 
    background-color: #e4405f;
}
.btn-instagram:focus,
.btn-instagram.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(228, 64, 95, .5);
}
.btn-instagram.disabled,
.btn-instagram:disabled
{
    color: #fff;
    border-color: #e4405f; 
    background-color: #e4405f;
}
.btn-instagram:not(:disabled):not(.disabled):active,
.btn-instagram:not(:disabled):not(.disabled).active,
.show > .btn-instagram.dropdown-toggle
{
    color: #fff;
    border-color: #e4405f; 
    background-color: #d31e40;
}
.btn-instagram:not(:disabled):not(.disabled):active:focus,
.btn-instagram:not(:disabled):not(.disabled).active:focus,
.show > .btn-instagram.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(228, 64, 95, .5);
}

.btn-pinterest
{
    color: #fff;
    border-color: #bd081c;
    background-color: #bd081c;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-pinterest:hover
{
    color: #fff;
    border-color: #bd081c; 
    background-color: #bd081c;
}
.btn-pinterest:focus,
.btn-pinterest.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(189, 8, 28, .5);
}
.btn-pinterest.disabled,
.btn-pinterest:disabled
{
    color: #fff;
    border-color: #bd081c; 
    background-color: #bd081c;
}
.btn-pinterest:not(:disabled):not(.disabled):active,
.btn-pinterest:not(:disabled):not(.disabled).active,
.show > .btn-pinterest.dropdown-toggle
{
    color: #fff;
    border-color: #bd081c; 
    background-color: #8c0615;
}
.btn-pinterest:not(:disabled):not(.disabled):active:focus,
.btn-pinterest:not(:disabled):not(.disabled).active:focus,
.show > .btn-pinterest.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(189, 8, 28, .5);
}

.btn-youtube
{
    color: #fff;
    border-color: #cd201f;
    background-color: #cd201f;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-youtube:hover
{
    color: #fff;
    border-color: #cd201f; 
    background-color: #cd201f;
}
.btn-youtube:focus,
.btn-youtube.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(205, 32, 31, .5);
}
.btn-youtube.disabled,
.btn-youtube:disabled
{
    color: #fff;
    border-color: #cd201f; 
    background-color: #cd201f;
}
.btn-youtube:not(:disabled):not(.disabled):active,
.btn-youtube:not(:disabled):not(.disabled).active,
.show > .btn-youtube.dropdown-toggle
{
    color: #fff;
    border-color: #cd201f; 
    background-color: #a11918;
}
.btn-youtube:not(:disabled):not(.disabled):active:focus,
.btn-youtube:not(:disabled):not(.disabled).active:focus,
.show > .btn-youtube.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(205, 32, 31, .5);
}

.btn-slack
{
    color: #fff;
    border-color: #3aaf85;
    background-color: #3aaf85;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-slack:hover
{
    color: #fff;
    border-color: #3aaf85; 
    background-color: #3aaf85;
}
.btn-slack:focus,
.btn-slack.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(58, 175, 133, .5);
}
.btn-slack.disabled,
.btn-slack:disabled
{
    color: #fff;
    border-color: #3aaf85; 
    background-color: #3aaf85;
}
.btn-slack:not(:disabled):not(.disabled):active,
.btn-slack:not(:disabled):not(.disabled).active,
.show > .btn-slack.dropdown-toggle
{
    color: #fff;
    border-color: #3aaf85; 
    background-color: #2d8968;
}
.btn-slack:not(:disabled):not(.disabled):active:focus,
.btn-slack:not(:disabled):not(.disabled).active:focus,
.show > .btn-slack.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(58, 175, 133, .5);
}

.btn-dribbble
{
    color: #fff;
    border-color: #ea4c89;
    background-color: #ea4c89;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-dribbble:hover
{
    color: #fff;
    border-color: #ea4c89; 
    background-color: #ea4c89;
}
.btn-dribbble:focus,
.btn-dribbble.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(234, 76, 137, .5);
}
.btn-dribbble.disabled,
.btn-dribbble:disabled
{
    color: #fff;
    border-color: #ea4c89; 
    background-color: #ea4c89;
}
.btn-dribbble:not(:disabled):not(.disabled):active,
.btn-dribbble:not(:disabled):not(.disabled).active,
.show > .btn-dribbble.dropdown-toggle
{
    color: #fff;
    border-color: #ea4c89; 
    background-color: #e51e6b;
}
.btn-dribbble:not(:disabled):not(.disabled):active:focus,
.btn-dribbble:not(:disabled):not(.disabled).active:focus,
.show > .btn-dribbble.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(234, 76, 137, .5);
}

.btn-github
{
    color: #fff;
    border-color: #222;
    background-color: #222;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.btn-github:hover
{
    color: #fff;
    border-color: #222; 
    background-color: #222;
}
.btn-github:focus,
.btn-github.focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(34, 34, 34, .5);
}
.btn-github.disabled,
.btn-github:disabled
{
    color: #fff;
    border-color: #222; 
    background-color: #222;
}
.btn-github:not(:disabled):not(.disabled):active,
.btn-github:not(:disabled):not(.disabled).active,
.show > .btn-github.dropdown-toggle
{
    color: #fff;
    border-color: #222; 
    background-color: #090909;
}
.btn-github:not(:disabled):not(.disabled):active:focus,
.btn-github:not(:disabled):not(.disabled).active:focus,
.show > .btn-github.dropdown-toggle:focus
{
    box-shadow: none, 0 0 0 0 rgba(34, 34, 34, .5);
}

.card-translucent
{
    background-color: rgba(18, 91, 152, .08);
}

.card-profile-image
{
    position: relative;
}
.card-profile-image img
{
    position: absolute;
    left: 50%;

    max-width: 180px;

    transition: all .15s ease; 
    transform: translate(-50%, -30%);

    border-radius: .375rem;
}
.card-profile-image img:hover
{
    transform: translate(-50%, -33%);
}

.card-profile-stats
{
    padding: 1rem 0;
}
.card-profile-stats > div
{
    margin-right: 1rem;
    padding: .875rem; 

    text-align: center;
}
.card-profile-stats > div:last-child
{
    margin-right: 0;
}
.card-profile-stats > div .heading
{
    font-size: 1.1rem;
    font-weight: bold;

    display: block;
}
.card-profile-stats > div .description
{
    font-size: .875rem;

    color: #adb5bd;
}

.card-profile-actions
{
    padding: .875rem;
}

.card-blockquote
{
    position: relative; 

    padding: 2rem;
}
.card-blockquote .svg-bg
{
    position: absolute;
    top: -94px;
    left: 0; 

    display: block;

    width: 100%;
    height: 95px;
}

.card-lift--hover:hover
{
    transition: all .15s ease; 
    transform: translateY(-20px);
}
@media screen and (prefers-reduced-motion: reduce)
{
    .card-lift--hover:hover
    {
        transition: none;
    }
}

.card-stats .card-body
{
    padding: 1rem 1.5rem;
}

.card-stats .card-status-bullet
{
    position: absolute;
    top: 0;
    right: 0;

    transform: translate(50%, -50%);
}

.chart
{
    position: relative;

    height: 350px;
}

.chart-sm
{
    height: 230px;
}

.chart-legend
{
    font-size: .875rem;

    display: flex;

    margin-top: 2.5rem;

    text-align: center;

    color: #8898aa; 

    justify-content: center;
}

.chart-legend-item
{
    display: inline-flex;

    align-items: center;
}
.chart-legend-item + .chart-legend-item
{
    margin-left: 1rem;
}

.chart-legend-indicator
{
    display: inline-block;

    width: .5rem;
    height: .5rem;
    margin-right: .375rem;

    border-radius: 50%;
}

#chart-tooltip
{
    z-index: 0;
}
#chart-tooltip .arrow
{
    top: 100%;
    left: 50%;

    transform: translateX(-50%) translateX(-.5rem);
}

.chart-info-overlay
{
    position: absolute;
    z-index: 1; 
    top: 0;
    left: 5%;

    max-width: 350px;
    padding: 20px;
}

.close
{
    transition: all .15s ease;
}
.close > span:not(.sr-only)
{
    font-size: 1.25rem;
    line-height: 17px;

    display: block;

    width: 1.25rem;
    height: 1.25rem;

    transition: all .15s ease; 

    color: rgba(0, 0, 0, .6);
    border-radius: 50%;
    background-color: transparent;
}
.close:hover,
.close:focus
{
    color: rgba(0, 0, 0, .9);
    outline: none; 
    background-color: transparent;
}
.close:hover span:not(.sr-only),
.close:focus span:not(.sr-only)
{
    background-color: transparent;
}

.main-content
{
    position: relative;
}
.main-content .navbar-top
{
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;

    width: 100%;
    padding-right: 0 !important; 
    padding-left: 0 !important;

    background-color: transparent;
}
@media (min-width: 768px)
{
    .main-content .container-fluid
    {
        padding-right: 39px !important; 
        padding-left: 39px !important;
    }
}

.navbar-vertical.navbar-expand-xs.fixed-left + .main-content
{
    margin-left: 250px;
}

.navbar-vertical.navbar-expand-xs.fixed-right + .main-content
{
    margin-right: 250px;
}

@media (min-width: 576px)
{
    .navbar-vertical.navbar-expand-sm.fixed-left + .main-content
    {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-sm.fixed-right + .main-content
    {
        margin-right: 250px;
    }
}

@media (min-width: 768px)
{
    .navbar-vertical.navbar-expand-md.fixed-left + .main-content
    {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-md.fixed-right + .main-content
    {
        margin-right: 250px;
    }
}

@media (min-width: 992px)
{
    .navbar-vertical.navbar-expand-lg.fixed-left + .main-content
    {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-lg.fixed-right + .main-content
    {
        margin-right: 250px;
    }
}

@media (min-width: 1200px)
{
    .navbar-vertical.navbar-expand-xl.fixed-left + .main-content
    {
        margin-left: 250px;
    }
    .navbar-vertical.navbar-expand-xl.fixed-right + .main-content
    {
        margin-right: 250px;
    }
}

.custom-checkbox .custom-control-input ~ .custom-control-label
{
    font-size: .875rem; 

    cursor: pointer;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before
{
    border-color: #5e72e4;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3E%3Cpath fill=\'%23fff\' d=\'M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z\'/%3E%3C/svg%3E');
}

.custom-checkbox .custom-control-input:disabled ~ .custom-control-label::before
{
    border-color: #e9ecef;
}

.custom-checkbox .custom-control-input:disabled:checked::before
{
    border-color: rgba(94, 114, 228, .5);
}

.custom-control-label::before
{
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55); 

    border: 1px solid #cad1d7;
}

.custom-control-label span
{
    position: relative;
    top: 2px;
}

.custom-control-label
{
    margin-bottom: 0;
}

.custom-control-alternative .custom-control-label::before
{
    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.custom-control-alternative .custom-control-input:checked ~ .custom-control-label::before
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.custom-control-alternative .custom-control-input:active ~ .custom-control-label::before,
.custom-control-alternative .custom-control-input:focus ~ .custom-control-label::before
{
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.custom-checkbox .custom-control-input ~ .custom-control-label
{
    font-size: .875rem; 

    cursor: pointer;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before
{
    border-color: #5e72e4;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 8 8\'%3E%3Cpath fill=\'%23fff\' d=\'M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z\'/%3E%3C/svg%3E');
}

.custom-checkbox .custom-control-input:disabled ~ .custom-control-label::before
{
    border-color: #e9ecef;
}

.custom-checkbox .custom-control-input:disabled:checked::before
{
    border-color: rgba(94, 114, 228, .5);
}

.custom-radio .custom-control-input ~ .custom-control-label
{
    font-size: .875rem; 

    cursor: pointer;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before
{
    border-color: #5e72e4;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'-4 -4 8 8\'%3E%3Ccircle r=\'3\' fill=\'%23fff\'/%3E%3C/svg%3E');
}

.custom-radio .custom-control-input:disabled ~ .custom-control-label::before
{
    border-color: #e9ecef;
}

.custom-radio .custom-control-input:disabled:checked::before
{
    border-color: rgba(94, 114, 228, .5);
}

.custom-toggle
{
    position: relative;

    display: inline-block;

    width: 50px;
    height: 1.5rem;
}
.custom-toggle input
{
    display: none;
}
.custom-toggle input:checked + .custom-toggle-slider
{
    border: 1px solid #5e72e4;
}
.custom-toggle input:checked + .custom-toggle-slider:before
{
    transform: translateX(1.625rem); 

    background: #5e72e4;
}
.custom-toggle input:disabled + .custom-toggle-slider
{
    border: 1px solid #e9ecef;
}
.custom-toggle input:disabled:checked + .custom-toggle-slider
{
    border: 1px solid #e9ecef;
}
.custom-toggle input:disabled:checked + .custom-toggle-slider:before
{
    background-color: #8a98eb;
}

.custom-toggle-slider
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    cursor: pointer;

    border: 1px solid #cad1d7;
    border-radius: 34px !important;
    background-color: transparent;
}
.custom-toggle-slider:before
{
    position: absolute;
    bottom: 2px;
    left: 2px;

    width: 18px;
    height: 18px;

    content: '';
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55); 

    border-radius: 50% !important;
    background-color: #e9ecef;
}

.dropdown,
.dropup,
.dropright,
.dropleft
{
    display: inline-block;
}

.dropdown-menu
{
    min-width: 12rem;
}
.dropdown-menu .dropdown-item
{
    font-size: .875rem; 

    padding: .5rem 1rem;
}
.dropdown-menu .dropdown-item > i,
.dropdown-menu .dropdown-item > svg
{
    font-size: 1rem;

    margin-right: 1rem;

    vertical-align: -17%;
}

.dropdown-header
{
    font-size: .625rem;
    font-weight: 700; 

    padding-right: 1rem;
    padding-left: 1rem;

    text-transform: uppercase;

    color: #f6f9fc;
}

.dropdown-menu a.media > div:first-child
{
    line-height: 1;
}

.dropdown-menu a.media p
{
    color: #8898aa;
}

.dropdown-menu a.media:hover .heading,
.dropdown-menu a.media:hover p
{
    color: #172b4d !important;
}

.dropdown-menu-sm
{
    min-width: 100px;

    border: .4375rem;
}

.dropdown-menu-lg
{
    min-width: 260px;

    border-radius: .4375rem;
}

.dropdown-menu-xl
{
    min-width: 450px;

    border-radius: .4375rem;
}

.footer
{
    padding: 2.5rem 0; 

    background: #f7fafc;
}
.footer .col-footer .heading
{
    font-size: .875rem;
    font-weight: 600;

    margin-bottom: 1rem; 

    letter-spacing: 0;
    text-transform: uppercase;

    color: #8898aa;
}
.footer .nav .nav-item .nav-link,
.footer .footer-link
{
    color: #8898aa !important;
}
.footer .nav .nav-item .nav-link:hover,
.footer .footer-link:hover
{
    color: #525f7f !important;
}
.footer .list-unstyled li a
{
    font-size: .85rem; 

    display: inline-block;

    padding: .125rem 0;

    color: #8898aa;
}
.footer .list-unstyled li a:hover
{
    color: #525f7f;
}
.footer .copyright
{
    font-size: .875rem;
}

.footer-dark .col-footer .heading
{
    color: #fff;
}

.nav-footer .nav-link
{
    font-size: .875rem;
}

.nav-footer .nav-item:last-child .nav-link
{
    padding-right: 0;
}

.footer.has-cards
{
    position: relative;

    overflow: hidden;

    margin-top: -420px;
    padding-top: 500px;

    pointer-events: none; 

    background: transparent;
}
.footer.has-cards:before
{
    position: absolute;
    top: 600px;
    right: 0;
    left: 0;

    height: 2000px;

    content: '';
    transform: skew(0, -8deg); 

    background: #f7fafc;
}
.footer.has-cards .container
{
    position: relative; 

    pointer-events: auto;
}

.form-control-label
{
    font-size: .875rem;
    font-weight: 600; 

    color: #525f7f;
}

.form-control
{
    font-size: .875rem;
}
.form-control:focus:-ms-input-placeholder
{
    color: #adb5bd;
}
.form-control:focus::-ms-input-placeholder
{
    color: #adb5bd;
}
.form-control:focus::placeholder
{
    color: #adb5bd;
}

textarea[resize='none']
{
    resize: none !important;
}

textarea[resize='both']
{
    resize: both !important;
}

textarea[resize='vertical']
{
    resize: vertical !important;
}

textarea[resize='horizontal']
{
    resize: horizontal !important;
}

.form-control-muted
{
    border-color: #f7fafe;
    background-color: #f7fafe;
    box-shadow: none;
}
.form-control-muted:focus
{
    background-color: #fcfdff;
}

.form-control-alternative
{
    transition: box-shadow .15s ease; 

    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}
.form-control-alternative:focus
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.form-control-lg
{
    font-size: 1rem;
}

.has-success,
.has-danger
{
    position: relative;
}
.has-success:after,
.has-danger:after
{
    font-family: 'NucleoIcons';
    font-size: 9px;
    line-height: 19px;

    position: absolute;
    top: 2px;
    right: 15px;

    display: inline-block;

    width: 19px;
    height: 19px;

    transform: translateY(50%);
    text-align: center;

    opacity: 1; 
    border-radius: 50%;
}

.has-success:after
{
    content: '\ea26';

    color: daken(#2dce89, 18%);
    background-color: #69deac;
}

.has-success .form-control
{
    background-color: #fff;
}
.has-success .form-control:focus
{
    border-color: rgba(50, 151, 211, .25);
}
.has-success .form-control:-ms-input-placeholder
{
    color: #2dce89;
}
.has-success .form-control::-ms-input-placeholder
{
    color: #2dce89;
}
.has-success .form-control::placeholder
{
    color: #2dce89;
}

.has-danger:after
{
    content: '\ea53';

    color: daken(#fb6340, 18%);
    background-color: #fda08b;
}

.has-danger .form-control
{
    background-color: #fff;
}
.has-danger .form-control:focus
{
    border-color: rgba(50, 151, 211, .25);
}
.has-danger .form-control:-ms-input-placeholder
{
    color: #fb6340;
}
.has-danger .form-control::-ms-input-placeholder
{
    color: #fb6340;
}
.has-danger .form-control::placeholder
{
    color: #fb6340;
}

.input-group
{
    transition: all .15s ease; 

    border-radius: .375rem;
    box-shadow: none;
}
.input-group .form-control
{
    box-shadow: none;
}
.input-group .form-control:not(:first-child)
{
    padding-left: 0; 

    border-left: 0;
}
.input-group .form-control:not(:last-child)
{
    padding-right: 0; 

    border-right: 0;
}
.input-group .form-control:focus
{
    box-shadow: none;
}

.input-group-text
{
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative
{
    transition: box-shadow .15s ease; 

    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}
.input-group-alternative .form-control,
.input-group-alternative .input-group-text
{
    border: 0;
    box-shadow: none;
}

.focused .input-group-alternative
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group
{
    box-shadow: none;
}

.focused .input-group-text
{
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25); 
    background-color: #fff;
}

.focused .form-control
{
    border-color: rgba(50, 151, 211, .25);
}

.icon
{
    width: 3rem;
    height: 3rem;
}
.icon i,
.icon svg
{
    font-size: 2.25rem;
}
.icon + .icon-text
{
    width: calc(100% - 3rem - 1); 
    padding-left: 1rem;
}

.icon-xl
{
    width: 5rem;
    height: 5rem;
}
.icon-xl i,
.icon-xl svg
{
    font-size: 4.25rem;
}
.icon-xl + .icon-text
{
    width: calc(100% - $icon-size-xl - 1);
}

.icon-lg
{
    width: 4rem;
    height: 4rem;
}
.icon-lg i,
.icon-lg svg
{
    font-size: 3.25rem;
}
.icon-lg + .icon-text
{
    width: calc(100% - $icon-size-lg - 1);
}

.icon-sm
{
    width: 2rem;
    height: 2rem;
}
.icon-sm i,
.icon-sm svg
{
    font-size: 1.25rem;
}
.icon-sm + .icon-text
{
    width: calc(100% - $icon-size-sm - 1);
}

.icon-shape
{
    display: inline-flex;

    padding: 12px;

    text-align: center;

    border-radius: 50%; 

    align-items: center;
    justify-content: center;
}
.icon-shape i,
.icon-shape svg
{
    font-size: 1.25rem;
}
.icon-shape.icon-lg i,
.icon-shape.icon-lg svg
{
    font-size: 1.625rem;
}
.icon-shape.icon-sm i,
.icon-shape.icon-sm svg
{
    font-size: .875rem;
}
.icon-shape svg
{
    width: 30px;
    height: 30px;
}

.icon-shape-primary
{
    color: #2643e9;
    background-color: rgba(138, 152, 235, .5);
}

.icon-shape-secondary
{
    color: #cfe3f1;
    background-color: rgba(255, 255, 255, .5);
}

.icon-shape-success
{
    color: #1aae6f;
    background-color: rgba(84, 218, 161, .5);
}

.icon-shape-info
{
    color: #03acca;
    background-color: rgba(65, 215, 242, .5);
}

.icon-shape-warning
{
    color: #ff3709;
    background-color: rgba(252, 140, 114, .5);
}

.icon-shape-danger
{
    color: #f80031;
    background-color: rgba(247, 103, 131, .5);
}

.icon-shape-light
{
    color: #879cb0;
    background-color: rgba(201, 207, 212, .5);
}

.icon-shape-dark
{
    color: #090c0e;
    background-color: rgba(56, 63, 69, .5);
}

.icon-shape-default
{
    color: #091428;
    background-color: rgba(35, 65, 116, .5);
}

.icon-shape-white
{
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, .5);
}

.icon-shape-neutral
{
    color: #e8e3e3;
    background-color: rgba(255, 255, 255, .5);
}

.icon-shape-darker
{
    color: black;
    background-color: rgba(26, 26, 26, .5);
}

.input-group
{
    transition: all .15s ease; 

    border-radius: .375rem;
    box-shadow: none;
}
.input-group .form-control
{
    box-shadow: none;
}
.input-group .form-control:not(:first-child)
{
    padding-left: 0; 

    border-left: 0;
}
.input-group .form-control:not(:last-child)
{
    padding-right: 0; 

    border-right: 0;
}
.input-group .form-control:focus
{
    box-shadow: none;
}

.input-group-text
{
    transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative
{
    transition: box-shadow .15s ease; 

    border: 0;
    box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}
.input-group-alternative .form-control,
.input-group-alternative .input-group-text
{
    border: 0;
    box-shadow: none;
}

.focused .input-group-alternative
{
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group
{
    box-shadow: none;
}

.focused .input-group-text
{
    color: #8898aa;
    border-color: rgba(50, 151, 211, .25); 
    background-color: #fff;
}

.focused .form-control
{
    border-color: rgba(50, 151, 211, .25);
}

.list-group-space .list-group-item
{
    margin-bottom: 1.5rem;

    border-radius: .375rem;
}

.list-group-img
{
    width: 3rem;
    height: 3rem;
    margin: -.1rem 1.2rem 0 -.2rem; 

    vertical-align: top;

    border-radius: 50%;
}

.list-group-content
{
    min-width: 0; 

    flex: 1 1;
}
.list-group-content > p
{
    line-height: 1.5;

    margin: .2rem 0 0; 

    color: #adb5bd;
}

.list-group-heading
{
    font-size: 1rem;

    color: #32325d;
}
.list-group-heading > small
{
    font-weight: 500; 

    float: right;

    color: #adb5bd;
}

.map-canvas
{
    position: relative;

    width: 100%;
    height: 500px;

    border-radius: .375rem;
}

.mask
{
    position: absolute;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    transition: all .15s ease;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .mask
    {
        transition: none;
    }
}

.modal-fluid .modal-dialog
{
    margin-top: 0;
    margin-bottom: 0;
}

.modal-fluid .modal-content
{
    border-radius: 0;
}

.modal-primary .modal-title
{
    color: #fff;
}

.modal-primary .modal-header,
.modal-primary .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-primary .modal-content
{
    color: #fff; 
    background-color: #5e72e4;
}
.modal-primary .modal-content .heading
{
    color: #fff;
}

.modal-primary .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-secondary .modal-title
{
    color: #212529;
}

.modal-secondary .modal-header,
.modal-secondary .modal-footer
{
    border-color: rgba(33, 37, 41, .075);
}

.modal-secondary .modal-content
{
    color: #212529; 
    background-color: #f7fafc;
}
.modal-secondary .modal-content .heading
{
    color: #212529;
}

.modal-secondary .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-success .modal-title
{
    color: #fff;
}

.modal-success .modal-header,
.modal-success .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-success .modal-content
{
    color: #fff; 
    background-color: #2dce89;
}
.modal-success .modal-content .heading
{
    color: #fff;
}

.modal-success .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-info .modal-title
{
    color: #fff;
}

.modal-info .modal-header,
.modal-info .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-info .modal-content
{
    color: #fff; 
    background-color: #11cdef;
}
.modal-info .modal-content .heading
{
    color: #fff;
}

.modal-info .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-warning .modal-title
{
    color: #fff;
}

.modal-warning .modal-header,
.modal-warning .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-warning .modal-content
{
    color: #fff; 
    background-color: #fb6340;
}
.modal-warning .modal-content .heading
{
    color: #fff;
}

.modal-warning .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-danger .modal-title
{
    color: #fff;
}

.modal-danger .modal-header,
.modal-danger .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-danger .modal-content
{
    color: #fff; 
    background-color: #f5365c;
}
.modal-danger .modal-content .heading
{
    color: #fff;
}

.modal-danger .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-light .modal-title
{
    color: #fff;
}

.modal-light .modal-header,
.modal-light .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-light .modal-content
{
    color: #fff; 
    background-color: #adb5bd;
}
.modal-light .modal-content .heading
{
    color: #fff;
}

.modal-light .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-dark .modal-title
{
    color: #fff;
}

.modal-dark .modal-header,
.modal-dark .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-dark .modal-content
{
    color: #fff; 
    background-color: #212529;
}
.modal-dark .modal-content .heading
{
    color: #fff;
}

.modal-dark .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-default .modal-title
{
    color: #fff;
}

.modal-default .modal-header,
.modal-default .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-default .modal-content
{
    color: #fff; 
    background-color: #172b4d;
}
.modal-default .modal-content .heading
{
    color: #fff;
}

.modal-default .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-white .modal-title
{
    color: #212529;
}

.modal-white .modal-header,
.modal-white .modal-footer
{
    border-color: rgba(33, 37, 41, .075);
}

.modal-white .modal-content
{
    color: #212529; 
    background-color: #fff;
}
.modal-white .modal-content .heading
{
    color: #212529;
}

.modal-white .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-neutral .modal-title
{
    color: #212529;
}

.modal-neutral .modal-header,
.modal-neutral .modal-footer
{
    border-color: rgba(33, 37, 41, .075);
}

.modal-neutral .modal-content
{
    color: #212529; 
    background-color: #fff;
}
.modal-neutral .modal-content .heading
{
    color: #212529;
}

.modal-neutral .close > span:not(.sr-only)
{
    color: #fff;
}

.modal-darker .modal-title
{
    color: #fff;
}

.modal-darker .modal-header,
.modal-darker .modal-footer
{
    border-color: rgba(255, 255, 255, .075);
}

.modal-darker .modal-content
{
    color: #fff; 
    background-color: black;
}
.modal-darker .modal-content .heading
{
    color: #fff;
}

.modal-darker .close > span:not(.sr-only)
{
    color: #fff;
}

.nav-wrapper
{
    padding: 1rem 0;

    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
}
.nav-wrapper + .card
{
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.nav-link
{
    color: #525f7f;
}
.nav-link:hover
{
    color: #5e72e4;
}
.nav-link i.ni
{
    position: relative;
    top: 2px;
}

.nav-pills .nav-item:not(:last-child)
{
    padding-right: 1rem;
}

.nav-pills .nav-link
{
    font-size: .875rem;
    font-weight: 500;

    padding: .75rem 1rem;

    transition: all .15s ease; 

    color: #5e72e4;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}
.nav-pills .nav-link:hover
{
    color: #485fe0;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link
{
    color: #fff;
    background-color: #5e72e4;
}

@media (max-width: 575.98px)
{
    .nav-pills .nav-item
    {
        margin-bottom: 1rem;
    }
}

@media (max-width: 767.98px)
{
    .nav-pills:not(.nav-pills-circle) .nav-item
    {
        padding-right: 0;
    }
}

.nav-pills-circle .nav-link
{
    line-height: 60px;

    width: 60px;
    height: 60px;
    padding: 0;

    text-align: center;

    border-radius: 50%;
}

.nav-pills-circle .nav-link-icon i,
.nav-pills-circle .nav-link-icon svg
{
    font-size: 1rem;
}

.navbar-horizontal .navbar-nav .nav-link
{
    font-size: .9rem;
    font-weight: 400;

    transition: all .15s linear; 
    letter-spacing: 0;
    text-transform: normal;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .navbar-horizontal .navbar-nav .nav-link
    {
        transition: none;
    }
}
.navbar-horizontal .navbar-nav .nav-link .nav-link-inner--text
{
    margin-left: .25rem;
}

.navbar-horizontal .navbar-brand
{
    font-size: .875rem;
    font-size: .875rem;
    font-weight: 600;

    letter-spacing: .05px; 
    text-transform: uppercase;
}
.navbar-horizontal .navbar-brand img
{
    height: 30px;
}

.navbar-horizontal .navbar-dark .navbar-brand
{
    color: #fff;
}

.navbar-horizontal .navbar-light .navbar-brand
{
    color: #32325d;
}

.navbar-horizontal .navbar-nav .nav-item .media:not(:last-child)
{
    margin-bottom: 1.5rem;
}

@media (min-width: 992px)
{
    .navbar-horizontal .navbar-nav .nav-item
    {
        margin-right: .5rem;
    }
    .navbar-horizontal .navbar-nav .nav-item [data-toggle='dropdown']::after
    {
        transition: all .15s ease;
    }
    .navbar-horizontal .navbar-nav .nav-item.show [data-toggle='dropdown']::after
    {
        transform: rotate(180deg);
    }
    .navbar-horizontal .navbar-nav .nav-link
    {
        padding-top: 1rem;
        padding-bottom: 1rem;

        border-radius: .375rem;
    }
    .navbar-horizontal .navbar-nav .nav-link i
    {
        margin-right: .625rem;
    }
    .navbar-horizontal .navbar-nav .nav-link-icon
    {
        font-size: 1rem;

        padding-right: .5rem !important;
        padding-left: .5rem !important;

        border-radius: .375rem;
    }
    .navbar-horizontal .navbar-nav .nav-link-icon i
    {
        margin-right: 0;
    }
}

.navbar-horizontal .navbar-transparent
{
    position: absolute;
    z-index: 100;
    top: 0;

    width: 100%;

    border: 0;
    background-color: transparent;
    box-shadow: none;
}
.navbar-horizontal .navbar-transparent .navbar-brand
{
    color: white;
}
.navbar-horizontal .navbar-transparent .navbar-toggler
{
    color: white;
}
.navbar-horizontal .navbar-transparent .navbar-toggler-icon
{
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath stroke=\'rgba(255, 255, 255, 0.95)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');
}

@media (min-width: 768px)
{
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link
    {
        color: rgba(255, 255, 255, .95);
    }
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link:hover,
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link:focus
    {
        color: rgba(255, 255, 255, .65);
    }
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link.disabled
    {
        color: rgba(255, 255, 255, .25);
    }
    .navbar-horizontal .navbar-transparent .navbar-nav .show > .nav-link,
    .navbar-horizontal .navbar-transparent .navbar-nav .active > .nav-link,
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link.show,
    .navbar-horizontal .navbar-transparent .navbar-nav .nav-link.active
    {
        color: rgba(255, 255, 255, .65);
    }
    .navbar-horizontal .navbar-transparent .navbar-brand
    {
        color: rgba(255, 255, 255, .95);
    }
    .navbar-horizontal .navbar-transparent .navbar-brand:hover,
    .navbar-horizontal .navbar-transparent .navbar-brand:focus
    {
        color: rgba(255, 255, 255, .95);
    }
}

.navbar-vertical
{
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}
.navbar-vertical .navbar
{
    border-width: 0 0 1px 0;
    border-style: solid;
}
.navbar-vertical .navbar-light
{
    border-color: #f6f9fc; 
    background-color: transparent;
}
.navbar-vertical .navbar-brand
{
    margin-right: 0;
}
.navbar-vertical .navbar-brand-img,
.navbar-vertical .navbar-brand > img
{
    max-width: 100%;
    max-height: 2rem;
}
@media (min-width: 768px)
{
    .navbar-vertical .navbar-collapse
    {
        margin-right: -1rem;
        margin-left: -1rem;
        padding-right: 1rem; 
        padding-left: 1rem;
    }
    .navbar-vertical .navbar-collapse:before
    {
        display: block;

        margin: 1rem -1rem; 

        content: '';
    }
}
.navbar-vertical .navbar-nav
{
    margin-right: -1rem; 
    margin-left: -1rem;
}
.navbar-vertical .navbar-nav .nav-link
{
    font-size: .9rem; 

    padding-right: 1rem;
    padding-left: 1rem;
}
.navbar-vertical .navbar-nav .nav-link.active
{
    position: relative;
}
.navbar-vertical .navbar-nav .nav-link.active:before
{
    position: absolute;
    top: .25rem;
    bottom: .25rem;
    left: 0;

    content: '';

    border-left: 2px solid #5e72e4;
}
.navbar-vertical .navbar-nav .nav-link > i
{
    font-size: .9375rem;
    line-height: 1.5rem; 

    min-width: 2.25rem;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu
{
    border: none;
}
.navbar-vertical .navbar-nav .nav-link .dropdown-menu .dropdown-menu
{
    margin-left: .75rem;
}
.navbar-vertical .navbar-nav .nav-link
{
    display: flex;

    align-items: center;
}
.navbar-vertical .navbar-nav .nav-link[data-toggle='collapse']:after
{
    font-family: 'Font Awesome 5 Free';
    font-weight: 700;
    font-style: normal;
    font-variant: normal;

    display: inline-block;

    margin-left: auto;

    content: '\f105';
    transition: all .15s ease; 

    color: #8898aa;

    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
.navbar-vertical .navbar-nav .nav-link[data-toggle='collapse'][aria-expanded='true']:after
{
    transform: rotate(90deg);
}
.navbar-vertical .navbar-nav .nav .nav-link
{
    padding-left: 3.25rem;
}
.navbar-vertical .navbar-nav .nav .nav .nav-link
{
    padding-left: 3.75rem;
}
.navbar-vertical .navbar-heading
{
    font-size: .75rem;

    padding-top: .25rem;
    padding-bottom: .25rem;

    letter-spacing: .04em; 
    text-transform: uppercase;
}
.navbar-vertical.navbar-expand-xs
{
    position: fixed;
    top: 0;
    bottom: 0;

    display: block;
    overflow-y: auto; 

    width: 100%;
    max-width: 250px;
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
.navbar-vertical.navbar-expand-xs > [class*='container']
{
    flex-direction: column;

    min-height: 100%;
    padding-right: 0; 
    padding-left: 0;

    align-items: stretch;
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active)
{
    .navbar-vertical.navbar-expand-xs > [class*='container']
    {
        height: 100%; 
        min-height: none;
    }
}
.navbar-vertical.navbar-expand-xs.fixed-left
{
    left: 0;

    border-width: 0 1px 0 0;
}
.navbar-vertical.navbar-expand-xs.fixed-right
{
    right: 0;

    border-width: 0 0 0 1px;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse
{
    display: flex;
    flex-direction: column;

    margin-right: -1.5rem;
    margin-left: -1.5rem;
    padding-right: 1.5rem; 
    padding-left: 1.5rem;

    flex: 1 1;
    align-items: stretch;
}
.navbar-vertical.navbar-expand-xs .navbar-collapse > *
{
    min-width: 100%;
}
.navbar-vertical.navbar-expand-xs .navbar-nav
{
    flex-direction: column;

    margin-right: -1.5rem; 
    margin-left: -1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link
{
    padding: .65rem 1.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link.active:before
{
    top: .25rem;
    right: auto;
    bottom: .25rem;
    left: 0;

    border-bottom: 0; 
    border-left: 2px solid #5e72e4;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link
{
    padding-left: 3.75rem;
}
.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav .nav-link
{
    padding-left: 4.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-brand
{
    display: block;

    padding-top: 1rem;
    padding-bottom: 1rem; 

    text-align: center;
}
.navbar-vertical.navbar-expand-xs .navbar-brand-img
{
    max-height: 2.5rem;
}
.navbar-vertical.navbar-expand-xs .navbar-user
{
    margin-right: -1.5rem;
    margin-left: -1.5rem;
    padding-top: 1rem;
    padding-right: 1.5rem;
    padding-bottom: 0rem;
    padding-left: 1.5rem;

    border-top: 1px solid #e9ecef;
}
.navbar-vertical.navbar-expand-xs .navbar-user .dropup .dropdown-menu
{
    left: 50%;

    transform: translateX(-50%);
}
@media (min-width: 576px)
{
    .navbar-vertical.navbar-expand-sm
    {
        position: fixed;
        top: 0;
        bottom: 0;

        display: block;
        overflow-y: auto; 

        width: 100%;
        max-width: 250px;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-sm > [class*='container']
    {
        flex-direction: column;

        min-height: 100%;
        padding-right: 0; 
        padding-left: 0;

        align-items: stretch;
    }
}
@media all and (min-width: 576px) and (-ms-high-contrast: none), (min-width: 576px) and (-ms-high-contrast: active)
{
    .navbar-vertical.navbar-expand-sm > [class*='container']
    {
        height: 100%; 
        min-height: none;
    }
}
@media (min-width: 576px)
{
    .navbar-vertical.navbar-expand-sm.fixed-left
    {
        left: 0;

        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-sm.fixed-right
    {
        right: 0;

        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-sm .navbar-collapse
    {
        display: flex;
        flex-direction: column;

        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem; 
        padding-left: 1.5rem;

        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-sm .navbar-collapse > *
    {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav
    {
        flex-direction: column;

        margin-right: -1.5rem; 
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link
    {
        padding: .65rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link.active:before
    {
        top: .25rem;
        right: auto;
        bottom: .25rem;
        left: 0;

        border-bottom: 0; 
        border-left: 2px solid #5e72e4;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link
    {
        padding-left: 3.75rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav .nav-link
    {
        padding-left: 4.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-brand
    {
        display: block;

        padding-top: 1rem;
        padding-bottom: 1rem; 

        text-align: center;
    }
    .navbar-vertical.navbar-expand-sm .navbar-brand-img
    {
        max-height: 2.5rem;
    }
    .navbar-vertical.navbar-expand-sm .navbar-user
    {
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-top: 1rem;
        padding-right: 1.5rem;
        padding-bottom: 0rem;
        padding-left: 1.5rem;

        border-top: 1px solid #e9ecef;
    }
    .navbar-vertical.navbar-expand-sm .navbar-user .dropup .dropdown-menu
    {
        left: 50%;

        transform: translateX(-50%);
    }
}
@media (min-width: 768px)
{
    .navbar-vertical.navbar-expand-md
    {
        position: fixed;
        top: 0;
        bottom: 0;

        display: block;
        overflow-y: auto; 

        width: 100%;
        max-width: 250px;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-md > [class*='container']
    {
        flex-direction: column;

        min-height: 100%;
        padding-right: 0; 
        padding-left: 0;

        align-items: stretch;
    }
}
@media all and (min-width: 768px) and (-ms-high-contrast: none), (min-width: 768px) and (-ms-high-contrast: active)
{
    .navbar-vertical.navbar-expand-md > [class*='container']
    {
        height: 100%; 
        min-height: none;
    }
}
@media (min-width: 768px)
{
    .navbar-vertical.navbar-expand-md.fixed-left
    {
        left: 0;

        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-md.fixed-right
    {
        right: 0;

        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-md .navbar-collapse
    {
        display: flex;
        flex-direction: column;

        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem; 
        padding-left: 1.5rem;

        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-md .navbar-collapse > *
    {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav
    {
        flex-direction: column;

        margin-right: -1.5rem; 
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav-link
    {
        padding: .65rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav-link.active:before
    {
        top: .25rem;
        right: auto;
        bottom: .25rem;
        left: 0;

        border-bottom: 0; 
        border-left: 2px solid #5e72e4;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link
    {
        padding-left: 3.75rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav .nav-link
    {
        padding-left: 4.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-brand
    {
        display: block;

        padding-top: 1rem;
        padding-bottom: 1rem; 

        text-align: center;
    }
    .navbar-vertical.navbar-expand-md .navbar-brand-img
    {
        max-height: 2.5rem;
    }
    .navbar-vertical.navbar-expand-md .navbar-user
    {
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-top: 1rem;
        padding-right: 1.5rem;
        padding-bottom: 0rem;
        padding-left: 1.5rem;

        border-top: 1px solid #e9ecef;
    }
    .navbar-vertical.navbar-expand-md .navbar-user .dropup .dropdown-menu
    {
        left: 50%;

        transform: translateX(-50%);
    }
}
@media (min-width: 992px)
{
    .navbar-vertical.navbar-expand-lg
    {
        position: fixed;
        top: 0;
        bottom: 0;

        display: block;
        overflow-y: auto; 

        width: 100%;
        max-width: 250px;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-lg > [class*='container']
    {
        flex-direction: column;

        min-height: 100%;
        padding-right: 0; 
        padding-left: 0;

        align-items: stretch;
    }
}
@media all and (min-width: 992px) and (-ms-high-contrast: none), (min-width: 992px) and (-ms-high-contrast: active)
{
    .navbar-vertical.navbar-expand-lg > [class*='container']
    {
        height: 100%; 
        min-height: none;
    }
}
@media (min-width: 992px)
{
    .navbar-vertical.navbar-expand-lg.fixed-left
    {
        left: 0;

        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-lg.fixed-right
    {
        right: 0;

        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-lg .navbar-collapse
    {
        display: flex;
        flex-direction: column;

        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem; 
        padding-left: 1.5rem;

        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-lg .navbar-collapse > *
    {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav
    {
        flex-direction: column;

        margin-right: -1.5rem; 
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link
    {
        padding: .65rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link.active:before
    {
        top: .25rem;
        right: auto;
        bottom: .25rem;
        left: 0;

        border-bottom: 0; 
        border-left: 2px solid #5e72e4;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link
    {
        padding-left: 3.75rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav .nav-link
    {
        padding-left: 4.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-brand
    {
        display: block;

        padding-top: 1rem;
        padding-bottom: 1rem; 

        text-align: center;
    }
    .navbar-vertical.navbar-expand-lg .navbar-brand-img
    {
        max-height: 2.5rem;
    }
    .navbar-vertical.navbar-expand-lg .navbar-user
    {
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-top: 1rem;
        padding-right: 1.5rem;
        padding-bottom: 0rem;
        padding-left: 1.5rem;

        border-top: 1px solid #e9ecef;
    }
    .navbar-vertical.navbar-expand-lg .navbar-user .dropup .dropdown-menu
    {
        left: 50%;

        transform: translateX(-50%);
    }
}
@media (min-width: 1200px)
{
    .navbar-vertical.navbar-expand-xl
    {
        position: fixed;
        top: 0;
        bottom: 0;

        display: block;
        overflow-y: auto; 

        width: 100%;
        max-width: 250px;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }
    .navbar-vertical.navbar-expand-xl > [class*='container']
    {
        flex-direction: column;

        min-height: 100%;
        padding-right: 0; 
        padding-left: 0;

        align-items: stretch;
    }
}
@media all and (min-width: 1200px) and (-ms-high-contrast: none), (min-width: 1200px) and (-ms-high-contrast: active)
{
    .navbar-vertical.navbar-expand-xl > [class*='container']
    {
        height: 100%; 
        min-height: none;
    }
}
@media (min-width: 1200px)
{
    .navbar-vertical.navbar-expand-xl.fixed-left
    {
        left: 0;

        border-width: 0 1px 0 0;
    }
    .navbar-vertical.navbar-expand-xl.fixed-right
    {
        right: 0;

        border-width: 0 0 0 1px;
    }
    .navbar-vertical.navbar-expand-xl .navbar-collapse
    {
        display: flex;
        flex-direction: column;

        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-right: 1.5rem; 
        padding-left: 1.5rem;

        flex: 1 1;
        align-items: stretch;
    }
    .navbar-vertical.navbar-expand-xl .navbar-collapse > *
    {
        min-width: 100%;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav
    {
        flex-direction: column;

        margin-right: -1.5rem; 
        margin-left: -1.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link
    {
        padding: .65rem 1.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link.active:before
    {
        top: .25rem;
        right: auto;
        bottom: .25rem;
        left: 0;

        border-bottom: 0; 
        border-left: 2px solid #5e72e4;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link
    {
        padding-left: 3.75rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav .nav-link
    {
        padding-left: 4.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-brand
    {
        display: block;

        padding-top: 1rem;
        padding-bottom: 1rem; 

        text-align: center;
    }
    .navbar-vertical.navbar-expand-xl .navbar-brand-img
    {
        max-height: 2.5rem;
    }
    .navbar-vertical.navbar-expand-xl .navbar-user
    {
        margin-right: -1.5rem;
        margin-left: -1.5rem;
        padding-top: 1rem;
        padding-right: 1.5rem;
        padding-bottom: 0rem;
        padding-left: 1.5rem;

        border-top: 1px solid #e9ecef;
    }
    .navbar-vertical.navbar-expand-xl .navbar-user .dropup .dropdown-menu
    {
        left: 50%;

        transform: translateX(-50%);
    }
}

.navbar-search .input-group
{
    border: 2px solid;
    border-radius: 2rem;
    background-color: transparent;
}
.navbar-search .input-group .input-group-text
{
    padding-left: 1rem; 

    background-color: transparent;
}

.navbar-search .form-control
{
    width: 270px;

    background-color: transparent;
}

.navbar-search-dark .input-group
{
    border-color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .input-group-text
{
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control
{
    color: rgba(255, 255, 255, .9);
}
.navbar-search-dark .form-control:-ms-input-placeholder
{
    color: rgba(255, 255, 255, .6);
}
.navbar-search-dark .form-control::-ms-input-placeholder
{
    color: rgba(255, 255, 255, .6);
}
.navbar-search-dark .form-control::placeholder
{
    color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .focused .input-group
{
    border-color: rgba(255, 255, 255, .9);
}

.navbar-search-light .input-group
{
    border-color: rgba(0, 0, 0, .6);
}

.navbar-search-light .input-group-text
{
    color: rgba(0, 0, 0, .6);
}

.navbar-search-light .form-control
{
    color: rgba(0, 0, 0, .9);
}
.navbar-search-light .form-control:-ms-input-placeholder
{
    color: rgba(0, 0, 0, .6);
}
.navbar-search-light .form-control::-ms-input-placeholder
{
    color: rgba(0, 0, 0, .6);
}
.navbar-search-light .form-control::placeholder
{
    color: rgba(0, 0, 0, .6);
}

.navbar-search-light .focused .input-group
{
    border-color: rgba(0, 0, 0, .9);
}

@media (min-width: 768px)
{
    .navbar .dropdown-menu
    {
        margin: 0; 

        pointer-events: none;

        opacity: 0;
    }
    .navbar .dropdown-menu-arrow:before
    {
        position: absolute;
        z-index: -5;
        bottom: 100%;
        left: 20px;

        display: block;

        width: 12px;
        height: 12px;

        content: '';
        transform: rotate(-45deg) translateY(12px);

        border-radius: 2px; 
        background: #fff;
        box-shadow: none;
    }
    .navbar .dropdown-menu-right:before
    {
        right: 20px;
        left: auto;
    }
    .navbar:not(.navbar-nav-hover) .dropdown-menu.show
    {
        animation: show-navbar-dropdown .25s ease forwards; 
        pointer-events: auto;

        opacity: 1;
    }
    .navbar:not(.navbar-nav-hover) .dropdown-menu.close
    {
        display: block;

        animation: hide-navbar-dropdown .15s ease backwards;
    }
    .navbar.navbar-nav-hover .dropdown-menu
    {
        display: block;

        transition: visibility .25s, opacity .25s, transform .25s; 
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        pointer-events: none;

        opacity: 0;
    }
    .navbar.navbar-nav-hover .nav-item.dropdown:hover > .dropdown-menu
    {
        display: block;
        visibility: visible;

        transform: translate(0, 0);
        animation: none; 
        pointer-events: auto;

        opacity: 1;
    }
    .navbar .dropdown-menu-inner
    {
        position: relative;

        padding: 1rem;
    }
    @keyframes show-navbar-dropdown
    {
        0%
        {
            transition: visibility .25s, opacity .25s, transform .25s; 
            transform: translate(0, 10px) perspective(200px) rotateX(-2deg);

            opacity: 0;
        }
        100%
        {
            transform: translate(0, 0);

            opacity: 1;
        }
    }
    @keyframes hide-navbar-dropdown
    {
        from
        {
            opacity: 1;
        }
        to
        {
            transform: translate(0, 10px); 

            opacity: 0;
        }
    }
}

.navbar-collapse-header
{
    display: none;
}

@media (max-width: 767.98px)
{
    .navbar-nav .nav-link
    {
        padding: .625rem 0;

        color: #172b4d !important;
    }
    .navbar-nav .dropdown-menu
    {
        min-width: auto; 

        box-shadow: none;
    }
    .navbar-nav .dropdown-menu .media svg
    {
        width: 30px;
    }
    .navbar-collapse
    {
        position: absolute;
        z-index: 1050;
        top: 0;
        right: 0;
        left: 0;

        overflow-y: auto;

        width: calc(100% - 1.4rem);
        height: auto !important;
        margin: .7rem;

        opacity: 0;
    }
    .navbar-collapse .navbar-toggler
    {
        position: relative;

        display: inline-block;

        width: 20px;
        height: 20px;
        padding: 0; 

        cursor: pointer;
    }
    .navbar-collapse .navbar-toggler span
    {
        position: absolute;

        display: block;

        width: 100%;
        height: 2px;

        opacity: 1;
        border-radius: 2px;
        background: #283448;
    }
    .navbar-collapse .navbar-toggler :nth-child(1)
    {
        transform: rotate(135deg);
    }
    .navbar-collapse .navbar-toggler :nth-child(2)
    {
        transform: rotate(-135deg);
    }
    .navbar-collapse .navbar-collapse-header
    {
        display: block;

        margin-bottom: 1rem;
        padding-bottom: 1rem;

        border-bottom: 1px solid rgba(0, 0, 0, .1);
    }
    .navbar-collapse .collapse-brand img
    {
        height: 36px;
    }
    .navbar-collapse .collapse-close
    {
        text-align: right;
    }
    .navbar-collapse.collapsing,
    .navbar-collapse.show
    {
        padding: 1.5rem;

        animation: show-navbar-collapse .2s ease forwards; 

        border-radius: .375rem;
        background: #fff;
        box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
    }
    .navbar-collapse.collapsing-out
    {
        animation: hide-navbar-collapse .2s ease forwards;
    }
}

@keyframes show-navbar-collapse
{
    0%
    {
        transform: scale(.95);
        transform-origin: 100% 0; 

        opacity: 0;
    }
    100%
    {
        transform: scale(1); 

        opacity: 1;
    }
}

@keyframes hide-navbar-collapse
{
    from
    {
        transform: scale(1);
        transform-origin: 100% 0; 

        opacity: 1;
    }
    to
    {
        transform: scale(.95); 

        opacity: 0;
    }
}

.page-item.active .page-link
{
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.page-item .page-link,
.page-item span
{
    font-size: .875rem; 

    display: flex;

    width: 36px;
    height: 36px;
    margin: 0 3px;
    padding: 0;

    border-radius: 50% !important;

    align-items: center;
    justify-content: center;
}

.pagination-lg .page-item .page-link,
.pagination-lg .page-item span
{
    line-height: 46px; 

    width: 46px;
    height: 46px;
}

.pagination-sm .page-item .page-link,
.pagination-sm .page-item span
{
    line-height: 30px; 

    width: 30px;
    height: 30px;
}

.popover
{
    border: 0;
}

.popover-header
{
    font-weight: 600;
}

.popover-primary
{
    background-color: #5e72e4;
}
.popover-primary .popover-header
{
    color: #fff; 
    background-color: #5e72e4;
}
.popover-primary .popover-body
{
    color: #fff;
}
.popover-primary .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-primary.bs-popover-top .arrow::after,
.popover-primary.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #5e72e4;
}
.popover-primary.bs-popover-right .arrow::after,
.popover-primary.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #5e72e4;
}
.popover-primary.bs-popover-bottom .arrow::after,
.popover-primary.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #5e72e4;
}
.popover-primary.bs-popover-left .arrow::after,
.popover-primary.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #5e72e4;
}

.popover-secondary
{
    background-color: #f7fafc;
}
.popover-secondary .popover-header
{
    color: #212529; 
    background-color: #f7fafc;
}
.popover-secondary .popover-body
{
    color: #212529;
}
.popover-secondary .popover-header
{
    border-color: rgba(33, 37, 41, .2);
}
.popover-secondary.bs-popover-top .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #f7fafc;
}
.popover-secondary.bs-popover-right .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #f7fafc;
}
.popover-secondary.bs-popover-bottom .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #f7fafc;
}
.popover-secondary.bs-popover-left .arrow::after,
.popover-secondary.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #f7fafc;
}

.popover-success
{
    background-color: #2dce89;
}
.popover-success .popover-header
{
    color: #fff; 
    background-color: #2dce89;
}
.popover-success .popover-body
{
    color: #fff;
}
.popover-success .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-success.bs-popover-top .arrow::after,
.popover-success.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #2dce89;
}
.popover-success.bs-popover-right .arrow::after,
.popover-success.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #2dce89;
}
.popover-success.bs-popover-bottom .arrow::after,
.popover-success.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #2dce89;
}
.popover-success.bs-popover-left .arrow::after,
.popover-success.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #2dce89;
}

.popover-info
{
    background-color: #11cdef;
}
.popover-info .popover-header
{
    color: #fff; 
    background-color: #11cdef;
}
.popover-info .popover-body
{
    color: #fff;
}
.popover-info .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-info.bs-popover-top .arrow::after,
.popover-info.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #11cdef;
}
.popover-info.bs-popover-right .arrow::after,
.popover-info.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #11cdef;
}
.popover-info.bs-popover-bottom .arrow::after,
.popover-info.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #11cdef;
}
.popover-info.bs-popover-left .arrow::after,
.popover-info.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #11cdef;
}

.popover-warning
{
    background-color: #fb6340;
}
.popover-warning .popover-header
{
    color: #fff; 
    background-color: #fb6340;
}
.popover-warning .popover-body
{
    color: #fff;
}
.popover-warning .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-warning.bs-popover-top .arrow::after,
.popover-warning.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #fb6340;
}
.popover-warning.bs-popover-right .arrow::after,
.popover-warning.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #fb6340;
}
.popover-warning.bs-popover-bottom .arrow::after,
.popover-warning.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #fb6340;
}
.popover-warning.bs-popover-left .arrow::after,
.popover-warning.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #fb6340;
}

.popover-danger
{
    background-color: #f5365c;
}
.popover-danger .popover-header
{
    color: #fff; 
    background-color: #f5365c;
}
.popover-danger .popover-body
{
    color: #fff;
}
.popover-danger .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-danger.bs-popover-top .arrow::after,
.popover-danger.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #f5365c;
}
.popover-danger.bs-popover-right .arrow::after,
.popover-danger.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #f5365c;
}
.popover-danger.bs-popover-bottom .arrow::after,
.popover-danger.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #f5365c;
}
.popover-danger.bs-popover-left .arrow::after,
.popover-danger.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #f5365c;
}

.popover-light
{
    background-color: #adb5bd;
}
.popover-light .popover-header
{
    color: #fff; 
    background-color: #adb5bd;
}
.popover-light .popover-body
{
    color: #fff;
}
.popover-light .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-light.bs-popover-top .arrow::after,
.popover-light.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #adb5bd;
}
.popover-light.bs-popover-right .arrow::after,
.popover-light.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #adb5bd;
}
.popover-light.bs-popover-bottom .arrow::after,
.popover-light.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #adb5bd;
}
.popover-light.bs-popover-left .arrow::after,
.popover-light.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #adb5bd;
}

.popover-dark
{
    background-color: #212529;
}
.popover-dark .popover-header
{
    color: #fff; 
    background-color: #212529;
}
.popover-dark .popover-body
{
    color: #fff;
}
.popover-dark .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-dark.bs-popover-top .arrow::after,
.popover-dark.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #212529;
}
.popover-dark.bs-popover-right .arrow::after,
.popover-dark.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #212529;
}
.popover-dark.bs-popover-bottom .arrow::after,
.popover-dark.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #212529;
}
.popover-dark.bs-popover-left .arrow::after,
.popover-dark.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #212529;
}

.popover-default
{
    background-color: #172b4d;
}
.popover-default .popover-header
{
    color: #fff; 
    background-color: #172b4d;
}
.popover-default .popover-body
{
    color: #fff;
}
.popover-default .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-default.bs-popover-top .arrow::after,
.popover-default.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #172b4d;
}
.popover-default.bs-popover-right .arrow::after,
.popover-default.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #172b4d;
}
.popover-default.bs-popover-bottom .arrow::after,
.popover-default.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #172b4d;
}
.popover-default.bs-popover-left .arrow::after,
.popover-default.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #172b4d;
}

.popover-white
{
    background-color: #fff;
}
.popover-white .popover-header
{
    color: #212529; 
    background-color: #fff;
}
.popover-white .popover-body
{
    color: #212529;
}
.popover-white .popover-header
{
    border-color: rgba(33, 37, 41, .2);
}
.popover-white.bs-popover-top .arrow::after,
.popover-white.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #fff;
}
.popover-white.bs-popover-right .arrow::after,
.popover-white.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #fff;
}
.popover-white.bs-popover-bottom .arrow::after,
.popover-white.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #fff;
}
.popover-white.bs-popover-left .arrow::after,
.popover-white.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #fff;
}

.popover-neutral
{
    background-color: #fff;
}
.popover-neutral .popover-header
{
    color: #212529; 
    background-color: #fff;
}
.popover-neutral .popover-body
{
    color: #212529;
}
.popover-neutral .popover-header
{
    border-color: rgba(33, 37, 41, .2);
}
.popover-neutral.bs-popover-top .arrow::after,
.popover-neutral.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: #fff;
}
.popover-neutral.bs-popover-right .arrow::after,
.popover-neutral.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: #fff;
}
.popover-neutral.bs-popover-bottom .arrow::after,
.popover-neutral.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: #fff;
}
.popover-neutral.bs-popover-left .arrow::after,
.popover-neutral.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: #fff;
}

.popover-darker
{
    background-color: black;
}
.popover-darker .popover-header
{
    color: #fff; 
    background-color: black;
}
.popover-darker .popover-body
{
    color: #fff;
}
.popover-darker .popover-header
{
    border-color: rgba(255, 255, 255, .2);
}
.popover-darker.bs-popover-top .arrow::after,
.popover-darker.bs-popover-auto[x-placement^='top'] .arrow::after
{
    border-top-color: black;
}
.popover-darker.bs-popover-right .arrow::after,
.popover-darker.bs-popover-auto[x-placement^='right'] .arrow::after
{
    border-right-color: black;
}
.popover-darker.bs-popover-bottom .arrow::after,
.popover-darker.bs-popover-auto[x-placement^='bottom'] .arrow::after
{
    border-bottom-color: black;
}
.popover-darker.bs-popover-left .arrow::after,
.popover-darker.bs-popover-auto[x-placement^='left'] .arrow::after
{
    border-left-color: black;
}

.progress-wrapper
{
    position: relative;

    padding-top: 1.5rem;
}

.progress
{
    overflow: hidden;

    height: 8px;
    margin-bottom: 1rem;

    border-radius: .25rem;
    background-color: #e9ecef;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress .sr-only
{
    font-size: 13px; 
    line-height: 20px;

    left: 0;

    clip: auto;

    width: auto;
    height: 20px;
    margin: 0 0 0 30px;
}

.progress-heading
{
    font-size: 14px;
    font-weight: 500;

    margin: 0 0 2px;
    padding: 0;
}

.progress-bar
{
    height: auto; 

    border-radius: 0;
    box-shadow: none;
}

.progress-info
{
    display: flex;

    margin-bottom: .5rem;

    align-items: center;
    justify-content: space-between;
}

.progress-label span
{
    font-size: .625rem;
    font-weight: 600;

    display: inline-block;

    padding: .25rem 1rem;

    text-transform: uppercase;

    color: #5e72e4;
    border-radius: 30px; 
    background: rgba(94, 114, 228, .1);
}

.progress-percentage
{
    text-align: right;
}
.progress-percentage span
{
    font-size: .875rem;
    font-weight: 600; 

    display: inline-block;

    color: #8898aa;
}

.separator
{
    position: absolute;
    top: auto;
    right: 0;
    left: 0;

    overflow: hidden;

    width: 100%;
    height: 150px;

    transform: translateZ(0);
    pointer-events: none;
}
.separator svg
{
    position: absolute;

    pointer-events: none;
}

.separator-top
{
    top: 0;
    bottom: auto;
}
.separator-top svg
{
    top: 0;
}

.separator-bottom
{
    top: auto;
    bottom: 0;
}
.separator-bottom svg
{
    bottom: 0;
}

.separator-inverse
{
    transform: rotate(180deg);
}

.separator-skew
{
    height: 60px;
}
@media (min-width: 1200px)
{
    .separator-skew
    {
        height: 70px;
    }
}

.table thead th
{
    font-size: .65rem;

    padding-top: .75rem;
    padding-bottom: .75rem;

    letter-spacing: 1px;
    text-transform: uppercase;

    border-bottom: 1px solid #e9ecef;
}

.table th
{
    font-weight: 600;
}

.table td .progress
{
    width: 120px;
    height: 3px;
    margin: 0;
}

.table td,
.table th
{
    font-size: .8125rem;

    white-space: nowrap;
}

.table.align-items-center td,
.table.align-items-center th
{
    vertical-align: middle;
}

.table .thead-dark th
{
    color: #4d7bca; 
    background-color: #1c345d;
}

.table .thead-light th
{
    color: #8898aa; 
    background-color: #f6f9fc;
}

.table-hover tr
{
    transition: all .15s ease;
}
@media screen and (prefers-reduced-motion: reduce)
{
    .table-hover tr
    {
        transition: none;
    }
}

.table-flush td,
.table-flush th
{
    border-right: 0; 
    border-left: 0;
}

.table-flush tbody tr:first-child td,
.table-flush tbody tr:first-child th
{
    border-top: 0;
}

.table-flush tbody tr:last-child td,
.table-flush tbody tr:last-child th
{
    border-bottom: 0;
}

.card .table
{
    margin-bottom: 0;
}
.card .table td,
.card .table th
{
    padding-right: 1.5rem; 
    padding-left: 1.5rem;
}

p
{
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
}

.lead
{
    font-size: 1.25rem;
    font-weight: 300;
    line-height: 1.7;

    margin-top: 1.5rem;
}
.lead + .btn-wrapper
{
    margin-top: 3rem;
}

.description
{
    font-size: .875rem;
}

.heading
{
    font-size: .95rem;
    font-weight: 600; 

    letter-spacing: .025em;
    text-transform: uppercase;
}

.heading-small
{
    font-size: .75rem;

    padding-top: .25rem;
    padding-bottom: .25rem;

    letter-spacing: .04em; 
    text-transform: uppercase;
}

.heading-title
{
    font-size: 1.375rem;
    font-weight: 600;

    letter-spacing: .025em;
    text-transform: uppercase;
}

.heading-section
{
    font-size: 1.375rem;
    font-weight: 600;

    letter-spacing: .025em;
    text-transform: uppercase;
}
.heading-section img
{
    display: block;

    width: 72px;
    height: 72px;
    margin-bottom: 1.5rem;
}
.heading-section.text-center img
{
    margin-right: auto; 
    margin-left: auto;
}

.display-1 span,
.display-2 span,
.display-3 span,
.display-4 span
{
    font-weight: 300; 

    display: block;
}

article h4:not(:first-child),
article h5:not(:first-child)
{
    margin-top: 3rem;
}

article h4,
article h5
{
    margin-bottom: 1.5rem;
}

article figure
{
    margin: 3rem 0;
}

article h5 + figure
{
    margin-top: 0;
}

.datepicker
{
    border-radius: .375rem;

    direction: ltr;
}
.datepicker-inline
{
    width: 220px;
}
.datepicker-rtl
{
    direction: rtl;
}
.datepicker-rtl.dropdown-menu
{
    left: auto;
}
.datepicker-rtl table tr td span
{
    float: right;
}
.datepicker-dropdown
{
    top: 0;
    left: 0;

    padding: 20px 22px;

    box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
}
.datepicker-dropdown.datepicker-orient-left:before
{
    left: 6px;
}
.datepicker-dropdown.datepicker-orient-left:after
{
    left: 7px;
}
.datepicker-dropdown.datepicker-orient-right:before
{
    right: 6px;
}
.datepicker-dropdown.datepicker-orient-right:after
{
    right: 7px;
}
.datepicker-dropdown.datepicker-orient-bottom:before
{
    top: -7px;
}
.datepicker-dropdown.datepicker-orient-bottom:after
{
    top: -6px;
}
.datepicker-dropdown.datepicker-orient-top:before
{
    bottom: -7px;

    border-top: 7px solid white; 
    border-bottom: 0;
}
.datepicker-dropdown.datepicker-orient-top:after
{
    bottom: -6px;

    border-top: 6px solid #fff; 
    border-bottom: 0;
}
.datepicker table
{
    margin: 0;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none; 

    -webkit-touch-callout: none;
}
.datepicker table tr td
{
    border-radius: 50%;
}
.datepicker table tr th
{
    font-weight: 500; 

    border-radius: .375rem;
}
.datepicker table tr td,
.datepicker table tr th
{
    font-size: .875rem; 

    width: 36px;
    height: 36px;

    transition: all .15s ease;
    text-align: center;

    border: none;
}
.table-striped .datepicker table tr td,
.table-striped .datepicker table tr th
{
    background-color: transparent;
}
.datepicker table tr td.old,
.datepicker table tr td.new
{
    color: #adb5bd;
}
.datepicker table tr td.day:hover,
.datepicker table tr td.focused
{
    cursor: pointer; 

    background: white;
}
.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover
{
    cursor: default; 

    color: #dee2e6;
    background: none;
}
.datepicker table tr td.highlighted
{
    border-radius: 0;
}
.datepicker table tr td.highlighted.focused
{
    background: #5e72e4;
}
.datepicker table tr td.highlighted.disabled,
.datepicker table tr td.highlighted.disabled:active
{
    color: #ced4da; 
    background: #5e72e4;
}
.datepicker table tr td.today
{
    background: white;
}
.datepicker table tr td.today.focused
{
    background: white;
}
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:active
{
    color: #8898aa; 
    background: white;
}
.datepicker table tr td.range
{
    color: #fff;
    border-radius: 0; 
    background: #5e72e4;
}
.datepicker table tr td.range.focused
{
    background: #3b53de;
}
.datepicker table tr td.range.disabled,
.datepicker table tr td.range.disabled:active,
.datepicker table tr td.range.day.disabled:hover
{
    color: #8a98eb; 
    background: #324cdd;
}
.datepicker table tr td.range.highlighted.focused
{
    background: #cbd3da;
}
.datepicker table tr td.range.highlighted.disabled,
.datepicker table tr td.range.highlighted.disabled:active
{
    color: #dee2e6; 
    background: #e9ecef;
}
.datepicker table tr td.range.today.disabled,
.datepicker table tr td.range.today.disabled:active
{
    color: #fff; 
    background: #5e72e4;
}
.datepicker table tr td.day.range-start
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.datepicker table tr td.day.range-end
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.datepicker table tr td.day.range-start.range-end
{
    border-radius: 50%;
}
.datepicker table tr td.selected,
.datepicker table tr td.selected.highlighted,
.datepicker table tr td.selected:hover,
.datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.day.range:hover
{
    color: #fff; 
    background: #5e72e4;
}
.datepicker table tr td.active,
.datepicker table tr td.active.highlighted,
.datepicker table tr td.active:hover,
.datepicker table tr td.active.highlighted:hover
{
    color: #fff;
    background: #5e72e4;
    box-shadow: none;
}
.datepicker table tr td span
{
    line-height: 54px;

    display: block;
    float: left;

    width: 23%;
    height: 54px;
    margin: 1%;

    cursor: pointer;

    border-radius: 4px;
}
.datepicker table tr td span:hover,
.datepicker table tr td span.focused
{
    background: #e9ecef;
}
.datepicker table tr td span.disabled,
.datepicker table tr td span.disabled:hover
{
    cursor: default; 

    color: #dee2e6;
    background: none;
}
.datepicker table tr td span.active,
.datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover
{
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .25);
}
.datepicker table tr td span.old,
.datepicker table tr td span.new
{
    color: #8898aa;
}
.datepicker .datepicker-switch
{
    width: 145px;
}
.datepicker .datepicker-switch,
.datepicker .prev,
.datepicker .next,
.datepicker tfoot tr th
{
    cursor: pointer;
}
.datepicker .datepicker-switch:hover,
.datepicker .prev:hover,
.datepicker .next:hover,
.datepicker tfoot tr th:hover
{
    background: #e9ecef;
}
.datepicker .prev.disabled,
.datepicker .next.disabled
{
    visibility: hidden;
}
.datepicker .cw
{
    font-size: 10px;

    width: 12px;
    padding: 0 2px 0 5px;

    vertical-align: middle;
}

.noUi-target,
.noUi-target *
{
    box-sizing: border-box; 

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    touch-action: none;
}

.noUi-target
{
    position: relative;

    direction: ltr;
}

.noUi-base,
.noUi-connects
{
    position: relative;
    z-index: 1; 

    width: 100%;
    height: 100%;
}

.noUi-connects
{
    z-index: 0; 

    overflow: hidden;
}

.noUi-connect,
.noUi-origin
{
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    transform-origin: 0 0; 

    will-change: transform;
}

html:not([dir='rtl']) .noUi-horizontal .noUi-origin
{
    right: 0; 
    left: auto;
}

.noUi-vertical .noUi-origin
{
    width: 0;
}

.noUi-horizontal .noUi-origin
{
    height: 0;
}

.noUi-handle
{
    position: absolute;
}

.noUi-state-tap .noUi-connect,
.noUi-state-tap .noUi-origin
{
    transition: transform .3s;
}

.noUi-state-drag *
{
    cursor: inherit !important;
}

.noUi-horizontal
{
    height: 5px;
}

.noUi-horizontal .noUi-handle
{
    top: -6px; 
    left: -17px;

    width: 34px;
    height: 28px;
}

.noUi-vertical
{
    width: 5px;
}

.noUi-vertical .noUi-handle
{
    top: -17px; 
    left: -6px;

    width: 28px;
    height: 34px;
}

html:not([dir='rtl']) .noUi-horizontal .noUi-handle
{
    right: -17px;
    left: auto;
}

.noUi-connects
{
    border-radius: 3px;
}

.noUi-connect
{
    background: #5e72e4;
}

.noUi-draggable
{
    cursor: ew-resize;
}

.noUi-vertical .noUi-draggable
{
    cursor: ns-resize;
}

.noUi-handle
{
    cursor: default;

    border: 1px solid #d9d9d9;
    border-radius: 3px;
    outline: none; 
    background: #fff;
    box-shadow: inset 0 0 1px #fff, inset 0 1px 7px #ebebeb, 0 3px 6px -3px #bbb;
}

.noUi-active
{
    outline: none;
}

/* Disabled state;
 */
[disabled] .noUi-connect
{
    background: #b8b8b8;
}

[disabled].noUi-target,
[disabled].noUi-handle,
[disabled] .noUi-handle
{
    cursor: not-allowed;
}

/* Base;
 *
 */
.noUi-pips,
.noUi-pips *
{
    box-sizing: border-box;
}

.noUi-pips
{
    position: absolute;

    color: #999;
}

/* Values;
 *
 */
.noUi-value
{
    position: absolute;

    text-align: center; 
    white-space: nowrap;
}

.noUi-value-sub
{
    font-size: 10px; 

    color: #ccc;
}

/* Markings;
 *
 */
.noUi-marker
{
    position: absolute;

    background: #ccc;
}

.noUi-marker-sub
{
    background: #aaa;
}

.noUi-marker-large
{
    background: #aaa;
}

/* Horizontal layout;
 *
 */
.noUi-pips-horizontal
{
    top: 100%;
    left: 0;

    width: 100%; 
    height: 80px;
    padding: 10px 0;
}

.noUi-value-horizontal
{
    transform: translate(-50%, 50%);
}

.noUi-rtl .noUi-value-horizontal
{
    transform: translate(50%, 50%);
}

.noUi-marker-horizontal.noUi-marker
{
    width: 2px;
    height: 5px; 
    margin-left: -1px;
}

.noUi-marker-horizontal.noUi-marker-sub
{
    height: 10px;
}

.noUi-marker-horizontal.noUi-marker-large
{
    height: 15px;
}

/* Vertical layout;
 *
 */
.noUi-pips-vertical
{
    top: 0;
    left: 100%; 

    height: 100%;
    padding: 0 10px;
}

.noUi-value-vertical
{
    padding-left: 25px; 

    transform: translate(0, -50%, 0);
}

.noUi-rtl .noUi-value-vertical
{
    transform: translate(0, 50%);
}

.noUi-marker-vertical.noUi-marker
{
    width: 5px;
    height: 2px;
    margin-top: -1px;
}

.noUi-marker-vertical.noUi-marker-sub
{
    width: 10px;
}

.noUi-marker-vertical.noUi-marker-large
{
    width: 15px;
}

.noUi-tooltip
{
    position: absolute;

    display: block;

    padding: 5px;

    text-align: center;
    white-space: nowrap; 

    color: #000;
    border: 1px solid #d9d9d9;
    border-radius: 3px;
    background: #fff;
}

.noUi-horizontal .noUi-tooltip
{
    bottom: 120%; 
    left: 50%;

    transform: translate(-50%, 0);
}

.noUi-vertical .noUi-tooltip
{
    top: 50%;
    right: 120%; 

    transform: translate(0, -50%);
}

.noUi-target
{
    margin: 15px 0;

    cursor: pointer; 

    border: 0;
    border-radius: 5px;
    background: #eceeef;
    box-shadow: inset 0 1px 2px rgba(90, 97, 105, .1);
}

.noUi-horizontal
{
    height: 5px;
}

html:not([dir='rtl']) .noUi-horizontal .noUi-handle
{
    right: -10px;
}

.noUi-vertical
{
    width: 5px;
}

.noUi-connect
{
    background: #5e72e4;
    box-shadow: none;
}

.noUi-horizontal .noUi-handle,
.noUi-vertical .noUi-handle
{
    top: -5px;

    width: 15px;
    height: 15px;

    cursor: pointer;
    transition: box-shadow .15s, transform .15s; 

    border: 0;
    border-radius: 100%;
    background-color: #5e72e4;
    box-shadow: none;
}

.noUi-horizontal .noUi-handle.noUi-active,
.noUi-vertical .noUi-handle.noUi-active
{
    box-shadow: 0 0 0 2px #5e72e4;
}

.input-slider--cyan .noUi-connect
{
    background: #2bffc6;
}

/* Disabled state */
[disabled] .noUi-connect,
[disabled].noUi-connect
{
    background: #b2b2b2;
}

[disabled] .noUi-handle,
[disabled].noUi-origin
{
    cursor: not-allowed;
}

/* Range slider value labels */
.range-slider-value
{
    font-size: .75rem;
    font-weight: 500;

    padding: .4em .8em .3em .85em;

    color: #fff;
    border-radius: 10px;
    background-color: rgba(33, 37, 41, .7);
}

.range-slider-wrapper .upper-info
{
    font-weight: 400;

    margin-bottom: 5px;
}

.input-slider-value-output
{
    font-size: 11px;

    position: relative;
    top: 12px;

    padding: 4px 8px;

    color: #fff;
    border-radius: 2px; 
    background: #333;
}

.input-slider-value-output:after
{
    position: absolute;
    bottom: 100%;
    left: 10px;

    width: 0;
    height: 0;
    margin-left: -4px; 

    content: ' ';
    pointer-events: none;

    border: solid transparent;
    border-width: 4px;
    border-color: rgba(136, 183, 213, 0);
    border-bottom-color: #333;
}

.input-slider-value-output.left:after
{
    right: auto; 
    left: 10px;
}

.input-slider-value-output.right:after
{
    right: 10px;
    left: auto;
}

.scrollbar-inner
{
    height: 100%;
}
.scrollbar-inner:not(:hover) .scroll-element
{
    opacity: 0;
}
.scrollbar-inner .scroll-element
{
    margin-right: 2px; 

    transition: opacity 300ms;
}
.scrollbar-inner .scroll-element .scroll-bar,
.scrollbar-inner .scroll-element .scroll-element_track
{
    transition: background-color 300ms;
}
.scrollbar-inner .scroll-element .scroll-element_track
{
    background-color: transparent;
}
.scrollbar-inner .scroll-element.scroll-y
{
    right: 0; 

    width: 3px;
}
.scrollbar-inner .scroll-element.scroll-x
{
    bottom: 0; 

    height: 3px;
}
</style>

<script>

const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});



/*!
 * jQuery JavaScript Library v3.5.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2020-05-04T22:49Z
 */
( function( global, factory ) {

"use strict";

if ( typeof module === "object" && typeof module.exports === "object" ) {

    // For CommonJS and CommonJS-like environments where a proper `window`
    // is present, execute the factory and get jQuery.
    // For environments that do not have a `window` with a `document`
    // (such as Node.js), expose a factory as module.exports.
    // This accentuates the need for the creation of a real `window`.
    // e.g. var jQuery = require("jquery")(window);
    // See ticket #14549 for more info.
    module.exports = global.document ?
        factory( global, true ) :
        function( w ) {
            if ( !w.document ) {
                throw new Error( "jQuery requires a window with a document" );
            }
            return factory( w );
        };
} else {
    factory( global );
}

// Pass this if window is not defined yet
} )( typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
"use strict";

var arr = [];

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var flat = arr.flat ? function( array ) {
return arr.flat.call( array );
} : function( array ) {
return arr.concat.apply( [], array );
};


var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

  // Support: Chrome <=57, Firefox <=52
  // In some browsers, typeof returns "function" for HTML <object> elements
  // (i.e., `typeof document.createElement( "object" ) === "function"`).
  // We don't want to classify *any* DOM node as a function.
  return typeof obj === "function" && typeof obj.nodeType !== "number";
};


var isWindow = function isWindow( obj ) {
    return obj != null && obj === obj.window;
};


var document = window.document;



var preservedScriptAttributes = {
    type: true,
    src: true,
    nonce: true,
    noModule: true
};

function DOMEval( code, node, doc ) {
    doc = doc || document;

    var i, val,
        script = doc.createElement( "script" );

    script.text = code;
    if ( node ) {
        for ( i in preservedScriptAttributes ) {

            // Support: Firefox 64+, Edge 18+
            // Some browsers don't support the "nonce" property on scripts.
            // On the other hand, just using `getAttribute` is not enough as
            // the `nonce` attribute is reset to an empty string whenever it
            // becomes browsing-context connected.
            // See https://github.com/whatwg/html/issues/2369
            // See https://html.spec.whatwg.org/#nonce-attributes
            // The `node.getAttribute` check was added for the sake of
            // `jQuery.globalEval` so that it can fake a nonce-containing node
            // via an object.
            val = node[ i ] || node.getAttribute && node.getAttribute( i );
            if ( val ) {
                script.setAttribute( i, val );
            }
        }
    }
    doc.head.appendChild( script ).parentNode.removeChild( script );
}


function toType( obj ) {
if ( obj == null ) {
    return obj + "";
}

// Support: Android <=2.3 only (functionish RegExp)
return typeof obj === "object" || typeof obj === "function" ?
    class2type[ toString.call( obj ) ] || "object" :
    typeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
version = "3.5.1",

// Define a local copy of jQuery
jQuery = function( selector, context ) {

    // The jQuery object is actually just the init constructor 'enhanced'
    // Need init if jQuery is called (just allow error to be thrown if not included)
    return new jQuery.fn.init( selector, context );
};

jQuery.fn = jQuery.prototype = {

// The current version of jQuery being used
jquery: version,

constructor: jQuery,

// The default length of a jQuery object is 0
length: 0,

toArray: function() {
    return slice.call( this );
},

// Get the Nth element in the matched element set OR
// Get the whole matched element set as a clean array
get: function( num ) {

    // Return all the elements in a clean array
    if ( num == null ) {
        return slice.call( this );
    }

    // Return just the one element from the set
    return num < 0 ? this[ num + this.length ] : this[ num ];
},

// Take an array of elements and push it onto the stack
// (returning the new matched element set)
pushStack: function( elems ) {

    // Build a new jQuery matched element set
    var ret = jQuery.merge( this.constructor(), elems );

    // Add the old object onto the stack (as a reference)
    ret.prevObject = this;

    // Return the newly-formed element set
    return ret;
},

// Execute a callback for every element in the matched set.
each: function( callback ) {
    return jQuery.each( this, callback );
},

map: function( callback ) {
    return this.pushStack( jQuery.map( this, function( elem, i ) {
        return callback.call( elem, i, elem );
    } ) );
},

slice: function() {
    return this.pushStack( slice.apply( this, arguments ) );
},

first: function() {
    return this.eq( 0 );
},

last: function() {
    return this.eq( -1 );
},

even: function() {
    return this.pushStack( jQuery.grep( this, function( _elem, i ) {
        return ( i + 1 ) % 2;
    } ) );
},

odd: function() {
    return this.pushStack( jQuery.grep( this, function( _elem, i ) {
        return i % 2;
    } ) );
},

eq: function( i ) {
    var len = this.length,
        j = +i + ( i < 0 ? len : 0 );
    return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
},

end: function() {
    return this.prevObject || this.constructor();
},

// For internal use only.
// Behaves like an Array's method, not like a jQuery method.
push: push,
sort: arr.sort,
splice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
var options, name, src, copy, copyIsArray, clone,
    target = arguments[ 0 ] || {},
    i = 1,
    length = arguments.length,
    deep = false;

// Handle a deep copy situation
if ( typeof target === "boolean" ) {
    deep = target;

    // Skip the boolean and the target
    target = arguments[ i ] || {};
    i++;
}

// Handle case when target is a string or something (possible in deep copy)
if ( typeof target !== "object" && !isFunction( target ) ) {
    target = {};
}

// Extend jQuery itself if only one argument is passed
if ( i === length ) {
    target = this;
    i--;
}

for ( ; i < length; i++ ) {

    // Only deal with non-null/undefined values
    if ( ( options = arguments[ i ] ) != null ) {

        // Extend the base object
        for ( name in options ) {
            copy = options[ name ];

            // Prevent Object.prototype pollution
            // Prevent never-ending loop
            if ( name === "__proto__" || target === copy ) {
                continue;
            }

            // Recurse if we're merging plain objects or arrays
            if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
                ( copyIsArray = Array.isArray( copy ) ) ) ) {
                src = target[ name ];

                // Ensure proper type for the source value
                if ( copyIsArray && !Array.isArray( src ) ) {
                    clone = [];
                } else if ( !copyIsArray && !jQuery.isPlainObject( src ) ) {
                    clone = {};
                } else {
                    clone = src;
                }
                copyIsArray = false;

                // Never move original objects, clone them
                target[ name ] = jQuery.extend( deep, clone, copy );

            // Don't bring in undefined values
            } else if ( copy !== undefined ) {
                target[ name ] = copy;
            }
        }
    }
}

// Return the modified object
return target;
};

jQuery.extend( {

// Unique for each copy of jQuery on the page
expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

// Assume jQuery is ready without the ready module
isReady: true,

error: function( msg ) {
    throw new Error( msg );
},

noop: function() {},

isPlainObject: function( obj ) {
    var proto, Ctor;

    // Detect obvious negatives
    // Use toString instead of jQuery.type to catch host objects
    if ( !obj || toString.call( obj ) !== "[object Object]" ) {
        return false;
    }

    proto = getProto( obj );

    // Objects with no prototype (e.g., `Object.create( null )`) are plain
    if ( !proto ) {
        return true;
    }

    // Objects with prototype are plain iff they were constructed by a global Object function
    Ctor = hasOwn.call( proto, "constructor" ) && proto.constructor;
    return typeof Ctor === "function" && fnToString.call( Ctor ) === ObjectFunctionString;
},

isEmptyObject: function( obj ) {
    var name;

    for ( name in obj ) {
        return false;
    }
    return true;
},

// Evaluates a script in a provided context; falls back to the global one
// if not specified.
globalEval: function( code, options, doc ) {
    DOMEval( code, { nonce: options && options.nonce }, doc );
},

each: function( obj, callback ) {
    var length, i = 0;

    if ( isArrayLike( obj ) ) {
        length = obj.length;
        for ( ; i < length; i++ ) {
            if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
                break;
            }
        }
    } else {
        for ( i in obj ) {
            if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
                break;
            }
        }
    }

    return obj;
},

// results is for internal usage only
makeArray: function( arr, results ) {
    var ret = results || [];

    if ( arr != null ) {
        if ( isArrayLike( Object( arr ) ) ) {
            jQuery.merge( ret,
                typeof arr === "string" ?
                [ arr ] : arr
            );
        } else {
            push.call( ret, arr );
        }
    }

    return ret;
},

inArray: function( elem, arr, i ) {
    return arr == null ? -1 : indexOf.call( arr, elem, i );
},

// Support: Android <=4.0 only, PhantomJS 1 only
// push.apply(_, arraylike) throws on ancient WebKit
merge: function( first, second ) {
    var len = +second.length,
        j = 0,
        i = first.length;

    for ( ; j < len; j++ ) {
        first[ i++ ] = second[ j ];
    }

    first.length = i;

    return first;
},

grep: function( elems, callback, invert ) {
    var callbackInverse,
        matches = [],
        i = 0,
        length = elems.length,
        callbackExpect = !invert;

    // Go through the array, only saving the items
    // that pass the validator function
    for ( ; i < length; i++ ) {
        callbackInverse = !callback( elems[ i ], i );
        if ( callbackInverse !== callbackExpect ) {
            matches.push( elems[ i ] );
        }
    }

    return matches;
},

// arg is for internal usage only
map: function( elems, callback, arg ) {
    var length, value,
        i = 0,
        ret = [];

    // Go through the array, translating each of the items to their new values
    if ( isArrayLike( elems ) ) {
        length = elems.length;
        for ( ; i < length; i++ ) {
            value = callback( elems[ i ], i, arg );

            if ( value != null ) {
                ret.push( value );
            }
        }

    // Go through every key on the object,
    } else {
        for ( i in elems ) {
            value = callback( elems[ i ], i, arg );

            if ( value != null ) {
                ret.push( value );
            }
        }
    }

    // Flatten any nested arrays
    return flat( ret );
},

// A global GUID counter for objects
guid: 1,

// jQuery.support is not used in Core but other projects attach their
// properties to it so it needs to exist.
support: support
} );

if ( typeof Symbol === "function" ) {
jQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
function( _i, name ) {
class2type[ "[object " + name + "]" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

// Support: real iOS 8.2 only (not reproducible in simulator)
// `in` check used to prevent JIT error (gh-2145)
// hasOwn isn't used here due to false negatives
// regarding Nodelist length in IE
var length = !!obj && "length" in obj && obj.length,
    type = toType( obj );

if ( isFunction( obj ) || isWindow( obj ) ) {
    return false;
}

return type === "array" || length === 0 ||
    typeof length === "number" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
* Sizzle CSS Selector Engine v2.3.5
* https://sizzlejs.com/
*
* Copyright JS Foundation and other contributors
* Released under the MIT license
* https://js.foundation/
*
* Date: 2020-03-14
*/
( function( window ) {
var i,
support,
Expr,
getText,
isXML,
tokenize,
compile,
select,
outermostContext,
sortInput,
hasDuplicate,

// Local document vars
setDocument,
document,
docElem,
documentIsHTML,
rbuggyQSA,
rbuggyMatches,
matches,
contains,

// Instance-specific data
expando = "sizzle" + 1 * new Date(),
preferredDoc = window.document,
dirruns = 0,
done = 0,
classCache = createCache(),
tokenCache = createCache(),
compilerCache = createCache(),
nonnativeSelectorCache = createCache(),
sortOrder = function( a, b ) {
    if ( a === b ) {
        hasDuplicate = true;
    }
    return 0;
},

// Instance methods
hasOwn = ( {} ).hasOwnProperty,
arr = [],
pop = arr.pop,
pushNative = arr.push,
push = arr.push,
slice = arr.slice,

// Use a stripped-down indexOf as it's faster than native
// https://jsperf.com/thor-indexof-vs-for/5
indexOf = function( list, elem ) {
    var i = 0,
        len = list.length;
    for ( ; i < len; i++ ) {
        if ( list[ i ] === elem ) {
            return i;
        }
    }
    return -1;
},

booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|" +
    "ismap|loop|multiple|open|readonly|required|scoped",

// Regular expressions

// http://www.w3.org/TR/css3-selectors/#whitespace
whitespace = "[\\x20\\t\\r\\n\\f]",

// https://www.w3.org/TR/css-syntax-3/#ident-token-diagram
identifier = "(?:\\\\[\\da-fA-F]{1,6}" + whitespace +
    "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",

// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +

    // Operator (capture 2)
    "*([*^$|!~]?=)" + whitespace +

    // "Attribute values must be CSS identifiers [capture 5]
    // or strings [capture 3 or capture 4]"
    "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" +
    whitespace + "*\\]",

pseudos = ":(" + identifier + ")(?:\\((" +

    // To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
    // 1. quoted (capture 3; capture 4 or capture 5)
    "('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +

    // 2. simple (capture 6)
    "((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +

    // 3. anything else (capture 2)
    ".*" +
    ")\\)|)",

// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
rwhitespace = new RegExp( whitespace + "+", "g" ),
rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" +
    whitespace + "+$", "g" ),

rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace +
    "*" ),
rdescend = new RegExp( whitespace + "|>" ),

rpseudo = new RegExp( pseudos ),
ridentifier = new RegExp( "^" + identifier + "$" ),

matchExpr = {
    "ID": new RegExp( "^#(" + identifier + ")" ),
    "CLASS": new RegExp( "^\\.(" + identifier + ")" ),
    "TAG": new RegExp( "^(" + identifier + "|[*])" ),
    "ATTR": new RegExp( "^" + attributes ),
    "PSEUDO": new RegExp( "^" + pseudos ),
    "CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
        whitespace + "*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" +
        whitespace + "*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
    "bool": new RegExp( "^(?:" + booleans + ")$", "i" ),

    // For use in libraries implementing .is()
    // We use this for POS matching in `select`
    "needsContext": new RegExp( "^" + whitespace +
        "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + whitespace +
        "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
},

rhtml = /HTML$/i,
rinputs = /^(?:input|select|textarea|button)$/i,
rheader = /^h\d$/i,

rnative = /^[^{]+\{\s*\[native \w/,

// Easily-parseable/retrievable ID or TAG or CLASS selectors
rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

rsibling = /[+~]/,

// CSS escapes
// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
runescape = new RegExp( "\\\\[\\da-fA-F]{1,6}" + whitespace + "?|\\\\([^\\r\\n\\f])", "g" ),
funescape = function( escape, nonHex ) {
    var high = "0x" + escape.slice( 1 ) - 0x10000;

    return nonHex ?

        // Strip the backslash prefix from a non-hex escape sequence
        nonHex :

        // Replace a hexadecimal escape sequence with the encoded Unicode code point
        // Support: IE <=11+
        // For values outside the Basic Multilingual Plane (BMP), manually construct a
        // surrogate pair
        high < 0 ?
            String.fromCharCode( high + 0x10000 ) :
            String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
},

// CSS string/identifier serialization
// https://drafts.csswg.org/cssom/#common-serializing-idioms
rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
fcssescape = function( ch, asCodePoint ) {
    if ( asCodePoint ) {

        // U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
        if ( ch === "\0" ) {
            return "\uFFFD";
        }

        // Control characters and (dependent upon position) numbers get escaped as code points
        return ch.slice( 0, -1 ) + "\\" +
            ch.charCodeAt( ch.length - 1 ).toString( 16 ) + " ";
    }

    // Other potentially-special ASCII characters get backslash-escaped
    return "\\" + ch;
},

// Used for iframes
// See setDocument()
// Removing the function wrapper causes a "Permission Denied"
// error in IE
unloadHandler = function() {
    setDocument();
},

inDisabledFieldset = addCombinator(
    function( elem ) {
        return elem.disabled === true && elem.nodeName.toLowerCase() === "fieldset";
    },
    { dir: "parentNode", next: "legend" }
);

// Optimize for push.apply( _, NodeList )
try {
push.apply(
    ( arr = slice.call( preferredDoc.childNodes ) ),
    preferredDoc.childNodes
);

// Support: Android<4.0
// Detect silently failing push.apply
// eslint-disable-next-line no-unused-expressions
arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
push = { apply: arr.length ?

    // Leverage slice if possible
    function( target, els ) {
        pushNative.apply( target, slice.call( els ) );
    } :

    // Support: IE<9
    // Otherwise append directly
    function( target, els ) {
        var j = target.length,
            i = 0;

        // Can't trust NodeList.length
        while ( ( target[ j++ ] = els[ i++ ] ) ) {}
        target.length = j - 1;
    }
};
}

function Sizzle( selector, context, results, seed ) {
var m, i, elem, nid, match, groups, newSelector,
    newContext = context && context.ownerDocument,

    // nodeType defaults to 9, since context defaults to document
    nodeType = context ? context.nodeType : 9;

results = results || [];

// Return early from calls with invalid selector or context
if ( typeof selector !== "string" || !selector ||
    nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

    return results;
}

// Try to shortcut find operations (as opposed to filters) in HTML documents
if ( !seed ) {
    setDocument( context );
    context = context || document;

    if ( documentIsHTML ) {

        // If the selector is sufficiently simple, try using a "get*By*" DOM method
        // (excepting DocumentFragment context, where the methods don't exist)
        if ( nodeType !== 11 && ( match = rquickExpr.exec( selector ) ) ) {

            // ID selector
            if ( ( m = match[ 1 ] ) ) {

                // Document context
                if ( nodeType === 9 ) {
                    if ( ( elem = context.getElementById( m ) ) ) {

                        // Support: IE, Opera, Webkit
                        // TODO: identify versions
                        // getElementById can match elements by name instead of ID
                        if ( elem.id === m ) {
                            results.push( elem );
                            return results;
                        }
                    } else {
                        return results;
                    }

                // Element context
                } else {

                    // Support: IE, Opera, Webkit
                    // TODO: identify versions
                    // getElementById can match elements by name instead of ID
                    if ( newContext && ( elem = newContext.getElementById( m ) ) &&
                        contains( context, elem ) &&
                        elem.id === m ) {

                        results.push( elem );
                        return results;
                    }
                }

            // Type selector
            } else if ( match[ 2 ] ) {
                push.apply( results, context.getElementsByTagName( selector ) );
                return results;

            // Class selector
            } else if ( ( m = match[ 3 ] ) && support.getElementsByClassName &&
                context.getElementsByClassName ) {

                push.apply( results, context.getElementsByClassName( m ) );
                return results;
            }
        }

        // Take advantage of querySelectorAll
        if ( support.qsa &&
            !nonnativeSelectorCache[ selector + " " ] &&
            ( !rbuggyQSA || !rbuggyQSA.test( selector ) ) &&

            // Support: IE 8 only
            // Exclude object elements
            ( nodeType !== 1 || context.nodeName.toLowerCase() !== "object" ) ) {

            newSelector = selector;
            newContext = context;

            // qSA considers elements outside a scoping root when evaluating child or
            // descendant combinators, which is not what we want.
            // In such cases, we work around the behavior by prefixing every selector in the
            // list with an ID selector referencing the scope context.
            // The technique has to be used as well when a leading combinator is used
            // as such selectors are not recognized by querySelectorAll.
            // Thanks to Andrew Dupont for this technique.
            if ( nodeType === 1 &&
                ( rdescend.test( selector ) || rcombinators.test( selector ) ) ) {

                // Expand context for sibling selectors
                newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
                    context;

                // We can use :scope instead of the ID hack if the browser
                // supports it & if we're not changing the context.
                if ( newContext !== context || !support.scope ) {

                    // Capture the context ID, setting it first if necessary
                    if ( ( nid = context.getAttribute( "id" ) ) ) {
                        nid = nid.replace( rcssescape, fcssescape );
                    } else {
                        context.setAttribute( "id", ( nid = expando ) );
                    }
                }

                // Prefix every selector in the list
                groups = tokenize( selector );
                i = groups.length;
                while ( i-- ) {
                    groups[ i ] = ( nid ? "#" + nid : ":scope" ) + " " +
                        toSelector( groups[ i ] );
                }
                newSelector = groups.join( "," );
            }

            try {
                push.apply( results,
                    newContext.querySelectorAll( newSelector )
                );
                return results;
            } catch ( qsaError ) {
                nonnativeSelectorCache( selector, true );
            } finally {
                if ( nid === expando ) {
                    context.removeAttribute( "id" );
                }
            }
        }
    }
}

// All others
return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
* Create key-value caches of limited size
* @returns {function(string, object)} Returns the Object data after storing it on itself with
*	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
*	deleting the oldest entry
*/
function createCache() {
var keys = [];

function cache( key, value ) {

    // Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
    if ( keys.push( key + " " ) > Expr.cacheLength ) {

        // Only keep the most recent entries
        delete cache[ keys.shift() ];
    }
    return ( cache[ key + " " ] = value );
}
return cache;
}

/**
* Mark a function for special use by Sizzle
* @param {Function} fn The function to mark
*/
function markFunction( fn ) {
fn[ expando ] = true;
return fn;
}

/**
* Support testing using an element
* @param {Function} fn Passed the created element and returns a boolean result
*/
function assert( fn ) {
var el = document.createElement( "fieldset" );

try {
    return !!fn( el );
} catch ( e ) {
    return false;
} finally {

    // Remove from its parent by default
    if ( el.parentNode ) {
        el.parentNode.removeChild( el );
    }

    // release memory in IE
    el = null;
}
}

/**
* Adds the same handler for all of the specified attrs
* @param {String} attrs Pipe-separated list of attributes
* @param {Function} handler The method that will be applied
*/
function addHandle( attrs, handler ) {
var arr = attrs.split( "|" ),
    i = arr.length;

while ( i-- ) {
    Expr.attrHandle[ arr[ i ] ] = handler;
}
}

/**
* Checks document order of two siblings
* @param {Element} a
* @param {Element} b
* @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
*/
function siblingCheck( a, b ) {
var cur = b && a,
    diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
        a.sourceIndex - b.sourceIndex;

// Use IE sourceIndex if available on both nodes
if ( diff ) {
    return diff;
}

// Check if b follows a
if ( cur ) {
    while ( ( cur = cur.nextSibling ) ) {
        if ( cur === b ) {
            return -1;
        }
    }
}

return a ? 1 : -1;
}

/**
* Returns a function to use in pseudos for input types
* @param {String} type
*/
function createInputPseudo( type ) {
return function( elem ) {
    var name = elem.nodeName.toLowerCase();
    return name === "input" && elem.type === type;
};
}

/**
* Returns a function to use in pseudos for buttons
* @param {String} type
*/
function createButtonPseudo( type ) {
return function( elem ) {
    var name = elem.nodeName.toLowerCase();
    return ( name === "input" || name === "button" ) && elem.type === type;
};
}

/**
* Returns a function to use in pseudos for :enabled/:disabled
* @param {Boolean} disabled true for :disabled; false for :enabled
*/
function createDisabledPseudo( disabled ) {

// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
return function( elem ) {

    // Only certain elements can match :enabled or :disabled
    // https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
    // https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
    if ( "form" in elem ) {

        // Check for inherited disabledness on relevant non-disabled elements:
        // * listed form-associated elements in a disabled fieldset
        //   https://html.spec.whatwg.org/multipage/forms.html#category-listed
        //   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
        // * option elements in a disabled optgroup
        //   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
        // All such elements have a "form" property.
        if ( elem.parentNode && elem.disabled === false ) {

            // Option elements defer to a parent optgroup if present
            if ( "label" in elem ) {
                if ( "label" in elem.parentNode ) {
                    return elem.parentNode.disabled === disabled;
                } else {
                    return elem.disabled === disabled;
                }
            }

            // Support: IE 6 - 11
            // Use the isDisabled shortcut property to check for disabled fieldset ancestors
            return elem.isDisabled === disabled ||

                // Where there is no isDisabled, check manually
                /* jshint -W018 */
                elem.isDisabled !== !disabled &&
                inDisabledFieldset( elem ) === disabled;
        }

        return elem.disabled === disabled;

    // Try to winnow out elements that can't be disabled before trusting the disabled property.
    // Some victims get caught in our net (label, legend, menu, track), but it shouldn't
    // even exist on them, let alone have a boolean value.
    } else if ( "label" in elem ) {
        return elem.disabled === disabled;
    }

    // Remaining elements are neither :enabled nor :disabled
    return false;
};
}

/**
* Returns a function to use in pseudos for positionals
* @param {Function} fn
*/
function createPositionalPseudo( fn ) {
return markFunction( function( argument ) {
    argument = +argument;
    return markFunction( function( seed, matches ) {
        var j,
            matchIndexes = fn( [], seed.length, argument ),
            i = matchIndexes.length;

        // Match elements found at the specified indexes
        while ( i-- ) {
            if ( seed[ ( j = matchIndexes[ i ] ) ] ) {
                seed[ j ] = !( matches[ j ] = seed[ j ] );
            }
        }
    } );
} );
}

/**
* Checks a node for validity as a Sizzle context
* @param {Element|Object=} context
* @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
*/
function testContext( context ) {
return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
* Detects XML nodes
* @param {Element|Object} elem An element or a document
* @returns {Boolean} True iff elem is a non-HTML XML node
*/
isXML = Sizzle.isXML = function( elem ) {
var namespace = elem.namespaceURI,
    docElem = ( elem.ownerDocument || elem ).documentElement;

// Support: IE <=8
// Assume HTML when documentElement doesn't yet exist, such as inside loading iframes
// https://bugs.jquery.com/ticket/4833
return !rhtml.test( namespace || docElem && docElem.nodeName || "HTML" );
};

/**
* Sets document-related variables once based on the current document
* @param {Element|Object} [doc] An element or document object to use to set the document
* @returns {Object} Returns the current document
*/
setDocument = Sizzle.setDocument = function( node ) {
var hasCompare, subWindow,
    doc = node ? node.ownerDocument || node : preferredDoc;

// Return early if doc is invalid or already selected
// Support: IE 11+, Edge 17 - 18+
// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
// two documents; shallow comparisons work.
// eslint-disable-next-line eqeqeq
if ( doc == document || doc.nodeType !== 9 || !doc.documentElement ) {
    return document;
}

// Update global variables
document = doc;
docElem = document.documentElement;
documentIsHTML = !isXML( document );

// Support: IE 9 - 11+, Edge 12 - 18+
// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
// Support: IE 11+, Edge 17 - 18+
// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
// two documents; shallow comparisons work.
// eslint-disable-next-line eqeqeq
if ( preferredDoc != document &&
    ( subWindow = document.defaultView ) && subWindow.top !== subWindow ) {

    // Support: IE 11, Edge
    if ( subWindow.addEventListener ) {
        subWindow.addEventListener( "unload", unloadHandler, false );

    // Support: IE 9 - 10 only
    } else if ( subWindow.attachEvent ) {
        subWindow.attachEvent( "onunload", unloadHandler );
    }
}

// Support: IE 8 - 11+, Edge 12 - 18+, Chrome <=16 - 25 only, Firefox <=3.6 - 31 only,
// Safari 4 - 5 only, Opera <=11.6 - 12.x only
// IE/Edge & older browsers don't support the :scope pseudo-class.
// Support: Safari 6.0 only
// Safari 6.0 supports :scope but it's an alias of :root there.
support.scope = assert( function( el ) {
    docElem.appendChild( el ).appendChild( document.createElement( "div" ) );
    return typeof el.querySelectorAll !== "undefined" &&
        !el.querySelectorAll( ":scope fieldset div" ).length;
} );

/* Attributes
---------------------------------------------------------------------- */

// Support: IE<8
// Verify that getAttribute really returns attributes and not properties
// (excepting IE8 booleans)
support.attributes = assert( function( el ) {
    el.className = "i";
    return !el.getAttribute( "className" );
} );

/* getElement(s)By*
---------------------------------------------------------------------- */

// Check if getElementsByTagName("*") returns only elements
support.getElementsByTagName = assert( function( el ) {
    el.appendChild( document.createComment( "" ) );
    return !el.getElementsByTagName( "*" ).length;
} );

// Support: IE<9
support.getElementsByClassName = rnative.test( document.getElementsByClassName );

// Support: IE<10
// Check if getElementById returns elements by name
// The broken getElementById methods don't pick up programmatically-set names,
// so use a roundabout getElementsByName test
support.getById = assert( function( el ) {
    docElem.appendChild( el ).id = expando;
    return !document.getElementsByName || !document.getElementsByName( expando ).length;
} );

// ID filter and find
if ( support.getById ) {
    Expr.filter[ "ID" ] = function( id ) {
        var attrId = id.replace( runescape, funescape );
        return function( elem ) {
            return elem.getAttribute( "id" ) === attrId;
        };
    };
    Expr.find[ "ID" ] = function( id, context ) {
        if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
            var elem = context.getElementById( id );
            return elem ? [ elem ] : [];
        }
    };
} else {
    Expr.filter[ "ID" ] =  function( id ) {
        var attrId = id.replace( runescape, funescape );
        return function( elem ) {
            var node = typeof elem.getAttributeNode !== "undefined" &&
                elem.getAttributeNode( "id" );
            return node && node.value === attrId;
        };
    };

    // Support: IE 6 - 7 only
    // getElementById is not reliable as a find shortcut
    Expr.find[ "ID" ] = function( id, context ) {
        if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
            var node, i, elems,
                elem = context.getElementById( id );

            if ( elem ) {

                // Verify the id attribute
                node = elem.getAttributeNode( "id" );
                if ( node && node.value === id ) {
                    return [ elem ];
                }

                // Fall back on getElementsByName
                elems = context.getElementsByName( id );
                i = 0;
                while ( ( elem = elems[ i++ ] ) ) {
                    node = elem.getAttributeNode( "id" );
                    if ( node && node.value === id ) {
                        return [ elem ];
                    }
                }
            }

            return [];
        }
    };
}

// Tag
Expr.find[ "TAG" ] = support.getElementsByTagName ?
    function( tag, context ) {
        if ( typeof context.getElementsByTagName !== "undefined" ) {
            return context.getElementsByTagName( tag );

        // DocumentFragment nodes don't have gEBTN
        } else if ( support.qsa ) {
            return context.querySelectorAll( tag );
        }
    } :

    function( tag, context ) {
        var elem,
            tmp = [],
            i = 0,

            // By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
            results = context.getElementsByTagName( tag );

        // Filter out possible comments
        if ( tag === "*" ) {
            while ( ( elem = results[ i++ ] ) ) {
                if ( elem.nodeType === 1 ) {
                    tmp.push( elem );
                }
            }

            return tmp;
        }
        return results;
    };

// Class
Expr.find[ "CLASS" ] = support.getElementsByClassName && function( className, context ) {
    if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
        return context.getElementsByClassName( className );
    }
};

/* QSA/matchesSelector
---------------------------------------------------------------------- */

// QSA and matchesSelector support

// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
rbuggyMatches = [];

// qSa(:focus) reports false when true (Chrome 21)
// We allow this because of a bug in IE8/9 that throws an error
// whenever `document.activeElement` is accessed on an iframe
// So, we allow :focus to pass through QSA all the time to avoid the IE error
// See https://bugs.jquery.com/ticket/13378
rbuggyQSA = [];

if ( ( support.qsa = rnative.test( document.querySelectorAll ) ) ) {

    // Build QSA regex
    // Regex strategy adopted from Diego Perini
    assert( function( el ) {

        var input;

        // Select is set to empty string on purpose
        // This is to test IE's treatment of not explicitly
        // setting a boolean content attribute,
        // since its presence should be enough
        // https://bugs.jquery.com/ticket/12359
        docElem.appendChild( el ).innerHTML = "<a id='" + expando + "'></a>" +
            "<select id='" + expando + "-\r\\' msallowcapture=''>" +
            "<option selected=''></option></select>";

        // Support: IE8, Opera 11-12.16
        // Nothing should be selected when empty strings follow ^= or $= or *=
        // The test attribute must be unknown in Opera but "safe" for WinRT
        // https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
        if ( el.querySelectorAll( "[msallowcapture^='']" ).length ) {
            rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
        }

        // Support: IE8
        // Boolean attributes and "value" are not treated correctly
        if ( !el.querySelectorAll( "[selected]" ).length ) {
            rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
        }

        // Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
        if ( !el.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
            rbuggyQSA.push( "~=" );
        }

        // Support: IE 11+, Edge 15 - 18+
        // IE 11/Edge don't find elements on a `[name='']` query in some cases.
        // Adding a temporary attribute to the document before the selection works
        // around the issue.
        // Interestingly, IE 10 & older don't seem to have the issue.
        input = document.createElement( "input" );
        input.setAttribute( "name", "" );
        el.appendChild( input );
        if ( !el.querySelectorAll( "[name='']" ).length ) {
            rbuggyQSA.push( "\\[" + whitespace + "*name" + whitespace + "*=" +
                whitespace + "*(?:''|\"\")" );
        }

        // Webkit/Opera - :checked should return selected option elements
        // http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
        // IE8 throws error here and will not see later tests
        if ( !el.querySelectorAll( ":checked" ).length ) {
            rbuggyQSA.push( ":checked" );
        }

        // Support: Safari 8+, iOS 8+
        // https://bugs.webkit.org/show_bug.cgi?id=136851
        // In-page `selector#id sibling-combinator selector` fails
        if ( !el.querySelectorAll( "a#" + expando + "+*" ).length ) {
            rbuggyQSA.push( ".#.+[+~]" );
        }

        // Support: Firefox <=3.6 - 5 only
        // Old Firefox doesn't throw on a badly-escaped identifier.
        el.querySelectorAll( "\\\f" );
        rbuggyQSA.push( "[\\r\\n\\f]" );
    } );

    assert( function( el ) {
        el.innerHTML = "<a href='' disabled='disabled'></a>" +
            "<select disabled='disabled'><option/></select>";

        // Support: Windows 8 Native Apps
        // The type and name attributes are restricted during .innerHTML assignment
        var input = document.createElement( "input" );
        input.setAttribute( "type", "hidden" );
        el.appendChild( input ).setAttribute( "name", "D" );

        // Support: IE8
        // Enforce case-sensitivity of name attribute
        if ( el.querySelectorAll( "[name=d]" ).length ) {
            rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
        }

        // FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
        // IE8 throws error here and will not see later tests
        if ( el.querySelectorAll( ":enabled" ).length !== 2 ) {
            rbuggyQSA.push( ":enabled", ":disabled" );
        }

        // Support: IE9-11+
        // IE's :disabled selector does not pick up the children of disabled fieldsets
        docElem.appendChild( el ).disabled = true;
        if ( el.querySelectorAll( ":disabled" ).length !== 2 ) {
            rbuggyQSA.push( ":enabled", ":disabled" );
        }

        // Support: Opera 10 - 11 only
        // Opera 10-11 does not throw on post-comma invalid pseudos
        el.querySelectorAll( "*,:x" );
        rbuggyQSA.push( ",.*:" );
    } );
}

if ( ( support.matchesSelector = rnative.test( ( matches = docElem.matches ||
    docElem.webkitMatchesSelector ||
    docElem.mozMatchesSelector ||
    docElem.oMatchesSelector ||
    docElem.msMatchesSelector ) ) ) ) {

    assert( function( el ) {

        // Check to see if it's possible to do matchesSelector
        // on a disconnected node (IE 9)
        support.disconnectedMatch = matches.call( el, "*" );

        // This should fail with an exception
        // Gecko does not error, returns false instead
        matches.call( el, "[s!='']:x" );
        rbuggyMatches.push( "!=", pseudos );
    } );
}

rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join( "|" ) );
rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join( "|" ) );

/* Contains
---------------------------------------------------------------------- */
hasCompare = rnative.test( docElem.compareDocumentPosition );

// Element contains another
// Purposefully self-exclusive
// As in, an element does not contain itself
contains = hasCompare || rnative.test( docElem.contains ) ?
    function( a, b ) {
        var adown = a.nodeType === 9 ? a.documentElement : a,
            bup = b && b.parentNode;
        return a === bup || !!( bup && bup.nodeType === 1 && (
            adown.contains ?
                adown.contains( bup ) :
                a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
        ) );
    } :
    function( a, b ) {
        if ( b ) {
            while ( ( b = b.parentNode ) ) {
                if ( b === a ) {
                    return true;
                }
            }
        }
        return false;
    };

/* Sorting
---------------------------------------------------------------------- */

// Document order sorting
sortOrder = hasCompare ?
function( a, b ) {

    // Flag for duplicate removal
    if ( a === b ) {
        hasDuplicate = true;
        return 0;
    }

    // Sort on method existence if only one input has compareDocumentPosition
    var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
    if ( compare ) {
        return compare;
    }

    // Calculate position if both inputs belong to the same document
    // Support: IE 11+, Edge 17 - 18+
    // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
    // two documents; shallow comparisons work.
    // eslint-disable-next-line eqeqeq
    compare = ( a.ownerDocument || a ) == ( b.ownerDocument || b ) ?
        a.compareDocumentPosition( b ) :

        // Otherwise we know they are disconnected
        1;

    // Disconnected nodes
    if ( compare & 1 ||
        ( !support.sortDetached && b.compareDocumentPosition( a ) === compare ) ) {

        // Choose the first element that is related to our preferred document
        // Support: IE 11+, Edge 17 - 18+
        // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
        // two documents; shallow comparisons work.
        // eslint-disable-next-line eqeqeq
        if ( a == document || a.ownerDocument == preferredDoc &&
            contains( preferredDoc, a ) ) {
            return -1;
        }

        // Support: IE 11+, Edge 17 - 18+
        // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
        // two documents; shallow comparisons work.
        // eslint-disable-next-line eqeqeq
        if ( b == document || b.ownerDocument == preferredDoc &&
            contains( preferredDoc, b ) ) {
            return 1;
        }

        // Maintain original order
        return sortInput ?
            ( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
            0;
    }

    return compare & 4 ? -1 : 1;
} :
function( a, b ) {

    // Exit early if the nodes are identical
    if ( a === b ) {
        hasDuplicate = true;
        return 0;
    }

    var cur,
        i = 0,
        aup = a.parentNode,
        bup = b.parentNode,
        ap = [ a ],
        bp = [ b ];

    // Parentless nodes are either documents or disconnected
    if ( !aup || !bup ) {

        // Support: IE 11+, Edge 17 - 18+
        // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
        // two documents; shallow comparisons work.
        /* eslint-disable eqeqeq */
        return a == document ? -1 :
            b == document ? 1 :
            /* eslint-enable eqeqeq */
            aup ? -1 :
            bup ? 1 :
            sortInput ?
            ( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
            0;

    // If the nodes are siblings, we can do a quick check
    } else if ( aup === bup ) {
        return siblingCheck( a, b );
    }

    // Otherwise we need full lists of their ancestors for comparison
    cur = a;
    while ( ( cur = cur.parentNode ) ) {
        ap.unshift( cur );
    }
    cur = b;
    while ( ( cur = cur.parentNode ) ) {
        bp.unshift( cur );
    }

    // Walk down the tree looking for a discrepancy
    while ( ap[ i ] === bp[ i ] ) {
        i++;
    }

    return i ?

        // Do a sibling check if the nodes have a common ancestor
        siblingCheck( ap[ i ], bp[ i ] ) :

        // Otherwise nodes in our document sort first
        // Support: IE 11+, Edge 17 - 18+
        // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
        // two documents; shallow comparisons work.
        /* eslint-disable eqeqeq */
        ap[ i ] == preferredDoc ? -1 :
        bp[ i ] == preferredDoc ? 1 :
        /* eslint-enable eqeqeq */
        0;
};

return document;
};

Sizzle.matches = function( expr, elements ) {
return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
setDocument( elem );

if ( support.matchesSelector && documentIsHTML &&
    !nonnativeSelectorCache[ expr + " " ] &&
    ( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
    ( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

    try {
        var ret = matches.call( elem, expr );

        // IE 9's matchesSelector returns false on disconnected nodes
        if ( ret || support.disconnectedMatch ||

            // As well, disconnected nodes are said to be in a document
            // fragment in IE 9
            elem.document && elem.document.nodeType !== 11 ) {
            return ret;
        }
    } catch ( e ) {
        nonnativeSelectorCache( expr, true );
    }
}

return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {

// Set document vars if needed
// Support: IE 11+, Edge 17 - 18+
// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
// two documents; shallow comparisons work.
// eslint-disable-next-line eqeqeq
if ( ( context.ownerDocument || context ) != document ) {
    setDocument( context );
}
return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {

// Set document vars if needed
// Support: IE 11+, Edge 17 - 18+
// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
// two documents; shallow comparisons work.
// eslint-disable-next-line eqeqeq
if ( ( elem.ownerDocument || elem ) != document ) {
    setDocument( elem );
}

var fn = Expr.attrHandle[ name.toLowerCase() ],

    // Don't get fooled by Object.prototype properties (jQuery #13807)
    val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
        fn( elem, name, !documentIsHTML ) :
        undefined;

return val !== undefined ?
    val :
    support.attributes || !documentIsHTML ?
        elem.getAttribute( name ) :
        ( val = elem.getAttributeNode( name ) ) && val.specified ?
            val.value :
            null;
};

Sizzle.escape = function( sel ) {
return ( sel + "" ).replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
* Document sorting and removing duplicates
* @param {ArrayLike} results
*/
Sizzle.uniqueSort = function( results ) {
var elem,
    duplicates = [],
    j = 0,
    i = 0;

// Unless we *know* we can detect duplicates, assume their presence
hasDuplicate = !support.detectDuplicates;
sortInput = !support.sortStable && results.slice( 0 );
results.sort( sortOrder );

if ( hasDuplicate ) {
    while ( ( elem = results[ i++ ] ) ) {
        if ( elem === results[ i ] ) {
            j = duplicates.push( i );
        }
    }
    while ( j-- ) {
        results.splice( duplicates[ j ], 1 );
    }
}

// Clear input after sorting to release objects
// See https://github.com/jquery/sizzle/pull/225
sortInput = null;

return results;
};

/**
* Utility function for retrieving the text value of an array of DOM nodes
* @param {Array|Element} elem
*/
getText = Sizzle.getText = function( elem ) {
var node,
    ret = "",
    i = 0,
    nodeType = elem.nodeType;

if ( !nodeType ) {

    // If no nodeType, this is expected to be an array
    while ( ( node = elem[ i++ ] ) ) {

        // Do not traverse comment nodes
        ret += getText( node );
    }
} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {

    // Use textContent for elements
    // innerText usage removed for consistency of new lines (jQuery #11153)
    if ( typeof elem.textContent === "string" ) {
        return elem.textContent;
    } else {

        // Traverse its children
        for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
            ret += getText( elem );
        }
    }
} else if ( nodeType === 3 || nodeType === 4 ) {
    return elem.nodeValue;
}

// Do not include comment or processing instruction nodes

return ret;
};

Expr = Sizzle.selectors = {

// Can be adjusted by the user
cacheLength: 50,

createPseudo: markFunction,

match: matchExpr,

attrHandle: {},

find: {},

relative: {
    ">": { dir: "parentNode", first: true },
    " ": { dir: "parentNode" },
    "+": { dir: "previousSibling", first: true },
    "~": { dir: "previousSibling" }
},

preFilter: {
    "ATTR": function( match ) {
        match[ 1 ] = match[ 1 ].replace( runescape, funescape );

        // Move the given value to match[3] whether quoted or unquoted
        match[ 3 ] = ( match[ 3 ] || match[ 4 ] ||
            match[ 5 ] || "" ).replace( runescape, funescape );

        if ( match[ 2 ] === "~=" ) {
            match[ 3 ] = " " + match[ 3 ] + " ";
        }

        return match.slice( 0, 4 );
    },

    "CHILD": function( match ) {

        /* matches from matchExpr["CHILD"]
            1 type (only|nth|...)
            2 what (child|of-type)
            3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
            4 xn-component of xn+y argument ([+-]?\d*n|)
            5 sign of xn-component
            6 x of xn-component
            7 sign of y-component
            8 y of y-component
        */
        match[ 1 ] = match[ 1 ].toLowerCase();

        if ( match[ 1 ].slice( 0, 3 ) === "nth" ) {

            // nth-* requires argument
            if ( !match[ 3 ] ) {
                Sizzle.error( match[ 0 ] );
            }

            // numeric x and y parameters for Expr.filter.CHILD
            // remember that false/true cast respectively to 0/1
            match[ 4 ] = +( match[ 4 ] ?
                match[ 5 ] + ( match[ 6 ] || 1 ) :
                2 * ( match[ 3 ] === "even" || match[ 3 ] === "odd" ) );
            match[ 5 ] = +( ( match[ 7 ] + match[ 8 ] ) || match[ 3 ] === "odd" );

            // other types prohibit arguments
        } else if ( match[ 3 ] ) {
            Sizzle.error( match[ 0 ] );
        }

        return match;
    },

    "PSEUDO": function( match ) {
        var excess,
            unquoted = !match[ 6 ] && match[ 2 ];

        if ( matchExpr[ "CHILD" ].test( match[ 0 ] ) ) {
            return null;
        }

        // Accept quoted arguments as-is
        if ( match[ 3 ] ) {
            match[ 2 ] = match[ 4 ] || match[ 5 ] || "";

        // Strip excess characters from unquoted arguments
        } else if ( unquoted && rpseudo.test( unquoted ) &&

            // Get excess from tokenize (recursively)
            ( excess = tokenize( unquoted, true ) ) &&

            // advance to the next closing parenthesis
            ( excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length ) ) {

            // excess is a negative index
            match[ 0 ] = match[ 0 ].slice( 0, excess );
            match[ 2 ] = unquoted.slice( 0, excess );
        }

        // Return only captures needed by the pseudo filter method (type and argument)
        return match.slice( 0, 3 );
    }
},

filter: {

    "TAG": function( nodeNameSelector ) {
        var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
        return nodeNameSelector === "*" ?
            function() {
                return true;
            } :
            function( elem ) {
                return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
            };
    },

    "CLASS": function( className ) {
        var pattern = classCache[ className + " " ];

        return pattern ||
            ( pattern = new RegExp( "(^|" + whitespace +
                ")" + className + "(" + whitespace + "|$)" ) ) && classCache(
                    className, function( elem ) {
                        return pattern.test(
                            typeof elem.className === "string" && elem.className ||
                            typeof elem.getAttribute !== "undefined" &&
                                elem.getAttribute( "class" ) ||
                            ""
                        );
            } );
    },

    "ATTR": function( name, operator, check ) {
        return function( elem ) {
            var result = Sizzle.attr( elem, name );

            if ( result == null ) {
                return operator === "!=";
            }
            if ( !operator ) {
                return true;
            }

            result += "";

            /* eslint-disable max-len */

            return operator === "=" ? result === check :
                operator === "!=" ? result !== check :
                operator === "^=" ? check && result.indexOf( check ) === 0 :
                operator === "*=" ? check && result.indexOf( check ) > -1 :
                operator === "$=" ? check && result.slice( -check.length ) === check :
                operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
                operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
                false;
            /* eslint-enable max-len */

        };
    },

    "CHILD": function( type, what, _argument, first, last ) {
        var simple = type.slice( 0, 3 ) !== "nth",
            forward = type.slice( -4 ) !== "last",
            ofType = what === "of-type";

        return first === 1 && last === 0 ?

            // Shortcut for :nth-*(n)
            function( elem ) {
                return !!elem.parentNode;
            } :

            function( elem, _context, xml ) {
                var cache, uniqueCache, outerCache, node, nodeIndex, start,
                    dir = simple !== forward ? "nextSibling" : "previousSibling",
                    parent = elem.parentNode,
                    name = ofType && elem.nodeName.toLowerCase(),
                    useCache = !xml && !ofType,
                    diff = false;

                if ( parent ) {

                    // :(first|last|only)-(child|of-type)
                    if ( simple ) {
                        while ( dir ) {
                            node = elem;
                            while ( ( node = node[ dir ] ) ) {
                                if ( ofType ?
                                    node.nodeName.toLowerCase() === name :
                                    node.nodeType === 1 ) {

                                    return false;
                                }
                            }

                            // Reverse direction for :only-* (if we haven't yet done so)
                            start = dir = type === "only" && !start && "nextSibling";
                        }
                        return true;
                    }

                    start = [ forward ? parent.firstChild : parent.lastChild ];

                    // non-xml :nth-child(...) stores cache data on `parent`
                    if ( forward && useCache ) {

                        // Seek `elem` from a previously-cached index

                        // ...in a gzip-friendly way
                        node = parent;
                        outerCache = node[ expando ] || ( node[ expando ] = {} );

                        // Support: IE <9 only
                        // Defend against cloned attroperties (jQuery gh-1709)
                        uniqueCache = outerCache[ node.uniqueID ] ||
                            ( outerCache[ node.uniqueID ] = {} );

                        cache = uniqueCache[ type ] || [];
                        nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
                        diff = nodeIndex && cache[ 2 ];
                        node = nodeIndex && parent.childNodes[ nodeIndex ];

                        while ( ( node = ++nodeIndex && node && node[ dir ] ||

                            // Fallback to seeking `elem` from the start
                            ( diff = nodeIndex = 0 ) || start.pop() ) ) {

                            // When found, cache indexes on `parent` and break
                            if ( node.nodeType === 1 && ++diff && node === elem ) {
                                uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
                                break;
                            }
                        }

                    } else {

                        // Use previously-cached element index if available
                        if ( useCache ) {

                            // ...in a gzip-friendly way
                            node = elem;
                            outerCache = node[ expando ] || ( node[ expando ] = {} );

                            // Support: IE <9 only
                            // Defend against cloned attroperties (jQuery gh-1709)
                            uniqueCache = outerCache[ node.uniqueID ] ||
                                ( outerCache[ node.uniqueID ] = {} );

                            cache = uniqueCache[ type ] || [];
                            nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
                            diff = nodeIndex;
                        }

                        // xml :nth-child(...)
                        // or :nth-last-child(...) or :nth(-last)?-of-type(...)
                        if ( diff === false ) {

                            // Use the same loop as above to seek `elem` from the start
                            while ( ( node = ++nodeIndex && node && node[ dir ] ||
                                ( diff = nodeIndex = 0 ) || start.pop() ) ) {

                                if ( ( ofType ?
                                    node.nodeName.toLowerCase() === name :
                                    node.nodeType === 1 ) &&
                                    ++diff ) {

                                    // Cache the index of each encountered element
                                    if ( useCache ) {
                                        outerCache = node[ expando ] ||
                                            ( node[ expando ] = {} );

                                        // Support: IE <9 only
                                        // Defend against cloned attroperties (jQuery gh-1709)
                                        uniqueCache = outerCache[ node.uniqueID ] ||
                                            ( outerCache[ node.uniqueID ] = {} );

                                        uniqueCache[ type ] = [ dirruns, diff ];
                                    }

                                    if ( node === elem ) {
                                        break;
                                    }
                                }
                            }
                        }
                    }

                    // Incorporate the offset, then check against cycle size
                    diff -= last;
                    return diff === first || ( diff % first === 0 && diff / first >= 0 );
                }
            };
    },

    "PSEUDO": function( pseudo, argument ) {

        // pseudo-class names are case-insensitive
        // http://www.w3.org/TR/selectors/#pseudo-classes
        // Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
        // Remember that setFilters inherits from pseudos
        var args,
            fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
                Sizzle.error( "unsupported pseudo: " + pseudo );

        // The user may use createPseudo to indicate that
        // arguments are needed to create the filter function
        // just as Sizzle does
        if ( fn[ expando ] ) {
            return fn( argument );
        }

        // But maintain support for old signatures
        if ( fn.length > 1 ) {
            args = [ pseudo, pseudo, "", argument ];
            return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
                markFunction( function( seed, matches ) {
                    var idx,
                        matched = fn( seed, argument ),
                        i = matched.length;
                    while ( i-- ) {
                        idx = indexOf( seed, matched[ i ] );
                        seed[ idx ] = !( matches[ idx ] = matched[ i ] );
                    }
                } ) :
                function( elem ) {
                    return fn( elem, 0, args );
                };
        }

        return fn;
    }
},

pseudos: {

    // Potentially complex pseudos
    "not": markFunction( function( selector ) {

        // Trim the selector passed to compile
        // to avoid treating leading and trailing
        // spaces as combinators
        var input = [],
            results = [],
            matcher = compile( selector.replace( rtrim, "$1" ) );

        return matcher[ expando ] ?
            markFunction( function( seed, matches, _context, xml ) {
                var elem,
                    unmatched = matcher( seed, null, xml, [] ),
                    i = seed.length;

                // Match elements unmatched by `matcher`
                while ( i-- ) {
                    if ( ( elem = unmatched[ i ] ) ) {
                        seed[ i ] = !( matches[ i ] = elem );
                    }
                }
            } ) :
            function( elem, _context, xml ) {
                input[ 0 ] = elem;
                matcher( input, null, xml, results );

                // Don't keep the element (issue #299)
                input[ 0 ] = null;
                return !results.pop();
            };
    } ),

    "has": markFunction( function( selector ) {
        return function( elem ) {
            return Sizzle( selector, elem ).length > 0;
        };
    } ),

    "contains": markFunction( function( text ) {
        text = text.replace( runescape, funescape );
        return function( elem ) {
            return ( elem.textContent || getText( elem ) ).indexOf( text ) > -1;
        };
    } ),

    // "Whether an element is represented by a :lang() selector
    // is based solely on the element's language value
    // being equal to the identifier C,
    // or beginning with the identifier C immediately followed by "-".
    // The matching of C against the element's language value is performed case-insensitively.
    // The identifier C does not have to be a valid language name."
    // http://www.w3.org/TR/selectors/#lang-pseudo
    "lang": markFunction( function( lang ) {

        // lang value must be a valid identifier
        if ( !ridentifier.test( lang || "" ) ) {
            Sizzle.error( "unsupported lang: " + lang );
        }
        lang = lang.replace( runescape, funescape ).toLowerCase();
        return function( elem ) {
            var elemLang;
            do {
                if ( ( elemLang = documentIsHTML ?
                    elem.lang :
                    elem.getAttribute( "xml:lang" ) || elem.getAttribute( "lang" ) ) ) {

                    elemLang = elemLang.toLowerCase();
                    return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
                }
            } while ( ( elem = elem.parentNode ) && elem.nodeType === 1 );
            return false;
        };
    } ),

    // Miscellaneous
    "target": function( elem ) {
        var hash = window.location && window.location.hash;
        return hash && hash.slice( 1 ) === elem.id;
    },

    "root": function( elem ) {
        return elem === docElem;
    },

    "focus": function( elem ) {
        return elem === document.activeElement &&
            ( !document.hasFocus || document.hasFocus() ) &&
            !!( elem.type || elem.href || ~elem.tabIndex );
    },

    // Boolean properties
    "enabled": createDisabledPseudo( false ),
    "disabled": createDisabledPseudo( true ),

    "checked": function( elem ) {

        // In CSS3, :checked should return both checked and selected elements
        // http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
        var nodeName = elem.nodeName.toLowerCase();
        return ( nodeName === "input" && !!elem.checked ) ||
            ( nodeName === "option" && !!elem.selected );
    },

    "selected": function( elem ) {

        // Accessing this property makes selected-by-default
        // options in Safari work properly
        if ( elem.parentNode ) {
            // eslint-disable-next-line no-unused-expressions
            elem.parentNode.selectedIndex;
        }

        return elem.selected === true;
    },

    // Contents
    "empty": function( elem ) {

        // http://www.w3.org/TR/selectors/#empty-pseudo
        // :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
        //   but not by others (comment: 8; processing instruction: 7; etc.)
        // nodeType < 6 works because attributes (2) do not appear as children
        for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
            if ( elem.nodeType < 6 ) {
                return false;
            }
        }
        return true;
    },

    "parent": function( elem ) {
        return !Expr.pseudos[ "empty" ]( elem );
    },

    // Element/input types
    "header": function( elem ) {
        return rheader.test( elem.nodeName );
    },

    "input": function( elem ) {
        return rinputs.test( elem.nodeName );
    },

    "button": function( elem ) {
        var name = elem.nodeName.toLowerCase();
        return name === "input" && elem.type === "button" || name === "button";
    },

    "text": function( elem ) {
        var attr;
        return elem.nodeName.toLowerCase() === "input" &&
            elem.type === "text" &&

            // Support: IE<8
            // New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
            ( ( attr = elem.getAttribute( "type" ) ) == null ||
                attr.toLowerCase() === "text" );
    },

    // Position-in-collection
    "first": createPositionalPseudo( function() {
        return [ 0 ];
    } ),

    "last": createPositionalPseudo( function( _matchIndexes, length ) {
        return [ length - 1 ];
    } ),

    "eq": createPositionalPseudo( function( _matchIndexes, length, argument ) {
        return [ argument < 0 ? argument + length : argument ];
    } ),

    "even": createPositionalPseudo( function( matchIndexes, length ) {
        var i = 0;
        for ( ; i < length; i += 2 ) {
            matchIndexes.push( i );
        }
        return matchIndexes;
    } ),

    "odd": createPositionalPseudo( function( matchIndexes, length ) {
        var i = 1;
        for ( ; i < length; i += 2 ) {
            matchIndexes.push( i );
        }
        return matchIndexes;
    } ),

    "lt": createPositionalPseudo( function( matchIndexes, length, argument ) {
        var i = argument < 0 ?
            argument + length :
            argument > length ?
                length :
                argument;
        for ( ; --i >= 0; ) {
            matchIndexes.push( i );
        }
        return matchIndexes;
    } ),

    "gt": createPositionalPseudo( function( matchIndexes, length, argument ) {
        var i = argument < 0 ? argument + length : argument;
        for ( ; ++i < length; ) {
            matchIndexes.push( i );
        }
        return matchIndexes;
    } )
}
};

Expr.pseudos[ "nth" ] = Expr.pseudos[ "eq" ];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
var matched, match, tokens, type,
    soFar, groups, preFilters,
    cached = tokenCache[ selector + " " ];

if ( cached ) {
    return parseOnly ? 0 : cached.slice( 0 );
}

soFar = selector;
groups = [];
preFilters = Expr.preFilter;

while ( soFar ) {

    // Comma and first run
    if ( !matched || ( match = rcomma.exec( soFar ) ) ) {
        if ( match ) {

            // Don't consume trailing commas as valid
            soFar = soFar.slice( match[ 0 ].length ) || soFar;
        }
        groups.push( ( tokens = [] ) );
    }

    matched = false;

    // Combinators
    if ( ( match = rcombinators.exec( soFar ) ) ) {
        matched = match.shift();
        tokens.push( {
            value: matched,

            // Cast descendant combinators to space
            type: match[ 0 ].replace( rtrim, " " )
        } );
        soFar = soFar.slice( matched.length );
    }

    // Filters
    for ( type in Expr.filter ) {
        if ( ( match = matchExpr[ type ].exec( soFar ) ) && ( !preFilters[ type ] ||
            ( match = preFilters[ type ]( match ) ) ) ) {
            matched = match.shift();
            tokens.push( {
                value: matched,
                type: type,
                matches: match
            } );
            soFar = soFar.slice( matched.length );
        }
    }

    if ( !matched ) {
        break;
    }
}

// Return the length of the invalid excess
// if we're just parsing
// Otherwise, throw an error or return tokens
return parseOnly ?
    soFar.length :
    soFar ?
        Sizzle.error( selector ) :

        // Cache the tokens
        tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
var i = 0,
    len = tokens.length,
    selector = "";
for ( ; i < len; i++ ) {
    selector += tokens[ i ].value;
}
return selector;
}

function addCombinator( matcher, combinator, base ) {
var dir = combinator.dir,
    skip = combinator.next,
    key = skip || dir,
    checkNonElements = base && key === "parentNode",
    doneName = done++;

return combinator.first ?

    // Check against closest ancestor/preceding element
    function( elem, context, xml ) {
        while ( ( elem = elem[ dir ] ) ) {
            if ( elem.nodeType === 1 || checkNonElements ) {
                return matcher( elem, context, xml );
            }
        }
        return false;
    } :

    // Check against all ancestor/preceding elements
    function( elem, context, xml ) {
        var oldCache, uniqueCache, outerCache,
            newCache = [ dirruns, doneName ];

        // We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
        if ( xml ) {
            while ( ( elem = elem[ dir ] ) ) {
                if ( elem.nodeType === 1 || checkNonElements ) {
                    if ( matcher( elem, context, xml ) ) {
                        return true;
                    }
                }
            }
        } else {
            while ( ( elem = elem[ dir ] ) ) {
                if ( elem.nodeType === 1 || checkNonElements ) {
                    outerCache = elem[ expando ] || ( elem[ expando ] = {} );

                    // Support: IE <9 only
                    // Defend against cloned attroperties (jQuery gh-1709)
                    uniqueCache = outerCache[ elem.uniqueID ] ||
                        ( outerCache[ elem.uniqueID ] = {} );

                    if ( skip && skip === elem.nodeName.toLowerCase() ) {
                        elem = elem[ dir ] || elem;
                    } else if ( ( oldCache = uniqueCache[ key ] ) &&
                        oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

                        // Assign to newCache so results back-propagate to previous elements
                        return ( newCache[ 2 ] = oldCache[ 2 ] );
                    } else {

                        // Reuse newcache so results back-propagate to previous elements
                        uniqueCache[ key ] = newCache;

                        // A match means we're done; a fail means we have to keep checking
                        if ( ( newCache[ 2 ] = matcher( elem, context, xml ) ) ) {
                            return true;
                        }
                    }
                }
            }
        }
        return false;
    };
}

function elementMatcher( matchers ) {
return matchers.length > 1 ?
    function( elem, context, xml ) {
        var i = matchers.length;
        while ( i-- ) {
            if ( !matchers[ i ]( elem, context, xml ) ) {
                return false;
            }
        }
        return true;
    } :
    matchers[ 0 ];
}

function multipleContexts( selector, contexts, results ) {
var i = 0,
    len = contexts.length;
for ( ; i < len; i++ ) {
    Sizzle( selector, contexts[ i ], results );
}
return results;
}

function condense( unmatched, map, filter, context, xml ) {
var elem,
    newUnmatched = [],
    i = 0,
    len = unmatched.length,
    mapped = map != null;

for ( ; i < len; i++ ) {
    if ( ( elem = unmatched[ i ] ) ) {
        if ( !filter || filter( elem, context, xml ) ) {
            newUnmatched.push( elem );
            if ( mapped ) {
                map.push( i );
            }
        }
    }
}

return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
if ( postFilter && !postFilter[ expando ] ) {
    postFilter = setMatcher( postFilter );
}
if ( postFinder && !postFinder[ expando ] ) {
    postFinder = setMatcher( postFinder, postSelector );
}
return markFunction( function( seed, results, context, xml ) {
    var temp, i, elem,
        preMap = [],
        postMap = [],
        preexisting = results.length,

        // Get initial elements from seed or context
        elems = seed || multipleContexts(
            selector || "*",
            context.nodeType ? [ context ] : context,
            []
        ),

        // Prefilter to get matcher input, preserving a map for seed-results synchronization
        matcherIn = preFilter && ( seed || !selector ) ?
            condense( elems, preMap, preFilter, context, xml ) :
            elems,

        matcherOut = matcher ?

            // If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
            postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

                // ...intermediate processing is necessary
                [] :

                // ...otherwise use results directly
                results :
            matcherIn;

    // Find primary matches
    if ( matcher ) {
        matcher( matcherIn, matcherOut, context, xml );
    }

    // Apply postFilter
    if ( postFilter ) {
        temp = condense( matcherOut, postMap );
        postFilter( temp, [], context, xml );

        // Un-match failing elements by moving them back to matcherIn
        i = temp.length;
        while ( i-- ) {
            if ( ( elem = temp[ i ] ) ) {
                matcherOut[ postMap[ i ] ] = !( matcherIn[ postMap[ i ] ] = elem );
            }
        }
    }

    if ( seed ) {
        if ( postFinder || preFilter ) {
            if ( postFinder ) {

                // Get the final matcherOut by condensing this intermediate into postFinder contexts
                temp = [];
                i = matcherOut.length;
                while ( i-- ) {
                    if ( ( elem = matcherOut[ i ] ) ) {

                        // Restore matcherIn since elem is not yet a final match
                        temp.push( ( matcherIn[ i ] = elem ) );
                    }
                }
                postFinder( null, ( matcherOut = [] ), temp, xml );
            }

            // Move matched elements from seed to results to keep them synchronized
            i = matcherOut.length;
            while ( i-- ) {
                if ( ( elem = matcherOut[ i ] ) &&
                    ( temp = postFinder ? indexOf( seed, elem ) : preMap[ i ] ) > -1 ) {

                    seed[ temp ] = !( results[ temp ] = elem );
                }
            }
        }

    // Add elements to results, through postFinder if defined
    } else {
        matcherOut = condense(
            matcherOut === results ?
                matcherOut.splice( preexisting, matcherOut.length ) :
                matcherOut
        );
        if ( postFinder ) {
            postFinder( null, results, matcherOut, xml );
        } else {
            push.apply( results, matcherOut );
        }
    }
} );
}

function matcherFromTokens( tokens ) {
var checkContext, matcher, j,
    len = tokens.length,
    leadingRelative = Expr.relative[ tokens[ 0 ].type ],
    implicitRelative = leadingRelative || Expr.relative[ " " ],
    i = leadingRelative ? 1 : 0,

    // The foundational matcher ensures that elements are reachable from top-level context(s)
    matchContext = addCombinator( function( elem ) {
        return elem === checkContext;
    }, implicitRelative, true ),
    matchAnyContext = addCombinator( function( elem ) {
        return indexOf( checkContext, elem ) > -1;
    }, implicitRelative, true ),
    matchers = [ function( elem, context, xml ) {
        var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
            ( checkContext = context ).nodeType ?
                matchContext( elem, context, xml ) :
                matchAnyContext( elem, context, xml ) );

        // Avoid hanging onto element (issue #299)
        checkContext = null;
        return ret;
    } ];

for ( ; i < len; i++ ) {
    if ( ( matcher = Expr.relative[ tokens[ i ].type ] ) ) {
        matchers = [ addCombinator( elementMatcher( matchers ), matcher ) ];
    } else {
        matcher = Expr.filter[ tokens[ i ].type ].apply( null, tokens[ i ].matches );

        // Return special upon seeing a positional matcher
        if ( matcher[ expando ] ) {

            // Find the next relative operator (if any) for proper handling
            j = ++i;
            for ( ; j < len; j++ ) {
                if ( Expr.relative[ tokens[ j ].type ] ) {
                    break;
                }
            }
            return setMatcher(
                i > 1 && elementMatcher( matchers ),
                i > 1 && toSelector(

                // If the preceding token was a descendant combinator, insert an implicit any-element `*`
                tokens
                    .slice( 0, i - 1 )
                    .concat( { value: tokens[ i - 2 ].type === " " ? "*" : "" } )
                ).replace( rtrim, "$1" ),
                matcher,
                i < j && matcherFromTokens( tokens.slice( i, j ) ),
                j < len && matcherFromTokens( ( tokens = tokens.slice( j ) ) ),
                j < len && toSelector( tokens )
            );
        }
        matchers.push( matcher );
    }
}

return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
var bySet = setMatchers.length > 0,
    byElement = elementMatchers.length > 0,
    superMatcher = function( seed, context, xml, results, outermost ) {
        var elem, j, matcher,
            matchedCount = 0,
            i = "0",
            unmatched = seed && [],
            setMatched = [],
            contextBackup = outermostContext,

            // We must always have either seed elements or outermost context
            elems = seed || byElement && Expr.find[ "TAG" ]( "*", outermost ),

            // Use integer dirruns iff this is the outermost matcher
            dirrunsUnique = ( dirruns += contextBackup == null ? 1 : Math.random() || 0.1 ),
            len = elems.length;

        if ( outermost ) {

            // Support: IE 11+, Edge 17 - 18+
            // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
            // two documents; shallow comparisons work.
            // eslint-disable-next-line eqeqeq
            outermostContext = context == document || context || outermost;
        }

        // Add elements passing elementMatchers directly to results
        // Support: IE<9, Safari
        // Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
        for ( ; i !== len && ( elem = elems[ i ] ) != null; i++ ) {
            if ( byElement && elem ) {
                j = 0;

                // Support: IE 11+, Edge 17 - 18+
                // IE/Edge sometimes throw a "Permission denied" error when strict-comparing
                // two documents; shallow comparisons work.
                // eslint-disable-next-line eqeqeq
                if ( !context && elem.ownerDocument != document ) {
                    setDocument( elem );
                    xml = !documentIsHTML;
                }
                while ( ( matcher = elementMatchers[ j++ ] ) ) {
                    if ( matcher( elem, context || document, xml ) ) {
                        results.push( elem );
                        break;
                    }
                }
                if ( outermost ) {
                    dirruns = dirrunsUnique;
                }
            }

            // Track unmatched elements for set filters
            if ( bySet ) {

                // They will have gone through all possible matchers
                if ( ( elem = !matcher && elem ) ) {
                    matchedCount--;
                }

                // Lengthen the array for every element, matched or not
                if ( seed ) {
                    unmatched.push( elem );
                }
            }
        }

        // `i` is now the count of elements visited above, and adding it to `matchedCount`
        // makes the latter nonnegative.
        matchedCount += i;

        // Apply set filters to unmatched elements
        // NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
        // equals `i`), unless we didn't visit _any_ elements in the above loop because we have
        // no element matchers and no seed.
        // Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
        // case, which will result in a "00" `matchedCount` that differs from `i` but is also
        // numerically zero.
        if ( bySet && i !== matchedCount ) {
            j = 0;
            while ( ( matcher = setMatchers[ j++ ] ) ) {
                matcher( unmatched, setMatched, context, xml );
            }

            if ( seed ) {

                // Reintegrate element matches to eliminate the need for sorting
                if ( matchedCount > 0 ) {
                    while ( i-- ) {
                        if ( !( unmatched[ i ] || setMatched[ i ] ) ) {
                            setMatched[ i ] = pop.call( results );
                        }
                    }
                }

                // Discard index placeholder values to get only actual matches
                setMatched = condense( setMatched );
            }

            // Add matches to results
            push.apply( results, setMatched );

            // Seedless set matches succeeding multiple successful matchers stipulate sorting
            if ( outermost && !seed && setMatched.length > 0 &&
                ( matchedCount + setMatchers.length ) > 1 ) {

                Sizzle.uniqueSort( results );
            }
        }

        // Override manipulation of globals by nested matchers
        if ( outermost ) {
            dirruns = dirrunsUnique;
            outermostContext = contextBackup;
        }

        return unmatched;
    };

return bySet ?
    markFunction( superMatcher ) :
    superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
var i,
    setMatchers = [],
    elementMatchers = [],
    cached = compilerCache[ selector + " " ];

if ( !cached ) {

    // Generate a function of recursive functions that can be used to check each element
    if ( !match ) {
        match = tokenize( selector );
    }
    i = match.length;
    while ( i-- ) {
        cached = matcherFromTokens( match[ i ] );
        if ( cached[ expando ] ) {
            setMatchers.push( cached );
        } else {
            elementMatchers.push( cached );
        }
    }

    // Cache the compiled function
    cached = compilerCache(
        selector,
        matcherFromGroupMatchers( elementMatchers, setMatchers )
    );

    // Save selector and tokenization
    cached.selector = selector;
}
return cached;
};

/**
* A low-level selection function that works with Sizzle's compiled
*  selector functions
* @param {String|Function} selector A selector or a pre-compiled
*  selector function built with Sizzle.compile
* @param {Element} context
* @param {Array} [results]
* @param {Array} [seed] A set of elements to match against
*/
select = Sizzle.select = function( selector, context, results, seed ) {
var i, tokens, token, type, find,
    compiled = typeof selector === "function" && selector,
    match = !seed && tokenize( ( selector = compiled.selector || selector ) );

results = results || [];

// Try to minimize operations if there is only one selector in the list and no seed
// (the latter of which guarantees us context)
if ( match.length === 1 ) {

    // Reduce context if the leading compound selector is an ID
    tokens = match[ 0 ] = match[ 0 ].slice( 0 );
    if ( tokens.length > 2 && ( token = tokens[ 0 ] ).type === "ID" &&
        context.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[ 1 ].type ] ) {

        context = ( Expr.find[ "ID" ]( token.matches[ 0 ]
            .replace( runescape, funescape ), context ) || [] )[ 0 ];
        if ( !context ) {
            return results;

        // Precompiled matchers will still verify ancestry, so step up a level
        } else if ( compiled ) {
            context = context.parentNode;
        }

        selector = selector.slice( tokens.shift().value.length );
    }

    // Fetch a seed set for right-to-left matching
    i = matchExpr[ "needsContext" ].test( selector ) ? 0 : tokens.length;
    while ( i-- ) {
        token = tokens[ i ];

        // Abort if we hit a combinator
        if ( Expr.relative[ ( type = token.type ) ] ) {
            break;
        }
        if ( ( find = Expr.find[ type ] ) ) {

            // Search, expanding context for leading sibling combinators
            if ( ( seed = find(
                token.matches[ 0 ].replace( runescape, funescape ),
                rsibling.test( tokens[ 0 ].type ) && testContext( context.parentNode ) ||
                    context
            ) ) ) {

                // If seed is empty or no tokens remain, we can return early
                tokens.splice( i, 1 );
                selector = seed.length && toSelector( tokens );
                if ( !selector ) {
                    push.apply( results, seed );
                    return results;
                }

                break;
            }
        }
    }
}

// Compile and execute a filtering function if one is not provided
// Provide `match` to avoid retokenization if we modified the selector above
( compiled || compile( selector, match ) )(
    seed,
    context,
    !documentIsHTML,
    results,
    !context || rsibling.test( selector ) && testContext( context.parentNode ) || context
);
return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split( "" ).sort( sortOrder ).join( "" ) === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert( function( el ) {

// Should return 1, but returns 4 (following)
return el.compareDocumentPosition( document.createElement( "fieldset" ) ) & 1;
} );

// Support: IE<8
// Prevent attribute/property "interpolation"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert( function( el ) {
el.innerHTML = "<a href='#'></a>";
return el.firstChild.getAttribute( "href" ) === "#";
} ) ) {
addHandle( "type|href|height|width", function( elem, name, isXML ) {
    if ( !isXML ) {
        return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
    }
} );
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert( function( el ) {
el.innerHTML = "<input/>";
el.firstChild.setAttribute( "value", "" );
return el.firstChild.getAttribute( "value" ) === "";
} ) ) {
addHandle( "value", function( elem, _name, isXML ) {
    if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
        return elem.defaultValue;
    }
} );
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert( function( el ) {
return el.getAttribute( "disabled" ) == null;
} ) ) {
addHandle( booleans, function( elem, name, isXML ) {
    var val;
    if ( !isXML ) {
        return elem[ name ] === true ? name.toLowerCase() :
            ( val = elem.getAttributeNode( name ) ) && val.specified ?
                val.value :
                null;
    }
} );
}

return Sizzle;

} )( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
var matched = [],
    truncate = until !== undefined;

while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
    if ( elem.nodeType === 1 ) {
        if ( truncate && jQuery( elem ).is( until ) ) {
            break;
        }
        matched.push( elem );
    }
}
return matched;
};


var siblings = function( n, elem ) {
var matched = [];

for ( ; n; n = n.nextSibling ) {
    if ( n.nodeType === 1 && n !== elem ) {
        matched.push( n );
    }
}

return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

};
var rsingleTag = ( /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
if ( isFunction( qualifier ) ) {
    return jQuery.grep( elements, function( elem, i ) {
        return !!qualifier.call( elem, i, elem ) !== not;
    } );
}

// Single element
if ( qualifier.nodeType ) {
    return jQuery.grep( elements, function( elem ) {
        return ( elem === qualifier ) !== not;
    } );
}

// Arraylike of elements (jQuery, arguments, Array)
if ( typeof qualifier !== "string" ) {
    return jQuery.grep( elements, function( elem ) {
        return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
    } );
}

// Filtered directly for both simple and complex selectors
return jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
var elem = elems[ 0 ];

if ( not ) {
    expr = ":not(" + expr + ")";
}

if ( elems.length === 1 && elem.nodeType === 1 ) {
    return jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
}

return jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
    return elem.nodeType === 1;
} ) );
};

jQuery.fn.extend( {
find: function( selector ) {
    var i, ret,
        len = this.length,
        self = this;

    if ( typeof selector !== "string" ) {
        return this.pushStack( jQuery( selector ).filter( function() {
            for ( i = 0; i < len; i++ ) {
                if ( jQuery.contains( self[ i ], this ) ) {
                    return true;
                }
            }
        } ) );
    }

    ret = this.pushStack( [] );

    for ( i = 0; i < len; i++ ) {
        jQuery.find( selector, self[ i ], ret );
    }

    return len > 1 ? jQuery.uniqueSort( ret ) : ret;
},
filter: function( selector ) {
    return this.pushStack( winnow( this, selector || [], false ) );
},
not: function( selector ) {
    return this.pushStack( winnow( this, selector || [], true ) );
},
is: function( selector ) {
    return !!winnow(
        this,

        // If this is a positional/relative selector, check membership in the returned set
        // so $("p:first").is("p:last") won't return true for a doc with two "p".
        typeof selector === "string" && rneedsContext.test( selector ) ?
            jQuery( selector ) :
            selector || [],
        false
    ).length;
}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

// A simple way to check for HTML strings
// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
// Strict HTML recognition (#11290: must start with <)
// Shortcut simple #id case for speed
rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,

init = jQuery.fn.init = function( selector, context, root ) {
    var match, elem;

    // HANDLE: $(""), $(null), $(undefined), $(false)
    if ( !selector ) {
        return this;
    }

    // Method init() accepts an alternate rootjQuery
    // so migrate can support jQuery.sub (gh-2101)
    root = root || rootjQuery;

    // Handle HTML strings
    if ( typeof selector === "string" ) {
        if ( selector[ 0 ] === "<" &&
            selector[ selector.length - 1 ] === ">" &&
            selector.length >= 3 ) {

            // Assume that strings that start and end with <> are HTML and skip the regex check
            match = [ null, selector, null ];

        } else {
            match = rquickExpr.exec( selector );
        }

        // Match html or make sure no context is specified for #id
        if ( match && ( match[ 1 ] || !context ) ) {

            // HANDLE: $(html) -> $(array)
            if ( match[ 1 ] ) {
                context = context instanceof jQuery ? context[ 0 ] : context;

                // Option to run scripts is true for back-compat
                // Intentionally let the error be thrown if parseHTML is not present
                jQuery.merge( this, jQuery.parseHTML(
                    match[ 1 ],
                    context && context.nodeType ? context.ownerDocument || context : document,
                    true
                ) );

                // HANDLE: $(html, props)
                if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
                    for ( match in context ) {

                        // Properties of context are called as methods if possible
                        if ( isFunction( this[ match ] ) ) {
                            this[ match ]( context[ match ] );

                        // ...and otherwise set as attributes
                        } else {
                            this.attr( match, context[ match ] );
                        }
                    }
                }

                return this;

            // HANDLE: $(#id)
            } else {
                elem = document.getElementById( match[ 2 ] );

                if ( elem ) {

                    // Inject the element directly into the jQuery object
                    this[ 0 ] = elem;
                    this.length = 1;
                }
                return this;
            }

        // HANDLE: $(expr, $(...))
        } else if ( !context || context.jquery ) {
            return ( context || root ).find( selector );

        // HANDLE: $(expr, context)
        // (which is just equivalent to: $(context).find(expr)
        } else {
            return this.constructor( context ).find( selector );
        }

    // HANDLE: $(DOMElement)
    } else if ( selector.nodeType ) {
        this[ 0 ] = selector;
        this.length = 1;
        return this;

    // HANDLE: $(function)
    // Shortcut for document ready
    } else if ( isFunction( selector ) ) {
        return root.ready !== undefined ?
            root.ready( selector ) :

            // Execute immediately if ready is not present
            selector( jQuery );
    }

    return jQuery.makeArray( selector, this );
};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

// Methods guaranteed to produce a unique set when starting from a unique set
guaranteedUnique = {
    children: true,
    contents: true,
    next: true,
    prev: true
};

jQuery.fn.extend( {
has: function( target ) {
    var targets = jQuery( target, this ),
        l = targets.length;

    return this.filter( function() {
        var i = 0;
        for ( ; i < l; i++ ) {
            if ( jQuery.contains( this, targets[ i ] ) ) {
                return true;
            }
        }
    } );
},

closest: function( selectors, context ) {
    var cur,
        i = 0,
        l = this.length,
        matched = [],
        targets = typeof selectors !== "string" && jQuery( selectors );

    // Positional selectors never match, since there's no _selection_ context
    if ( !rneedsContext.test( selectors ) ) {
        for ( ; i < l; i++ ) {
            for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

                // Always skip document fragments
                if ( cur.nodeType < 11 && ( targets ?
                    targets.index( cur ) > -1 :

                    // Don't pass non-elements to Sizzle
                    cur.nodeType === 1 &&
                        jQuery.find.matchesSelector( cur, selectors ) ) ) {

                    matched.push( cur );
                    break;
                }
            }
        }
    }

    return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
},

// Determine the position of an element within the set
index: function( elem ) {

    // No argument, return index in parent
    if ( !elem ) {
        return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
    }

    // Index in selector
    if ( typeof elem === "string" ) {
        return indexOf.call( jQuery( elem ), this[ 0 ] );
    }

    // Locate the position of the desired element
    return indexOf.call( this,

        // If it receives a jQuery object, the first element is used
        elem.jquery ? elem[ 0 ] : elem
    );
},

add: function( selector, context ) {
    return this.pushStack(
        jQuery.uniqueSort(
            jQuery.merge( this.get(), jQuery( selector, context ) )
        )
    );
},

addBack: function( selector ) {
    return this.add( selector == null ?
        this.prevObject : this.prevObject.filter( selector )
    );
}
} );

function sibling( cur, dir ) {
while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
return cur;
}

jQuery.each( {
parent: function( elem ) {
    var parent = elem.parentNode;
    return parent && parent.nodeType !== 11 ? parent : null;
},
parents: function( elem ) {
    return dir( elem, "parentNode" );
},
parentsUntil: function( elem, _i, until ) {
    return dir( elem, "parentNode", until );
},
next: function( elem ) {
    return sibling( elem, "nextSibling" );
},
prev: function( elem ) {
    return sibling( elem, "previousSibling" );
},
nextAll: function( elem ) {
    return dir( elem, "nextSibling" );
},
prevAll: function( elem ) {
    return dir( elem, "previousSibling" );
},
nextUntil: function( elem, _i, until ) {
    return dir( elem, "nextSibling", until );
},
prevUntil: function( elem, _i, until ) {
    return dir( elem, "previousSibling", until );
},
siblings: function( elem ) {
    return siblings( ( elem.parentNode || {} ).firstChild, elem );
},
children: function( elem ) {
    return siblings( elem.firstChild );
},
contents: function( elem ) {
    if ( elem.contentDocument != null &&

        // Support: IE 11+
        // <object> elements with no `data` attribute has an object
        // `contentDocument` with a `null` prototype.
        getProto( elem.contentDocument ) ) {

        return elem.contentDocument;
    }

    // Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
    // Treat the template element as a regular one in browsers that
    // don't support it.
    if ( nodeName( elem, "template" ) ) {
        elem = elem.content || elem;
    }

    return jQuery.merge( [], elem.childNodes );
}
}, function( name, fn ) {
jQuery.fn[ name ] = function( until, selector ) {
    var matched = jQuery.map( this, fn, until );

    if ( name.slice( -5 ) !== "Until" ) {
        selector = until;
    }

    if ( selector && typeof selector === "string" ) {
        matched = jQuery.filter( selector, matched );
    }

    if ( this.length > 1 ) {

        // Remove duplicates
        if ( !guaranteedUnique[ name ] ) {
            jQuery.uniqueSort( matched );
        }

        // Reverse order for parents* and prev-derivatives
        if ( rparentsprev.test( name ) ) {
            matched.reverse();
        }
    }

    return this.pushStack( matched );
};
} );
var rnothtmlwhite = ( /[^\x20\t\r\n\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
var object = {};
jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
    object[ flag ] = true;
} );
return object;
}

/*
* Create a callback list using the following parameters:
*
*	options: an optional list of space-separated options that will change how
*			the callback list behaves or a more traditional option object
*
* By default a callback list will act like an event callback list and can be
* "fired" multiple times.
*
* Possible options:
*
*	once:			will ensure the callback list can only be fired once (like a Deferred)
*
*	memory:			will keep track of previous values and will call any callback added
*					after the list has been fired right away with the latest "memorized"
*					values (like a Deferred)
*
*	unique:			will ensure a callback can only be added once (no duplicate in the list)
*
*	stopOnFalse:	interrupt callings when a callback returns false
*
*/
jQuery.Callbacks = function( options ) {

// Convert options from String-formatted to Object-formatted if needed
// (we check in cache first)
options = typeof options === "string" ?
    createOptions( options ) :
    jQuery.extend( {}, options );

var // Flag to know if list is currently firing
    firing,

    // Last fire value for non-forgettable lists
    memory,

    // Flag to know if list was already fired
    fired,

    // Flag to prevent firing
    locked,

    // Actual callback list
    list = [],

    // Queue of execution data for repeatable lists
    queue = [],

    // Index of currently firing callback (modified by add/remove as needed)
    firingIndex = -1,

    // Fire callbacks
    fire = function() {

        // Enforce single-firing
        locked = locked || options.once;

        // Execute callbacks for all pending executions,
        // respecting firingIndex overrides and runtime changes
        fired = firing = true;
        for ( ; queue.length; firingIndex = -1 ) {
            memory = queue.shift();
            while ( ++firingIndex < list.length ) {

                // Run callback and check for early termination
                if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
                    options.stopOnFalse ) {

                    // Jump to end and forget the data so .add doesn't re-fire
                    firingIndex = list.length;
                    memory = false;
                }
            }
        }

        // Forget the data if we're done with it
        if ( !options.memory ) {
            memory = false;
        }

        firing = false;

        // Clean up if we're done firing for good
        if ( locked ) {

            // Keep an empty list if we have data for future add calls
            if ( memory ) {
                list = [];

            // Otherwise, this object is spent
            } else {
                list = "";
            }
        }
    },

    // Actual Callbacks object
    self = {

        // Add a callback or a collection of callbacks to the list
        add: function() {
            if ( list ) {

                // If we have memory from a past run, we should fire after adding
                if ( memory && !firing ) {
                    firingIndex = list.length - 1;
                    queue.push( memory );
                }

                ( function add( args ) {
                    jQuery.each( args, function( _, arg ) {
                        if ( isFunction( arg ) ) {
                            if ( !options.unique || !self.has( arg ) ) {
                                list.push( arg );
                            }
                        } else if ( arg && arg.length && toType( arg ) !== "string" ) {

                            // Inspect recursively
                            add( arg );
                        }
                    } );
                } )( arguments );

                if ( memory && !firing ) {
                    fire();
                }
            }
            return this;
        },

        // Remove a callback from the list
        remove: function() {
            jQuery.each( arguments, function( _, arg ) {
                var index;
                while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
                    list.splice( index, 1 );

                    // Handle firing indexes
                    if ( index <= firingIndex ) {
                        firingIndex--;
                    }
                }
            } );
            return this;
        },

        // Check if a given callback is in the list.
        // If no argument is given, return whether or not list has callbacks attached.
        has: function( fn ) {
            return fn ?
                jQuery.inArray( fn, list ) > -1 :
                list.length > 0;
        },

        // Remove all callbacks from the list
        empty: function() {
            if ( list ) {
                list = [];
            }
            return this;
        },

        // Disable .fire and .add
        // Abort any current/pending executions
        // Clear all callbacks and values
        disable: function() {
            locked = queue = [];
            list = memory = "";
            return this;
        },
        disabled: function() {
            return !list;
        },

        // Disable .fire
        // Also disable .add unless we have memory (since it would have no effect)
        // Abort any pending executions
        lock: function() {
            locked = queue = [];
            if ( !memory && !firing ) {
                list = memory = "";
            }
            return this;
        },
        locked: function() {
            return !!locked;
        },

        // Call all callbacks with the given context and arguments
        fireWith: function( context, args ) {
            if ( !locked ) {
                args = args || [];
                args = [ context, args.slice ? args.slice() : args ];
                queue.push( args );
                if ( !firing ) {
                    fire();
                }
            }
            return this;
        },

        // Call all the callbacks with the given arguments
        fire: function() {
            self.fireWith( this, arguments );
            return this;
        },

        // To know if the callbacks have already been called at least once
        fired: function() {
            return !!fired;
        }
    };

return self;
};


function Identity( v ) {
return v;
}
function Thrower( ex ) {
throw ex;
}

function adoptValue( value, resolve, reject, noValue ) {
var method;

try {

    // Check for promise aspect first to privilege synchronous behavior
    if ( value && isFunction( ( method = value.promise ) ) ) {
        method.call( value ).done( resolve ).fail( reject );

    // Other thenables
    } else if ( value && isFunction( ( method = value.then ) ) ) {
        method.call( value, resolve, reject );

    // Other non-thenables
    } else {

        // Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
        // * false: [ value ].slice( 0 ) => resolve( value )
        // * true: [ value ].slice( 1 ) => resolve()
        resolve.apply( undefined, [ value ].slice( noValue ) );
    }

// For Promises/A+, convert exceptions into rejections
// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
// Deferred#then to conditionally suppress rejection.
} catch ( value ) {

    // Support: Android 4.0 only
    // Strict mode functions invoked without .call/.apply get global-object context
    reject.apply( undefined, [ value ] );
}
}

jQuery.extend( {

Deferred: function( func ) {
    var tuples = [

            // action, add listener, callbacks,
            // ... .then handlers, argument index, [final state]
            [ "notify", "progress", jQuery.Callbacks( "memory" ),
                jQuery.Callbacks( "memory" ), 2 ],
            [ "resolve", "done", jQuery.Callbacks( "once memory" ),
                jQuery.Callbacks( "once memory" ), 0, "resolved" ],
            [ "reject", "fail", jQuery.Callbacks( "once memory" ),
                jQuery.Callbacks( "once memory" ), 1, "rejected" ]
        ],
        state = "pending",
        promise = {
            state: function() {
                return state;
            },
            always: function() {
                deferred.done( arguments ).fail( arguments );
                return this;
            },
            "catch": function( fn ) {
                return promise.then( null, fn );
            },

            // Keep pipe for back-compat
            pipe: function( /* fnDone, fnFail, fnProgress */ ) {
                var fns = arguments;

                return jQuery.Deferred( function( newDefer ) {
                    jQuery.each( tuples, function( _i, tuple ) {

                        // Map tuples (progress, done, fail) to arguments (done, fail, progress)
                        var fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

                        // deferred.progress(function() { bind to newDefer or newDefer.notify })
                        // deferred.done(function() { bind to newDefer or newDefer.resolve })
                        // deferred.fail(function() { bind to newDefer or newDefer.reject })
                        deferred[ tuple[ 1 ] ]( function() {
                            var returned = fn && fn.apply( this, arguments );
                            if ( returned && isFunction( returned.promise ) ) {
                                returned.promise()
                                    .progress( newDefer.notify )
                                    .done( newDefer.resolve )
                                    .fail( newDefer.reject );
                            } else {
                                newDefer[ tuple[ 0 ] + "With" ](
                                    this,
                                    fn ? [ returned ] : arguments
                                );
                            }
                        } );
                    } );
                    fns = null;
                } ).promise();
            },
            then: function( onFulfilled, onRejected, onProgress ) {
                var maxDepth = 0;
                function resolve( depth, deferred, handler, special ) {
                    return function() {
                        var that = this,
                            args = arguments,
                            mightThrow = function() {
                                var returned, then;

                                // Support: Promises/A+ section 2.3.3.3.3
                                // https://promisesaplus.com/#point-59
                                // Ignore double-resolution attempts
                                if ( depth < maxDepth ) {
                                    return;
                                }

                                returned = handler.apply( that, args );

                                // Support: Promises/A+ section 2.3.1
                                // https://promisesaplus.com/#point-48
                                if ( returned === deferred.promise() ) {
                                    throw new TypeError( "Thenable self-resolution" );
                                }

                                // Support: Promises/A+ sections 2.3.3.1, 3.5
                                // https://promisesaplus.com/#point-54
                                // https://promisesaplus.com/#point-75
                                // Retrieve `then` only once
                                then = returned &&

                                    // Support: Promises/A+ section 2.3.4
                                    // https://promisesaplus.com/#point-64
                                    // Only check objects and functions for thenability
                                    ( typeof returned === "object" ||
                                        typeof returned === "function" ) &&
                                    returned.then;

                                // Handle a returned thenable
                                if ( isFunction( then ) ) {

                                    // Special processors (notify) just wait for resolution
                                    if ( special ) {
                                        then.call(
                                            returned,
                                            resolve( maxDepth, deferred, Identity, special ),
                                            resolve( maxDepth, deferred, Thrower, special )
                                        );

                                    // Normal processors (resolve) also hook into progress
                                    } else {

                                        // ...and disregard older resolution values
                                        maxDepth++;

                                        then.call(
                                            returned,
                                            resolve( maxDepth, deferred, Identity, special ),
                                            resolve( maxDepth, deferred, Thrower, special ),
                                            resolve( maxDepth, deferred, Identity,
                                                deferred.notifyWith )
                                        );
                                    }

                                // Handle all other returned values
                                } else {

                                    // Only substitute handlers pass on context
                                    // and multiple values (non-spec behavior)
                                    if ( handler !== Identity ) {
                                        that = undefined;
                                        args = [ returned ];
                                    }

                                    // Process the value(s)
                                    // Default process is resolve
                                    ( special || deferred.resolveWith )( that, args );
                                }
                            },

                            // Only normal processors (resolve) catch and reject exceptions
                            process = special ?
                                mightThrow :
                                function() {
                                    try {
                                        mightThrow();
                                    } catch ( e ) {

                                        if ( jQuery.Deferred.exceptionHook ) {
                                            jQuery.Deferred.exceptionHook( e,
                                                process.stackTrace );
                                        }

                                        // Support: Promises/A+ section 2.3.3.3.4.1
                                        // https://promisesaplus.com/#point-61
                                        // Ignore post-resolution exceptions
                                        if ( depth + 1 >= maxDepth ) {

                                            // Only substitute handlers pass on context
                                            // and multiple values (non-spec behavior)
                                            if ( handler !== Thrower ) {
                                                that = undefined;
                                                args = [ e ];
                                            }

                                            deferred.rejectWith( that, args );
                                        }
                                    }
                                };

                        // Support: Promises/A+ section 2.3.3.3.1
                        // https://promisesaplus.com/#point-57
                        // Re-resolve promises immediately to dodge false rejection from
                        // subsequent errors
                        if ( depth ) {
                            process();
                        } else {

                            // Call an optional hook to record the stack, in case of exception
                            // since it's otherwise lost when execution goes async
                            if ( jQuery.Deferred.getStackHook ) {
                                process.stackTrace = jQuery.Deferred.getStackHook();
                            }
                            window.setTimeout( process );
                        }
                    };
                }

                return jQuery.Deferred( function( newDefer ) {

                    // progress_handlers.add( ... )
                    tuples[ 0 ][ 3 ].add(
                        resolve(
                            0,
                            newDefer,
                            isFunction( onProgress ) ?
                                onProgress :
                                Identity,
                            newDefer.notifyWith
                        )
                    );

                    // fulfilled_handlers.add( ... )
                    tuples[ 1 ][ 3 ].add(
                        resolve(
                            0,
                            newDefer,
                            isFunction( onFulfilled ) ?
                                onFulfilled :
                                Identity
                        )
                    );

                    // rejected_handlers.add( ... )
                    tuples[ 2 ][ 3 ].add(
                        resolve(
                            0,
                            newDefer,
                            isFunction( onRejected ) ?
                                onRejected :
                                Thrower
                        )
                    );
                } ).promise();
            },

            // Get a promise for this deferred
            // If obj is provided, the promise aspect is added to the object
            promise: function( obj ) {
                return obj != null ? jQuery.extend( obj, promise ) : promise;
            }
        },
        deferred = {};

    // Add list-specific methods
    jQuery.each( tuples, function( i, tuple ) {
        var list = tuple[ 2 ],
            stateString = tuple[ 5 ];

        // promise.progress = list.add
        // promise.done = list.add
        // promise.fail = list.add
        promise[ tuple[ 1 ] ] = list.add;

        // Handle state
        if ( stateString ) {
            list.add(
                function() {

                    // state = "resolved" (i.e., fulfilled)
                    // state = "rejected"
                    state = stateString;
                },

                // rejected_callbacks.disable
                // fulfilled_callbacks.disable
                tuples[ 3 - i ][ 2 ].disable,

                // rejected_handlers.disable
                // fulfilled_handlers.disable
                tuples[ 3 - i ][ 3 ].disable,

                // progress_callbacks.lock
                tuples[ 0 ][ 2 ].lock,

                // progress_handlers.lock
                tuples[ 0 ][ 3 ].lock
            );
        }

        // progress_handlers.fire
        // fulfilled_handlers.fire
        // rejected_handlers.fire
        list.add( tuple[ 3 ].fire );

        // deferred.notify = function() { deferred.notifyWith(...) }
        // deferred.resolve = function() { deferred.resolveWith(...) }
        // deferred.reject = function() { deferred.rejectWith(...) }
        deferred[ tuple[ 0 ] ] = function() {
            deferred[ tuple[ 0 ] + "With" ]( this === deferred ? undefined : this, arguments );
            return this;
        };

        // deferred.notifyWith = list.fireWith
        // deferred.resolveWith = list.fireWith
        // deferred.rejectWith = list.fireWith
        deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
    } );

    // Make the deferred a promise
    promise.promise( deferred );

    // Call given func if any
    if ( func ) {
        func.call( deferred, deferred );
    }

    // All done!
    return deferred;
},

// Deferred helper
when: function( singleValue ) {
    var

        // count of uncompleted subordinates
        remaining = arguments.length,

        // count of unprocessed arguments
        i = remaining,

        // subordinate fulfillment data
        resolveContexts = Array( i ),
        resolveValues = slice.call( arguments ),

        // the master Deferred
        master = jQuery.Deferred(),

        // subordinate callback factory
        updateFunc = function( i ) {
            return function( value ) {
                resolveContexts[ i ] = this;
                resolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
                if ( !( --remaining ) ) {
                    master.resolveWith( resolveContexts, resolveValues );
                }
            };
        };

    // Single- and empty arguments are adopted like Promise.resolve
    if ( remaining <= 1 ) {
        adoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject,
            !remaining );

        // Use .then() to unwrap secondary thenables (cf. gh-3000)
        if ( master.state() === "pending" ||
            isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

            return master.then();
        }
    }

    // Multiple arguments are aggregated like Promise.all array elements
    while ( i-- ) {
        adoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
    }

    return master.promise();
}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

// Support: IE 8 - 9 only
// Console exists when dev tools are open, which can happen at any time
if ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
    window.console.warn( "jQuery.Deferred exception: " + error.message, error.stack, stack );
}
};




jQuery.readyException = function( error ) {
window.setTimeout( function() {
    throw error;
} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

readyList
    .then( fn )

    // Wrap jQuery.readyException in a function so that the lookup
    // happens at the time of error handling instead of callback
    // registration.
    .catch( function( error ) {
        jQuery.readyException( error );
    } );

return this;
};

jQuery.extend( {

// Is the DOM ready to be used? Set to true once it occurs.
isReady: false,

// A counter to track how many items to wait for before
// the ready event fires. See #6781
readyWait: 1,

// Handle when the DOM is ready
ready: function( wait ) {

    // Abort if there are pending holds or we're already ready
    if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
        return;
    }

    // Remember that the DOM is ready
    jQuery.isReady = true;

    // If a normal DOM Ready event fired, decrement, and wait if need be
    if ( wait !== true && --jQuery.readyWait > 0 ) {
        return;
    }

    // If there are functions bound, to execute
    readyList.resolveWith( document, [ jQuery ] );
}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
document.removeEventListener( "DOMContentLoaded", completed );
window.removeEventListener( "load", completed );
jQuery.ready();
}

// Catch cases where $(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals "interactive" too soon
if ( document.readyState === "complete" ||
( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

// Handle it asynchronously to allow scripts the opportunity to delay ready
window.setTimeout( jQuery.ready );

} else {

// Use the handy event callback
document.addEventListener( "DOMContentLoaded", completed );

// A fallback to window.onload, that will always work
window.addEventListener( "load", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
var i = 0,
    len = elems.length,
    bulk = key == null;

// Sets many values
if ( toType( key ) === "object" ) {
    chainable = true;
    for ( i in key ) {
        access( elems, fn, i, key[ i ], true, emptyGet, raw );
    }

// Sets one value
} else if ( value !== undefined ) {
    chainable = true;

    if ( !isFunction( value ) ) {
        raw = true;
    }

    if ( bulk ) {

        // Bulk operations run against the entire set
        if ( raw ) {
            fn.call( elems, value );
            fn = null;

        // ...except when executing function values
        } else {
            bulk = fn;
            fn = function( elem, _key, value ) {
                return bulk.call( jQuery( elem ), value );
            };
        }
    }

    if ( fn ) {
        for ( ; i < len; i++ ) {
            fn(
                elems[ i ], key, raw ?
                value :
                value.call( elems[ i ], i, fn( elems[ i ], key ) )
            );
        }
    }
}

if ( chainable ) {
    return elems;
}

// Gets
if ( bulk ) {
    return fn.call( elems );
}

return len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
rdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( _all, letter ) {
return letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

// Accepts only:
//  - Node
//    - Node.ELEMENT_NODE
//    - Node.DOCUMENT_NODE
//  - Object
//    - Any
return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
this.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

cache: function( owner ) {

    // Check if the owner object already has a cache
    var value = owner[ this.expando ];

    // If not, create one
    if ( !value ) {
        value = {};

        // We can accept data for non-element nodes in modern browsers,
        // but we should not, see #8335.
        // Always return an empty object.
        if ( acceptData( owner ) ) {

            // If it is a node unlikely to be stringify-ed or looped over
            // use plain assignment
            if ( owner.nodeType ) {
                owner[ this.expando ] = value;

            // Otherwise secure it in a non-enumerable property
            // configurable must be true to allow the property to be
            // deleted when data is removed
            } else {
                Object.defineProperty( owner, this.expando, {
                    value: value,
                    configurable: true
                } );
            }
        }
    }

    return value;
},
set: function( owner, data, value ) {
    var prop,
        cache = this.cache( owner );

    // Handle: [ owner, key, value ] args
    // Always use camelCase key (gh-2257)
    if ( typeof data === "string" ) {
        cache[ camelCase( data ) ] = value;

    // Handle: [ owner, { properties } ] args
    } else {

        // Copy the properties one-by-one to the cache object
        for ( prop in data ) {
            cache[ camelCase( prop ) ] = data[ prop ];
        }
    }
    return cache;
},
get: function( owner, key ) {
    return key === undefined ?
        this.cache( owner ) :

        // Always use camelCase key (gh-2257)
        owner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
},
access: function( owner, key, value ) {

    // In cases where either:
    //
    //   1. No key was specified
    //   2. A string key was specified, but no value provided
    //
    // Take the "read" path and allow the get method to determine
    // which value to return, respectively either:
    //
    //   1. The entire cache object
    //   2. The data stored at the key
    //
    if ( key === undefined ||
            ( ( key && typeof key === "string" ) && value === undefined ) ) {

        return this.get( owner, key );
    }

    // When the key is not a string, or both a key and value
    // are specified, set or extend (existing objects) with either:
    //
    //   1. An object of properties
    //   2. A key and value
    //
    this.set( owner, key, value );

    // Since the "set" path can have two possible entry points
    // return the expected data based on which path was taken[*]
    return value !== undefined ? value : key;
},
remove: function( owner, key ) {
    var i,
        cache = owner[ this.expando ];

    if ( cache === undefined ) {
        return;
    }

    if ( key !== undefined ) {

        // Support array or space separated string of keys
        if ( Array.isArray( key ) ) {

            // If key is an array of keys...
            // We always set camelCase keys, so remove that.
            key = key.map( camelCase );
        } else {
            key = camelCase( key );

            // If a key with the spaces exists, use it.
            // Otherwise, create an array by matching non-whitespace
            key = key in cache ?
                [ key ] :
                ( key.match( rnothtmlwhite ) || [] );
        }

        i = key.length;

        while ( i-- ) {
            delete cache[ key[ i ] ];
        }
    }

    // Remove the expando if there's no more data
    if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

        // Support: Chrome <=35 - 45
        // Webkit & Blink performance suffers when deleting properties
        // from DOM nodes, so set to undefined instead
        // https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
        if ( owner.nodeType ) {
            owner[ this.expando ] = undefined;
        } else {
            delete owner[ this.expando ];
        }
    }
},
hasData: function( owner ) {
    var cache = owner[ this.expando ];
    return cache !== undefined && !jQuery.isEmptyObject( cache );
}
};
var dataPriv = new Data();

var dataUser = new Data();



//	Implementation Summary
//
//	1. Enforce API surface and semantic compatibility with 1.9.x branch
//	2. Improve the module's maintainability by reducing the storage
//		paths to a single mechanism.
//	3. Use the same single mechanism to support "private" and "user" data.
//	4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
//	5. Avoid exposing implementation details on user objects (eg. expando properties)
//	6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
rmultiDash = /[A-Z]/g;

function getData( data ) {
if ( data === "true" ) {
    return true;
}

if ( data === "false" ) {
    return false;
}

if ( data === "null" ) {
    return null;
}

// Only convert to a number if it doesn't change the string
if ( data === +data + "" ) {
    return +data;
}

if ( rbrace.test( data ) ) {
    return JSON.parse( data );
}

return data;
}

function dataAttr( elem, key, data ) {
var name;

// If nothing was found internally, try to fetch any
// data from the HTML5 data-* attribute
if ( data === undefined && elem.nodeType === 1 ) {
    name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
    data = elem.getAttribute( name );

    if ( typeof data === "string" ) {
        try {
            data = getData( data );
        } catch ( e ) {}

        // Make sure we set the data so it isn't changed later
        dataUser.set( elem, key, data );
    } else {
        data = undefined;
    }
}
return data;
}

jQuery.extend( {
hasData: function( elem ) {
    return dataUser.hasData( elem ) || dataPriv.hasData( elem );
},

data: function( elem, name, data ) {
    return dataUser.access( elem, name, data );
},

removeData: function( elem, name ) {
    dataUser.remove( elem, name );
},

// TODO: Now that all calls to _data and _removeData have been replaced
// with direct calls to dataPriv methods, these can be deprecated.
_data: function( elem, name, data ) {
    return dataPriv.access( elem, name, data );
},

_removeData: function( elem, name ) {
    dataPriv.remove( elem, name );
}
} );

jQuery.fn.extend( {
data: function( key, value ) {
    var i, name, data,
        elem = this[ 0 ],
        attrs = elem && elem.attributes;

    // Gets all values
    if ( key === undefined ) {
        if ( this.length ) {
            data = dataUser.get( elem );

            if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
                i = attrs.length;
                while ( i-- ) {

                    // Support: IE 11 only
                    // The attrs elements can be null (#14894)
                    if ( attrs[ i ] ) {
                        name = attrs[ i ].name;
                        if ( name.indexOf( "data-" ) === 0 ) {
                            name = camelCase( name.slice( 5 ) );
                            dataAttr( elem, name, data[ name ] );
                        }
                    }
                }
                dataPriv.set( elem, "hasDataAttrs", true );
            }
        }

        return data;
    }

    // Sets multiple values
    if ( typeof key === "object" ) {
        return this.each( function() {
            dataUser.set( this, key );
        } );
    }

    return access( this, function( value ) {
        var data;

        // The calling jQuery object (element matches) is not empty
        // (and therefore has an element appears at this[ 0 ]) and the
        // `value` parameter was not undefined. An empty jQuery object
        // will result in `undefined` for elem = this[ 0 ] which will
        // throw an exception if an attempt to read a data cache is made.
        if ( elem && value === undefined ) {

            // Attempt to get data from the cache
            // The key will always be camelCased in Data
            data = dataUser.get( elem, key );
            if ( data !== undefined ) {
                return data;
            }

            // Attempt to "discover" the data in
            // HTML5 custom data-* attrs
            data = dataAttr( elem, key );
            if ( data !== undefined ) {
                return data;
            }

            // We tried really hard, but the data doesn't exist.
            return;
        }

        // Set the data...
        this.each( function() {

            // We always store the camelCased key
            dataUser.set( this, key, value );
        } );
    }, null, value, arguments.length > 1, null, true );
},

removeData: function( key ) {
    return this.each( function() {
        dataUser.remove( this, key );
    } );
}
} );


jQuery.extend( {
queue: function( elem, type, data ) {
    var queue;

    if ( elem ) {
        type = ( type || "fx" ) + "queue";
        queue = dataPriv.get( elem, type );

        // Speed up dequeue by getting out quickly if this is just a lookup
        if ( data ) {
            if ( !queue || Array.isArray( data ) ) {
                queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
            } else {
                queue.push( data );
            }
        }
        return queue || [];
    }
},

dequeue: function( elem, type ) {
    type = type || "fx";

    var queue = jQuery.queue( elem, type ),
        startLength = queue.length,
        fn = queue.shift(),
        hooks = jQuery._queueHooks( elem, type ),
        next = function() {
            jQuery.dequeue( elem, type );
        };

    // If the fx queue is dequeued, always remove the progress sentinel
    if ( fn === "inprogress" ) {
        fn = queue.shift();
        startLength--;
    }

    if ( fn ) {

        // Add a progress sentinel to prevent the fx queue from being
        // automatically dequeued
        if ( type === "fx" ) {
            queue.unshift( "inprogress" );
        }

        // Clear up the last queue stop function
        delete hooks.stop;
        fn.call( elem, next, hooks );
    }

    if ( !startLength && hooks ) {
        hooks.empty.fire();
    }
},

// Not public - generate a queueHooks object, or return the current one
_queueHooks: function( elem, type ) {
    var key = type + "queueHooks";
    return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
        empty: jQuery.Callbacks( "once memory" ).add( function() {
            dataPriv.remove( elem, [ type + "queue", key ] );
        } )
    } );
}
} );

jQuery.fn.extend( {
queue: function( type, data ) {
    var setter = 2;

    if ( typeof type !== "string" ) {
        data = type;
        type = "fx";
        setter--;
    }

    if ( arguments.length < setter ) {
        return jQuery.queue( this[ 0 ], type );
    }

    return data === undefined ?
        this :
        this.each( function() {
            var queue = jQuery.queue( this, type, data );

            // Ensure a hooks for this queue
            jQuery._queueHooks( this, type );

            if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
                jQuery.dequeue( this, type );
            }
        } );
},
dequeue: function( type ) {
    return this.each( function() {
        jQuery.dequeue( this, type );
    } );
},
clearQueue: function( type ) {
    return this.queue( type || "fx", [] );
},

// Get a promise resolved when queues of a certain type
// are emptied (fx is the type by default)
promise: function( type, obj ) {
    var tmp,
        count = 1,
        defer = jQuery.Deferred(),
        elements = this,
        i = this.length,
        resolve = function() {
            if ( !( --count ) ) {
                defer.resolveWith( elements, [ elements ] );
            }
        };

    if ( typeof type !== "string" ) {
        obj = type;
        type = undefined;
    }
    type = type || "fx";

    while ( i-- ) {
        tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
        if ( tmp && tmp.empty ) {
            count++;
            tmp.empty.add( resolve );
        }
    }
    resolve();
    return defer.promise( obj );
}
} );
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var documentElement = document.documentElement;



var isAttached = function( elem ) {
        return jQuery.contains( elem.ownerDocument, elem );
    },
    composed = { composed: true };

// Support: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 only
// Check attachment across shadow DOM boundaries when possible (gh-3504)
// Support: iOS 10.0-10.2 only
// Early iOS 10 versions support `attachShadow` but not `getRootNode`,
// leading to errors. We need to check for `getRootNode`.
if ( documentElement.getRootNode ) {
    isAttached = function( elem ) {
        return jQuery.contains( elem.ownerDocument, elem ) ||
            elem.getRootNode( composed ) === elem.ownerDocument;
    };
}
var isHiddenWithinTree = function( elem, el ) {

    // isHiddenWithinTree might be called from jQuery#filter function;
    // in that case, element will be second argument
    elem = el || elem;

    // Inline style trumps all
    return elem.style.display === "none" ||
        elem.style.display === "" &&

        // Otherwise, check computed style
        // Support: Firefox <=43 - 45
        // Disconnected elements can have computed display: none, so first confirm that elem is
        // in the document.
        isAttached( elem ) &&

        jQuery.css( elem, "display" ) === "none";
};



function adjustCSS( elem, prop, valueParts, tween ) {
var adjusted, scale,
    maxIterations = 20,
    currentValue = tween ?
        function() {
            return tween.cur();
        } :
        function() {
            return jQuery.css( elem, prop, "" );
        },
    initial = currentValue(),
    unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

    // Starting value computation is required for potential unit mismatches
    initialInUnit = elem.nodeType &&
        ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
        rcssNum.exec( jQuery.css( elem, prop ) );

if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

    // Support: Firefox <=54
    // Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
    initial = initial / 2;

    // Trust units reported by jQuery.css
    unit = unit || initialInUnit[ 3 ];

    // Iteratively approximate from a nonzero starting point
    initialInUnit = +initial || 1;

    while ( maxIterations-- ) {

        // Evaluate and update our best guess (doubling guesses that zero out).
        // Finish if the scale equals or crosses 1 (making the old*new product non-positive).
        jQuery.style( elem, prop, initialInUnit + unit );
        if ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
            maxIterations = 0;
        }
        initialInUnit = initialInUnit / scale;

    }

    initialInUnit = initialInUnit * 2;
    jQuery.style( elem, prop, initialInUnit + unit );

    // Make sure we update the tween properties later on
    valueParts = valueParts || [];
}

if ( valueParts ) {
    initialInUnit = +initialInUnit || +initial || 0;

    // Apply relative offset (+=/-=) if specified
    adjusted = valueParts[ 1 ] ?
        initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
        +valueParts[ 2 ];
    if ( tween ) {
        tween.unit = unit;
        tween.start = initialInUnit;
        tween.end = adjusted;
    }
}
return adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
var temp,
    doc = elem.ownerDocument,
    nodeName = elem.nodeName,
    display = defaultDisplayMap[ nodeName ];

if ( display ) {
    return display;
}

temp = doc.body.appendChild( doc.createElement( nodeName ) );
display = jQuery.css( temp, "display" );

temp.parentNode.removeChild( temp );

if ( display === "none" ) {
    display = "block";
}
defaultDisplayMap[ nodeName ] = display;

return display;
}

function showHide( elements, show ) {
var display, elem,
    values = [],
    index = 0,
    length = elements.length;

// Determine new display value for elements that need to change
for ( ; index < length; index++ ) {
    elem = elements[ index ];
    if ( !elem.style ) {
        continue;
    }

    display = elem.style.display;
    if ( show ) {

        // Since we force visibility upon cascade-hidden elements, an immediate (and slow)
        // check is required in this first loop unless we have a nonempty display value (either
        // inline or about-to-be-restored)
        if ( display === "none" ) {
            values[ index ] = dataPriv.get( elem, "display" ) || null;
            if ( !values[ index ] ) {
                elem.style.display = "";
            }
        }
        if ( elem.style.display === "" && isHiddenWithinTree( elem ) ) {
            values[ index ] = getDefaultDisplay( elem );
        }
    } else {
        if ( display !== "none" ) {
            values[ index ] = "none";

            // Remember what we're overwriting
            dataPriv.set( elem, "display", display );
        }
    }
}

// Set the display of the elements in a second loop to avoid constant reflow
for ( index = 0; index < length; index++ ) {
    if ( values[ index ] != null ) {
        elements[ index ].style.display = values[ index ];
    }
}

return elements;
}

jQuery.fn.extend( {
show: function() {
    return showHide( this, true );
},
hide: function() {
    return showHide( this );
},
toggle: function( state ) {
    if ( typeof state === "boolean" ) {
        return state ? this.show() : this.hide();
    }

    return this.each( function() {
        if ( isHiddenWithinTree( this ) ) {
            jQuery( this ).show();
        } else {
            jQuery( this ).hide();
        }
    } );
}
} );
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([a-z][^\/\0>\x20\t\r\n\f]*)/i );

var rscriptType = ( /^$|^module$|\/(?:java|ecma)script/i );



( function() {
var fragment = document.createDocumentFragment(),
    div = fragment.appendChild( document.createElement( "div" ) ),
    input = document.createElement( "input" );

// Support: Android 4.0 - 4.3 only
// Check state lost if the name is set (#11217)
// Support: Windows Web Apps (WWA)
// `name` and `type` must use .setAttribute for WWA (#14901)
input.setAttribute( "type", "radio" );
input.setAttribute( "checked", "checked" );
input.setAttribute( "name", "t" );

div.appendChild( input );

// Support: Android <=4.1 only
// Older WebKit doesn't clone checked state correctly in fragments
support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

// Support: IE <=11 only
// Make sure textarea (and checkbox) defaultValue is properly cloned
div.innerHTML = "<textarea>x</textarea>";
support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;

// Support: IE <=9 only
// IE <=9 replaces <option> tags with their contents when inserted outside of
// the select element.
div.innerHTML = "<option></option>";
support.option = !!div.lastChild;
} )();


// We have to close these tags to support XHTML (#13200)
var wrapMap = {

// XHTML parsers do not magically insert elements in the
// same way that tag soup parsers do. So we cannot shorten
// this by omitting <tbody> or other required elements.
thead: [ 1, "<table>", "</table>" ],
col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
tr: [ 2, "<table><tbody>", "</tbody></table>" ],
td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

_default: [ 0, "", "" ]
};

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: IE <=9 only
if ( !support.option ) {
wrapMap.optgroup = wrapMap.option = [ 1, "<select multiple='multiple'>", "</select>" ];
}


function getAll( context, tag ) {

// Support: IE <=9 - 11 only
// Use typeof to avoid zero-argument method invocation on host objects (#15151)
var ret;

if ( typeof context.getElementsByTagName !== "undefined" ) {
    ret = context.getElementsByTagName( tag || "*" );

} else if ( typeof context.querySelectorAll !== "undefined" ) {
    ret = context.querySelectorAll( tag || "*" );

} else {
    ret = [];
}

if ( tag === undefined || tag && nodeName( context, tag ) ) {
    return jQuery.merge( [ context ], ret );
}

return ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
var i = 0,
    l = elems.length;

for ( ; i < l; i++ ) {
    dataPriv.set(
        elems[ i ],
        "globalEval",
        !refElements || dataPriv.get( refElements[ i ], "globalEval" )
    );
}
}


var rhtml = /<|&#?\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
var elem, tmp, tag, wrap, attached, j,
    fragment = context.createDocumentFragment(),
    nodes = [],
    i = 0,
    l = elems.length;

for ( ; i < l; i++ ) {
    elem = elems[ i ];

    if ( elem || elem === 0 ) {

        // Add nodes directly
        if ( toType( elem ) === "object" ) {

            // Support: Android <=4.0 only, PhantomJS 1 only
            // push.apply(_, arraylike) throws on ancient WebKit
            jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

        // Convert non-html into a text node
        } else if ( !rhtml.test( elem ) ) {
            nodes.push( context.createTextNode( elem ) );

        // Convert html into DOM nodes
        } else {
            tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

            // Deserialize a standard representation
            tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
            wrap = wrapMap[ tag ] || wrapMap._default;
            tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

            // Descend through wrappers to the right content
            j = wrap[ 0 ];
            while ( j-- ) {
                tmp = tmp.lastChild;
            }

            // Support: Android <=4.0 only, PhantomJS 1 only
            // push.apply(_, arraylike) throws on ancient WebKit
            jQuery.merge( nodes, tmp.childNodes );

            // Remember the top-level container
            tmp = fragment.firstChild;

            // Ensure the created nodes are orphaned (#12392)
            tmp.textContent = "";
        }
    }
}

// Remove wrapper from fragment
fragment.textContent = "";

i = 0;
while ( ( elem = nodes[ i++ ] ) ) {

    // Skip elements already in the context collection (trac-4087)
    if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
        if ( ignored ) {
            ignored.push( elem );
        }
        continue;
    }

    attached = isAttached( elem );

    // Append to fragment
    tmp = getAll( fragment.appendChild( elem ), "script" );

    // Preserve script evaluation history
    if ( attached ) {
        setGlobalEval( tmp );
    }

    // Capture executables
    if ( scripts ) {
        j = 0;
        while ( ( elem = tmp[ j++ ] ) ) {
            if ( rscriptType.test( elem.type || "" ) ) {
                scripts.push( elem );
            }
        }
    }
}

return fragment;
}


var
rkeyEvent = /^key/,
rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
return true;
}

function returnFalse() {
return false;
}

// Support: IE <=9 - 11+
// focus() and blur() are asynchronous, except when they are no-op.
// So expect focus to be synchronous when the element is already active,
// and blur to be synchronous when the element is not already active.
// (focus and blur are always synchronous in other supported browsers,
// this just defines when we can count on it).
function expectSync( elem, type ) {
return ( elem === safeActiveElement() ) === ( type === "focus" );
}

// Support: IE <=9 only
// Accessing document.activeElement can throw unexpectedly
// https://bugs.jquery.com/ticket/13393
function safeActiveElement() {
try {
    return document.activeElement;
} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
var origFn, type;

// Types can be a map of types/handlers
if ( typeof types === "object" ) {

    // ( types-Object, selector, data )
    if ( typeof selector !== "string" ) {

        // ( types-Object, data )
        data = data || selector;
        selector = undefined;
    }
    for ( type in types ) {
        on( elem, type, selector, data, types[ type ], one );
    }
    return elem;
}

if ( data == null && fn == null ) {

    // ( types, fn )
    fn = selector;
    data = selector = undefined;
} else if ( fn == null ) {
    if ( typeof selector === "string" ) {

        // ( types, selector, fn )
        fn = data;
        data = undefined;
    } else {

        // ( types, data, fn )
        fn = data;
        data = selector;
        selector = undefined;
    }
}
if ( fn === false ) {
    fn = returnFalse;
} else if ( !fn ) {
    return elem;
}

if ( one === 1 ) {
    origFn = fn;
    fn = function( event ) {

        // Can use an empty set, since event contains the info
        jQuery().off( event );
        return origFn.apply( this, arguments );
    };

    // Use same guid so caller can remove using origFn
    fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
}
return elem.each( function() {
    jQuery.event.add( this, types, fn, data, selector );
} );
}

/*
* Helper functions for managing events -- not part of the public interface.
* Props to Dean Edwards' addEvent library for many of the ideas.
*/
jQuery.event = {

global: {},

add: function( elem, types, handler, data, selector ) {

    var handleObjIn, eventHandle, tmp,
        events, t, handleObj,
        special, handlers, type, namespaces, origType,
        elemData = dataPriv.get( elem );

    // Only attach events to objects that accept data
    if ( !acceptData( elem ) ) {
        return;
    }

    // Caller can pass in an object of custom data in lieu of the handler
    if ( handler.handler ) {
        handleObjIn = handler;
        handler = handleObjIn.handler;
        selector = handleObjIn.selector;
    }

    // Ensure that invalid selectors throw exceptions at attach time
    // Evaluate against documentElement in case elem is a non-element node (e.g., document)
    if ( selector ) {
        jQuery.find.matchesSelector( documentElement, selector );
    }

    // Make sure that the handler has a unique ID, used to find/remove it later
    if ( !handler.guid ) {
        handler.guid = jQuery.guid++;
    }

    // Init the element's event structure and main handler, if this is the first
    if ( !( events = elemData.events ) ) {
        events = elemData.events = Object.create( null );
    }
    if ( !( eventHandle = elemData.handle ) ) {
        eventHandle = elemData.handle = function( e ) {

            // Discard the second event of a jQuery.event.trigger() and
            // when an event is called after a page has unloaded
            return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
                jQuery.event.dispatch.apply( elem, arguments ) : undefined;
        };
    }

    // Handle multiple events separated by a space
    types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
    t = types.length;
    while ( t-- ) {
        tmp = rtypenamespace.exec( types[ t ] ) || [];
        type = origType = tmp[ 1 ];
        namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

        // There *must* be a type, no attaching namespace-only handlers
        if ( !type ) {
            continue;
        }

        // If event changes its type, use the special event handlers for the changed type
        special = jQuery.event.special[ type ] || {};

        // If selector defined, determine special event api type, otherwise given type
        type = ( selector ? special.delegateType : special.bindType ) || type;

        // Update special based on newly reset type
        special = jQuery.event.special[ type ] || {};

        // handleObj is passed to all event handlers
        handleObj = jQuery.extend( {
            type: type,
            origType: origType,
            data: data,
            handler: handler,
            guid: handler.guid,
            selector: selector,
            needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
            namespace: namespaces.join( "." )
        }, handleObjIn );

        // Init the event handler queue if we're the first
        if ( !( handlers = events[ type ] ) ) {
            handlers = events[ type ] = [];
            handlers.delegateCount = 0;

            // Only use addEventListener if the special events handler returns false
            if ( !special.setup ||
                special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

                if ( elem.addEventListener ) {
                    elem.addEventListener( type, eventHandle );
                }
            }
        }

        if ( special.add ) {
            special.add.call( elem, handleObj );

            if ( !handleObj.handler.guid ) {
                handleObj.handler.guid = handler.guid;
            }
        }

        // Add to the element's handler list, delegates in front
        if ( selector ) {
            handlers.splice( handlers.delegateCount++, 0, handleObj );
        } else {
            handlers.push( handleObj );
        }

        // Keep track of which events have ever been used, for event optimization
        jQuery.event.global[ type ] = true;
    }

},

// Detach an event or set of events from an element
remove: function( elem, types, handler, selector, mappedTypes ) {

    var j, origCount, tmp,
        events, t, handleObj,
        special, handlers, type, namespaces, origType,
        elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

    if ( !elemData || !( events = elemData.events ) ) {
        return;
    }

    // Once for each type.namespace in types; type may be omitted
    types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
    t = types.length;
    while ( t-- ) {
        tmp = rtypenamespace.exec( types[ t ] ) || [];
        type = origType = tmp[ 1 ];
        namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

        // Unbind all events (on this namespace, if provided) for the element
        if ( !type ) {
            for ( type in events ) {
                jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
            }
            continue;
        }

        special = jQuery.event.special[ type ] || {};
        type = ( selector ? special.delegateType : special.bindType ) || type;
        handlers = events[ type ] || [];
        tmp = tmp[ 2 ] &&
            new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

        // Remove matching events
        origCount = j = handlers.length;
        while ( j-- ) {
            handleObj = handlers[ j ];

            if ( ( mappedTypes || origType === handleObj.origType ) &&
                ( !handler || handler.guid === handleObj.guid ) &&
                ( !tmp || tmp.test( handleObj.namespace ) ) &&
                ( !selector || selector === handleObj.selector ||
                    selector === "**" && handleObj.selector ) ) {
                handlers.splice( j, 1 );

                if ( handleObj.selector ) {
                    handlers.delegateCount--;
                }
                if ( special.remove ) {
                    special.remove.call( elem, handleObj );
                }
            }
        }

        // Remove generic event handler if we removed something and no more handlers exist
        // (avoids potential for endless recursion during removal of special event handlers)
        if ( origCount && !handlers.length ) {
            if ( !special.teardown ||
                special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

                jQuery.removeEvent( elem, type, elemData.handle );
            }

            delete events[ type ];
        }
    }

    // Remove data and the expando if it's no longer used
    if ( jQuery.isEmptyObject( events ) ) {
        dataPriv.remove( elem, "handle events" );
    }
},

dispatch: function( nativeEvent ) {

    var i, j, ret, matched, handleObj, handlerQueue,
        args = new Array( arguments.length ),

        // Make a writable jQuery.Event from the native event object
        event = jQuery.event.fix( nativeEvent ),

        handlers = (
                dataPriv.get( this, "events" ) || Object.create( null )
            )[ event.type ] || [],
        special = jQuery.event.special[ event.type ] || {};

    // Use the fix-ed jQuery.Event rather than the (read-only) native event
    args[ 0 ] = event;

    for ( i = 1; i < arguments.length; i++ ) {
        args[ i ] = arguments[ i ];
    }

    event.delegateTarget = this;

    // Call the preDispatch hook for the mapped type, and let it bail if desired
    if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
        return;
    }

    // Determine handlers
    handlerQueue = jQuery.event.handlers.call( this, event, handlers );

    // Run delegates first; they may want to stop propagation beneath us
    i = 0;
    while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
        event.currentTarget = matched.elem;

        j = 0;
        while ( ( handleObj = matched.handlers[ j++ ] ) &&
            !event.isImmediatePropagationStopped() ) {

            // If the event is namespaced, then each handler is only invoked if it is
            // specially universal or its namespaces are a superset of the event's.
            if ( !event.rnamespace || handleObj.namespace === false ||
                event.rnamespace.test( handleObj.namespace ) ) {

                event.handleObj = handleObj;
                event.data = handleObj.data;

                ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
                    handleObj.handler ).apply( matched.elem, args );

                if ( ret !== undefined ) {
                    if ( ( event.result = ret ) === false ) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                }
            }
        }
    }

    // Call the postDispatch hook for the mapped type
    if ( special.postDispatch ) {
        special.postDispatch.call( this, event );
    }

    return event.result;
},

handlers: function( event, handlers ) {
    var i, handleObj, sel, matchedHandlers, matchedSelectors,
        handlerQueue = [],
        delegateCount = handlers.delegateCount,
        cur = event.target;

    // Find delegate handlers
    if ( delegateCount &&

        // Support: IE <=9
        // Black-hole SVG <use> instance trees (trac-13180)
        cur.nodeType &&

        // Support: Firefox <=42
        // Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
        // https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
        // Support: IE 11 only
        // ...but not arrow key "clicks" of radio inputs, which can have `button` -1 (gh-2343)
        !( event.type === "click" && event.button >= 1 ) ) {

        for ( ; cur !== this; cur = cur.parentNode || this ) {

            // Don't check non-elements (#13208)
            // Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
            if ( cur.nodeType === 1 && !( event.type === "click" && cur.disabled === true ) ) {
                matchedHandlers = [];
                matchedSelectors = {};
                for ( i = 0; i < delegateCount; i++ ) {
                    handleObj = handlers[ i ];

                    // Don't conflict with Object.prototype properties (#13203)
                    sel = handleObj.selector + " ";

                    if ( matchedSelectors[ sel ] === undefined ) {
                        matchedSelectors[ sel ] = handleObj.needsContext ?
                            jQuery( sel, this ).index( cur ) > -1 :
                            jQuery.find( sel, this, null, [ cur ] ).length;
                    }
                    if ( matchedSelectors[ sel ] ) {
                        matchedHandlers.push( handleObj );
                    }
                }
                if ( matchedHandlers.length ) {
                    handlerQueue.push( { elem: cur, handlers: matchedHandlers } );
                }
            }
        }
    }

    // Add the remaining (directly-bound) handlers
    cur = this;
    if ( delegateCount < handlers.length ) {
        handlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
    }

    return handlerQueue;
},

addProp: function( name, hook ) {
    Object.defineProperty( jQuery.Event.prototype, name, {
        enumerable: true,
        configurable: true,

        get: isFunction( hook ) ?
            function() {
                if ( this.originalEvent ) {
                        return hook( this.originalEvent );
                }
            } :
            function() {
                if ( this.originalEvent ) {
                        return this.originalEvent[ name ];
                }
            },

        set: function( value ) {
            Object.defineProperty( this, name, {
                enumerable: true,
                configurable: true,
                writable: true,
                value: value
            } );
        }
    } );
},

fix: function( originalEvent ) {
    return originalEvent[ jQuery.expando ] ?
        originalEvent :
        new jQuery.Event( originalEvent );
},

special: {
    load: {

        // Prevent triggered image.load events from bubbling to window.load
        noBubble: true
    },
    click: {

        // Utilize native event to ensure correct state for checkable inputs
        setup: function( data ) {

            // For mutual compressibility with _default, replace `this` access with a local var.
            // `|| data` is dead code meant only to preserve the variable through minification.
            var el = this || data;

            // Claim the first handler
            if ( rcheckableType.test( el.type ) &&
                el.click && nodeName( el, "input" ) ) {

                // dataPriv.set( el, "click", ... )
                leverageNative( el, "click", returnTrue );
            }

            // Return false to allow normal processing in the caller
            return false;
        },
        trigger: function( data ) {

            // For mutual compressibility with _default, replace `this` access with a local var.
            // `|| data` is dead code meant only to preserve the variable through minification.
            var el = this || data;

            // Force setup before triggering a click
            if ( rcheckableType.test( el.type ) &&
                el.click && nodeName( el, "input" ) ) {

                leverageNative( el, "click" );
            }

            // Return non-false to allow normal event-path propagation
            return true;
        },

        // For cross-browser consistency, suppress native .click() on links
        // Also prevent it if we're currently inside a leveraged native-event stack
        _default: function( event ) {
            var target = event.target;
            return rcheckableType.test( target.type ) &&
                target.click && nodeName( target, "input" ) &&
                dataPriv.get( target, "click" ) ||
                nodeName( target, "a" );
        }
    },

    beforeunload: {
        postDispatch: function( event ) {

            // Support: Firefox 20+
            // Firefox doesn't alert if the returnValue field is not set.
            if ( event.result !== undefined && event.originalEvent ) {
                event.originalEvent.returnValue = event.result;
            }
        }
    }
}
};

// Ensure the presence of an event listener that handles manually-triggered
// synthetic events by interrupting progress until reinvoked in response to
// *native* events that it fires directly, ensuring that state changes have
// already occurred before other listeners are invoked.
function leverageNative( el, type, expectSync ) {

// Missing expectSync indicates a trigger call, which must force setup through jQuery.event.add
if ( !expectSync ) {
    if ( dataPriv.get( el, type ) === undefined ) {
        jQuery.event.add( el, type, returnTrue );
    }
    return;
}

// Register the controller as a special universal handler for all event namespaces
dataPriv.set( el, type, false );
jQuery.event.add( el, type, {
    namespace: false,
    handler: function( event ) {
        var notAsync, result,
            saved = dataPriv.get( this, type );

        if ( ( event.isTrigger & 1 ) && this[ type ] ) {

            // Interrupt processing of the outer synthetic .trigger()ed event
            // Saved data should be false in such cases, but might be a leftover capture object
            // from an async native handler (gh-4350)
            if ( !saved.length ) {

                // Store arguments for use when handling the inner native event
                // There will always be at least one argument (an event object), so this array
                // will not be confused with a leftover capture object.
                saved = slice.call( arguments );
                dataPriv.set( this, type, saved );

                // Trigger the native event and capture its result
                // Support: IE <=9 - 11+
                // focus() and blur() are asynchronous
                notAsync = expectSync( this, type );
                this[ type ]();
                result = dataPriv.get( this, type );
                if ( saved !== result || notAsync ) {
                    dataPriv.set( this, type, false );
                } else {
                    result = {};
                }
                if ( saved !== result ) {

                    // Cancel the outer synthetic event
                    event.stopImmediatePropagation();
                    event.preventDefault();
                    return result.value;
                }

            // If this is an inner synthetic event for an event with a bubbling surrogate
            // (focus or blur), assume that the surrogate already propagated from triggering the
            // native event and prevent that from happening again here.
            // This technically gets the ordering wrong w.r.t. to `.trigger()` (in which the
            // bubbling surrogate propagates *after* the non-bubbling base), but that seems
            // less bad than duplication.
            } else if ( ( jQuery.event.special[ type ] || {} ).delegateType ) {
                event.stopPropagation();
            }

        // If this is a native event triggered above, everything is now in order
        // Fire an inner synthetic event with the original arguments
        } else if ( saved.length ) {

            // ...and capture the result
            dataPriv.set( this, type, {
                value: jQuery.event.trigger(

                    // Support: IE <=9 - 11+
                    // Extend with the prototype to reset the above stopImmediatePropagation()
                    jQuery.extend( saved[ 0 ], jQuery.Event.prototype ),
                    saved.slice( 1 ),
                    this
                )
            } );

            // Abort handling of the native event
            event.stopImmediatePropagation();
        }
    }
} );
}

jQuery.removeEvent = function( elem, type, handle ) {

// This "if" is needed for plain objects
if ( elem.removeEventListener ) {
    elem.removeEventListener( type, handle );
}
};

jQuery.Event = function( src, props ) {

// Allow instantiation without the 'new' keyword
if ( !( this instanceof jQuery.Event ) ) {
    return new jQuery.Event( src, props );
}

// Event object
if ( src && src.type ) {
    this.originalEvent = src;
    this.type = src.type;

    // Events bubbling up the document may have been marked as prevented
    // by a handler lower down the tree; reflect the correct value.
    this.isDefaultPrevented = src.defaultPrevented ||
            src.defaultPrevented === undefined &&

            // Support: Android <=2.3 only
            src.returnValue === false ?
        returnTrue :
        returnFalse;

    // Create target properties
    // Support: Safari <=6 - 7 only
    // Target should not be a text node (#504, #13143)
    this.target = ( src.target && src.target.nodeType === 3 ) ?
        src.target.parentNode :
        src.target;

    this.currentTarget = src.currentTarget;
    this.relatedTarget = src.relatedTarget;

// Event type
} else {
    this.type = src;
}

// Put explicitly provided properties onto the event object
if ( props ) {
    jQuery.extend( this, props );
}

// Create a timestamp if incoming event doesn't have one
this.timeStamp = src && src.timeStamp || Date.now();

// Mark it as fixed
this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
constructor: jQuery.Event,
isDefaultPrevented: returnFalse,
isPropagationStopped: returnFalse,
isImmediatePropagationStopped: returnFalse,
isSimulated: false,

preventDefault: function() {
    var e = this.originalEvent;

    this.isDefaultPrevented = returnTrue;

    if ( e && !this.isSimulated ) {
        e.preventDefault();
    }
},
stopPropagation: function() {
    var e = this.originalEvent;

    this.isPropagationStopped = returnTrue;

    if ( e && !this.isSimulated ) {
        e.stopPropagation();
    }
},
stopImmediatePropagation: function() {
    var e = this.originalEvent;

    this.isImmediatePropagationStopped = returnTrue;

    if ( e && !this.isSimulated ) {
        e.stopImmediatePropagation();
    }

    this.stopPropagation();
}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
altKey: true,
bubbles: true,
cancelable: true,
changedTouches: true,
ctrlKey: true,
detail: true,
eventPhase: true,
metaKey: true,
pageX: true,
pageY: true,
shiftKey: true,
view: true,
"char": true,
code: true,
charCode: true,
key: true,
keyCode: true,
button: true,
buttons: true,
clientX: true,
clientY: true,
offsetX: true,
offsetY: true,
pointerId: true,
pointerType: true,
screenX: true,
screenY: true,
targetTouches: true,
toElement: true,
touches: true,

which: function( event ) {
    var button = event.button;

    // Add which for key events
    if ( event.which == null && rkeyEvent.test( event.type ) ) {
        return event.charCode != null ? event.charCode : event.keyCode;
    }

    // Add which for click: 1 === left; 2 === middle; 3 === right
    if ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
        if ( button & 1 ) {
            return 1;
        }

        if ( button & 2 ) {
            return 3;
        }

        if ( button & 4 ) {
            return 2;
        }

        return 0;
    }

    return event.which;
}
}, jQuery.event.addProp );

jQuery.each( { focus: "focusin", blur: "focusout" }, function( type, delegateType ) {
jQuery.event.special[ type ] = {

    // Utilize native event if possible so blur/focus sequence is correct
    setup: function() {

        // Claim the first handler
        // dataPriv.set( this, "focus", ... )
        // dataPriv.set( this, "blur", ... )
        leverageNative( this, type, expectSync );

        // Return false to allow normal processing in the caller
        return false;
    },
    trigger: function() {

        // Force setup before trigger
        leverageNative( this, type );

        // Return non-false to allow normal event-path propagation
        return true;
    },

    delegateType: delegateType
};
} );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
mouseenter: "mouseover",
mouseleave: "mouseout",
pointerenter: "pointerover",
pointerleave: "pointerout"
}, function( orig, fix ) {
jQuery.event.special[ orig ] = {
    delegateType: fix,
    bindType: fix,

    handle: function( event ) {
        var ret,
            target = this,
            related = event.relatedTarget,
            handleObj = event.handleObj;

        // For mouseenter/leave call the handler if related is outside the target.
        // NB: No relatedTarget if the mouse left/entered the browser window
        if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
            event.type = handleObj.origType;
            ret = handleObj.handler.apply( this, arguments );
            event.type = fix;
        }
        return ret;
    }
};
} );

jQuery.fn.extend( {

on: function( types, selector, data, fn ) {
    return on( this, types, selector, data, fn );
},
one: function( types, selector, data, fn ) {
    return on( this, types, selector, data, fn, 1 );
},
off: function( types, selector, fn ) {
    var handleObj, type;
    if ( types && types.preventDefault && types.handleObj ) {

        // ( event )  dispatched jQuery.Event
        handleObj = types.handleObj;
        jQuery( types.delegateTarget ).off(
            handleObj.namespace ?
                handleObj.origType + "." + handleObj.namespace :
                handleObj.origType,
            handleObj.selector,
            handleObj.handler
        );
        return this;
    }
    if ( typeof types === "object" ) {

        // ( types-object [, selector] )
        for ( type in types ) {
            this.off( type, selector, types[ type ] );
        }
        return this;
    }
    if ( selector === false || typeof selector === "function" ) {

        // ( types [, fn] )
        fn = selector;
        selector = undefined;
    }
    if ( fn === false ) {
        fn = returnFalse;
    }
    return this.each( function() {
        jQuery.event.remove( this, types, fn, selector );
    } );
}
} );


var

// Support: IE <=10 - 11, Edge 12 - 13 only
// In IE/Edge using regex groups here causes severe slowdowns.
// See https://connect.microsoft.com/IE/feedback/details/1736512/
rnoInnerhtml = /<script|<style|<link/i,

// checked="checked" or checked
rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
if ( nodeName( elem, "table" ) &&
    nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ) {

    return jQuery( elem ).children( "tbody" )[ 0 ] || elem;
}

return elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
return elem;
}
function restoreScript( elem ) {
if ( ( elem.type || "" ).slice( 0, 5 ) === "true/" ) {
    elem.type = elem.type.slice( 5 );
} else {
    elem.removeAttribute( "type" );
}

return elem;
}

function cloneCopyEvent( src, dest ) {
var i, l, type, pdataOld, udataOld, udataCur, events;

if ( dest.nodeType !== 1 ) {
    return;
}

// 1. Copy private data: events, handlers, etc.
if ( dataPriv.hasData( src ) ) {
    pdataOld = dataPriv.get( src );
    events = pdataOld.events;

    if ( events ) {
        dataPriv.remove( dest, "handle events" );

        for ( type in events ) {
            for ( i = 0, l = events[ type ].length; i < l; i++ ) {
                jQuery.event.add( dest, type, events[ type ][ i ] );
            }
        }
    }
}

// 2. Copy user data
if ( dataUser.hasData( src ) ) {
    udataOld = dataUser.access( src );
    udataCur = jQuery.extend( {}, udataOld );

    dataUser.set( dest, udataCur );
}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
var nodeName = dest.nodeName.toLowerCase();

// Fails to persist the checked state of a cloned checkbox or radio button.
if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
    dest.checked = src.checked;

// Fails to return the selected option to the default selected state when cloning options
} else if ( nodeName === "input" || nodeName === "textarea" ) {
    dest.defaultValue = src.defaultValue;
}
}

function domManip( collection, args, callback, ignored ) {

// Flatten any nested arrays
args = flat( args );

var fragment, first, scripts, hasScripts, node, doc,
    i = 0,
    l = collection.length,
    iNoClone = l - 1,
    value = args[ 0 ],
    valueIsFunction = isFunction( value );

// We can't cloneNode fragments that contain checked, in WebKit
if ( valueIsFunction ||
        ( l > 1 && typeof value === "string" &&
            !support.checkClone && rchecked.test( value ) ) ) {
    return collection.each( function( index ) {
        var self = collection.eq( index );
        if ( valueIsFunction ) {
            args[ 0 ] = value.call( this, index, self.html() );
        }
        domManip( self, args, callback, ignored );
    } );
}

if ( l ) {
    fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
    first = fragment.firstChild;

    if ( fragment.childNodes.length === 1 ) {
        fragment = first;
    }

    // Require either new content or an interest in ignored elements to invoke the callback
    if ( first || ignored ) {
        scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
        hasScripts = scripts.length;

        // Use the original fragment for the last item
        // instead of the first because it can end up
        // being emptied incorrectly in certain situations (#8070).
        for ( ; i < l; i++ ) {
            node = fragment;

            if ( i !== iNoClone ) {
                node = jQuery.clone( node, true, true );

                // Keep references to cloned scripts for later restoration
                if ( hasScripts ) {

                    // Support: Android <=4.0 only, PhantomJS 1 only
                    // push.apply(_, arraylike) throws on ancient WebKit
                    jQuery.merge( scripts, getAll( node, "script" ) );
                }
            }

            callback.call( collection[ i ], node, i );
        }

        if ( hasScripts ) {
            doc = scripts[ scripts.length - 1 ].ownerDocument;

            // Reenable scripts
            jQuery.map( scripts, restoreScript );

            // Evaluate executable scripts on first document insertion
            for ( i = 0; i < hasScripts; i++ ) {
                node = scripts[ i ];
                if ( rscriptType.test( node.type || "" ) &&
                    !dataPriv.access( node, "globalEval" ) &&
                    jQuery.contains( doc, node ) ) {

                    if ( node.src && ( node.type || "" ).toLowerCase()  !== "module" ) {

                        // Optional AJAX dependency, but won't run scripts if not present
                        if ( jQuery._evalUrl && !node.noModule ) {
                            jQuery._evalUrl( node.src, {
                                nonce: node.nonce || node.getAttribute( "nonce" )
                            }, doc );
                        }
                    } else {
                        DOMEval( node.textContent.replace( rcleanScript, "" ), node, doc );
                    }
                }
            }
        }
    }
}

return collection;
}

function remove( elem, selector, keepData ) {
var node,
    nodes = selector ? jQuery.filter( selector, elem ) : elem,
    i = 0;

for ( ; ( node = nodes[ i ] ) != null; i++ ) {
    if ( !keepData && node.nodeType === 1 ) {
        jQuery.cleanData( getAll( node ) );
    }

    if ( node.parentNode ) {
        if ( keepData && isAttached( node ) ) {
            setGlobalEval( getAll( node, "script" ) );
        }
        node.parentNode.removeChild( node );
    }
}

return elem;
}

jQuery.extend( {
htmlPrefilter: function( html ) {
    return html;
},

clone: function( elem, dataAndEvents, deepDataAndEvents ) {
    var i, l, srcElements, destElements,
        clone = elem.cloneNode( true ),
        inPage = isAttached( elem );

    // Fix IE cloning issues
    if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
            !jQuery.isXMLDoc( elem ) ) {

        // We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
        destElements = getAll( clone );
        srcElements = getAll( elem );

        for ( i = 0, l = srcElements.length; i < l; i++ ) {
            fixInput( srcElements[ i ], destElements[ i ] );
        }
    }

    // Copy the events from the original to the clone
    if ( dataAndEvents ) {
        if ( deepDataAndEvents ) {
            srcElements = srcElements || getAll( elem );
            destElements = destElements || getAll( clone );

            for ( i = 0, l = srcElements.length; i < l; i++ ) {
                cloneCopyEvent( srcElements[ i ], destElements[ i ] );
            }
        } else {
            cloneCopyEvent( elem, clone );
        }
    }

    // Preserve script evaluation history
    destElements = getAll( clone, "script" );
    if ( destElements.length > 0 ) {
        setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
    }

    // Return the cloned set
    return clone;
},

cleanData: function( elems ) {
    var data, elem, type,
        special = jQuery.event.special,
        i = 0;

    for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
        if ( acceptData( elem ) ) {
            if ( ( data = elem[ dataPriv.expando ] ) ) {
                if ( data.events ) {
                    for ( type in data.events ) {
                        if ( special[ type ] ) {
                            jQuery.event.remove( elem, type );

                        // This is a shortcut to avoid jQuery.event.remove's overhead
                        } else {
                            jQuery.removeEvent( elem, type, data.handle );
                        }
                    }
                }

                // Support: Chrome <=35 - 45+
                // Assign undefined instead of using delete, see Data#remove
                elem[ dataPriv.expando ] = undefined;
            }
            if ( elem[ dataUser.expando ] ) {

                // Support: Chrome <=35 - 45+
                // Assign undefined instead of using delete, see Data#remove
                elem[ dataUser.expando ] = undefined;
            }
        }
    }
}
} );

jQuery.fn.extend( {
detach: function( selector ) {
    return remove( this, selector, true );
},

remove: function( selector ) {
    return remove( this, selector );
},

text: function( value ) {
    return access( this, function( value ) {
        return value === undefined ?
            jQuery.text( this ) :
            this.empty().each( function() {
                if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
                    this.textContent = value;
                }
            } );
    }, null, value, arguments.length );
},

append: function() {
    return domManip( this, arguments, function( elem ) {
        if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
            var target = manipulationTarget( this, elem );
            target.appendChild( elem );
        }
    } );
},

prepend: function() {
    return domManip( this, arguments, function( elem ) {
        if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
            var target = manipulationTarget( this, elem );
            target.insertBefore( elem, target.firstChild );
        }
    } );
},

before: function() {
    return domManip( this, arguments, function( elem ) {
        if ( this.parentNode ) {
            this.parentNode.insertBefore( elem, this );
        }
    } );
},

after: function() {
    return domManip( this, arguments, function( elem ) {
        if ( this.parentNode ) {
            this.parentNode.insertBefore( elem, this.nextSibling );
        }
    } );
},

empty: function() {
    var elem,
        i = 0;

    for ( ; ( elem = this[ i ] ) != null; i++ ) {
        if ( elem.nodeType === 1 ) {

            // Prevent memory leaks
            jQuery.cleanData( getAll( elem, false ) );

            // Remove any remaining nodes
            elem.textContent = "";
        }
    }

    return this;
},

clone: function( dataAndEvents, deepDataAndEvents ) {
    dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
    deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

    return this.map( function() {
        return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
    } );
},

html: function( value ) {
    return access( this, function( value ) {
        var elem = this[ 0 ] || {},
            i = 0,
            l = this.length;

        if ( value === undefined && elem.nodeType === 1 ) {
            return elem.innerHTML;
        }

        // See if we can take a shortcut and just use innerHTML
        if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
            !wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

            value = jQuery.htmlPrefilter( value );

            try {
                for ( ; i < l; i++ ) {
                    elem = this[ i ] || {};

                    // Remove element nodes and prevent memory leaks
                    if ( elem.nodeType === 1 ) {
                        jQuery.cleanData( getAll( elem, false ) );
                        elem.innerHTML = value;
                    }
                }

                elem = 0;

            // If using innerHTML throws an exception, use the fallback method
            } catch ( e ) {}
        }

        if ( elem ) {
            this.empty().append( value );
        }
    }, null, value, arguments.length );
},

replaceWith: function() {
    var ignored = [];

    // Make the changes, replacing each non-ignored context element with the new content
    return domManip( this, arguments, function( elem ) {
        var parent = this.parentNode;

        if ( jQuery.inArray( this, ignored ) < 0 ) {
            jQuery.cleanData( getAll( this ) );
            if ( parent ) {
                parent.replaceChild( elem, this );
            }
        }

    // Force callback invocation
    }, ignored );
}
} );

jQuery.each( {
appendTo: "append",
prependTo: "prepend",
insertBefore: "before",
insertAfter: "after",
replaceAll: "replaceWith"
}, function( name, original ) {
jQuery.fn[ name ] = function( selector ) {
    var elems,
        ret = [],
        insert = jQuery( selector ),
        last = insert.length - 1,
        i = 0;

    for ( ; i <= last; i++ ) {
        elems = i === last ? this : this.clone( true );
        jQuery( insert[ i ] )[ original ]( elems );

        // Support: Android <=4.0 only, PhantomJS 1 only
        // .get() because push.apply(_, arraylike) throws on ancient WebKit
        push.apply( ret, elems.get() );
    }

    return this.pushStack( ret );
};
} );
var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var getStyles = function( elem ) {

    // Support: IE <=11 only, Firefox <=30 (#15098, #14150)
    // IE throws on elements created in popups
    // FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
    var view = elem.ownerDocument.defaultView;

    if ( !view || !view.opener ) {
        view = window;
    }

    return view.getComputedStyle( elem );
};

var swap = function( elem, options, callback ) {
var ret, name,
    old = {};

// Remember the old values, and insert the new ones
for ( name in options ) {
    old[ name ] = elem.style[ name ];
    elem.style[ name ] = options[ name ];
}

ret = callback.call( elem );

// Revert the old values
for ( name in options ) {
    elem.style[ name ] = old[ name ];
}

return ret;
};


var rboxStyle = new RegExp( cssExpand.join( "|" ), "i" );



( function() {

// Executing both pixelPosition & boxSizingReliable tests require only one layout
// so they're executed at the same time to save the second computation.
function computeStyleTests() {

    // This is a singleton, we need to execute it only once
    if ( !div ) {
        return;
    }

    container.style.cssText = "position:absolute;left:-11111px;width:60px;" +
        "margin-top:1px;padding:0;border:0";
    div.style.cssText =
        "position:relative;display:block;box-sizing:border-box;overflow:scroll;" +
        "margin:auto;border:1px;padding:1px;" +
        "width:60%;top:1%";
    documentElement.appendChild( container ).appendChild( div );

    var divStyle = window.getComputedStyle( div );
    pixelPositionVal = divStyle.top !== "1%";

    // Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
    reliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

    // Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
    // Some styles come back with percentage values, even though they shouldn't
    div.style.right = "60%";
    pixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

    // Support: IE 9 - 11 only
    // Detect misreporting of content dimensions for box-sizing:border-box elements
    boxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

    // Support: IE 9 only
    // Detect overflow:scroll screwiness (gh-3699)
    // Support: Chrome <=64
    // Don't get tricked when zoom affects offsetWidth (gh-4029)
    div.style.position = "absolute";
    scrollboxSizeVal = roundPixelMeasures( div.offsetWidth / 3 ) === 12;

    documentElement.removeChild( container );

    // Nullify the div so it wouldn't be stored in the memory and
    // it will also be a sign that checks already performed
    div = null;
}

function roundPixelMeasures( measure ) {
    return Math.round( parseFloat( measure ) );
}

var pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
    reliableTrDimensionsVal, reliableMarginLeftVal,
    container = document.createElement( "div" ),
    div = document.createElement( "div" );

// Finish early in limited (non-browser) environments
if ( !div.style ) {
    return;
}

// Support: IE <=9 - 11 only
// Style of cloned element affects source element cloned (#8908)
div.style.backgroundClip = "content-box";
div.cloneNode( true ).style.backgroundClip = "";
support.clearCloneStyle = div.style.backgroundClip === "content-box";

jQuery.extend( support, {
    boxSizingReliable: function() {
        computeStyleTests();
        return boxSizingReliableVal;
    },
    pixelBoxStyles: function() {
        computeStyleTests();
        return pixelBoxStylesVal;
    },
    pixelPosition: function() {
        computeStyleTests();
        return pixelPositionVal;
    },
    reliableMarginLeft: function() {
        computeStyleTests();
        return reliableMarginLeftVal;
    },
    scrollboxSize: function() {
        computeStyleTests();
        return scrollboxSizeVal;
    },

    // Support: IE 9 - 11+, Edge 15 - 18+
    // IE/Edge misreport `getComputedStyle` of table rows with width/height
    // set in CSS while `offset*` properties report correct values.
    // Behavior in IE 9 is more subtle than in newer versions & it passes
    // some versions of this test; make sure not to make it pass there!
    reliableTrDimensions: function() {
        var table, tr, trChild, trStyle;
        if ( reliableTrDimensionsVal == null ) {
            table = document.createElement( "table" );
            tr = document.createElement( "tr" );
            trChild = document.createElement( "div" );

            table.style.cssText = "position:absolute;left:-11111px";
            tr.style.height = "1px";
            trChild.style.height = "9px";

            documentElement
                .appendChild( table )
                .appendChild( tr )
                .appendChild( trChild );

            trStyle = window.getComputedStyle( tr );
            reliableTrDimensionsVal = parseInt( trStyle.height ) > 3;

            documentElement.removeChild( table );
        }
        return reliableTrDimensionsVal;
    }
} );
} )();


function curCSS( elem, name, computed ) {
var width, minWidth, maxWidth, ret,

    // Support: Firefox 51+
    // Retrieving style before computed somehow
    // fixes an issue with getting wrong values
    // on detached elements
    style = elem.style;

computed = computed || getStyles( elem );

// getPropertyValue is needed for:
//   .css('filter') (IE 9 only, #12537)
//   .css('--customProperty) (#3144)
if ( computed ) {
    ret = computed.getPropertyValue( name ) || computed[ name ];

    if ( ret === "" && !isAttached( elem ) ) {
        ret = jQuery.style( elem, name );
    }

    // A tribute to the "awesome hack by Dean Edwards"
    // Android Browser returns percentage for some values,
    // but width seems to be reliably pixels.
    // This is against the CSSOM draft spec:
    // https://drafts.csswg.org/cssom/#resolved-values
    if ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

        // Remember the original values
        width = style.width;
        minWidth = style.minWidth;
        maxWidth = style.maxWidth;

        // Put in the new values to get a computed value out
        style.minWidth = style.maxWidth = style.width = ret;
        ret = computed.width;

        // Revert the changed values
        style.width = width;
        style.minWidth = minWidth;
        style.maxWidth = maxWidth;
    }
}

return ret !== undefined ?

    // Support: IE <=9 - 11 only
    // IE returns zIndex value as an integer.
    ret + "" :
    ret;
}


function addGetHookIf( conditionFn, hookFn ) {

// Define the hook, we'll check on the first run if it's really needed.
return {
    get: function() {
        if ( conditionFn() ) {

            // Hook not needed (or it's not possible to use it due
            // to missing dependency), remove it.
            delete this.get;
            return;
        }

        // Hook needed; redefine it so that the support test is not executed again.
        return ( this.get = hookFn ).apply( this, arguments );
    }
};
}


var cssPrefixes = [ "Webkit", "Moz", "ms" ],
emptyStyle = document.createElement( "div" ).style,
vendorProps = {};

// Return a vendor-prefixed property or undefined
function vendorPropName( name ) {

// Check for vendor prefixed names
var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
    i = cssPrefixes.length;

while ( i-- ) {
    name = cssPrefixes[ i ] + capName;
    if ( name in emptyStyle ) {
        return name;
    }
}
}

// Return a potentially-mapped jQuery.cssProps or vendor prefixed property
function finalPropName( name ) {
var final = jQuery.cssProps[ name ] || vendorProps[ name ];

if ( final ) {
    return final;
}
if ( name in emptyStyle ) {
    return name;
}
return vendorProps[ name ] = vendorPropName( name ) || name;
}


var

// Swappable if display is none or starts with table
// except "table", "table-cell", or "table-caption"
// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
rdisplayswap = /^(none|table(?!-c[ea]).+)/,
rcustomProp = /^--/,
cssShow = { position: "absolute", visibility: "hidden", display: "block" },
cssNormalTransform = {
    letterSpacing: "0",
    fontWeight: "400"
};

function setPositiveNumber( _elem, value, subtract ) {

// Any relative (+/-) values have already been
// normalized at this point
var matches = rcssNum.exec( value );
return matches ?

    // Guard against undefined "subtract", e.g., when used as in cssHooks
    Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
    value;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
var i = dimension === "width" ? 1 : 0,
    extra = 0,
    delta = 0;

// Adjustment may not be necessary
if ( box === ( isBorderBox ? "border" : "content" ) ) {
    return 0;
}

for ( ; i < 4; i += 2 ) {

    // Both box models exclude margin
    if ( box === "margin" ) {
        delta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
    }

    // If we get here with a content-box, we're seeking "padding" or "border" or "margin"
    if ( !isBorderBox ) {

        // Add padding
        delta += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

        // For "border" or "margin", add border
        if ( box !== "padding" ) {
            delta += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );

        // But still keep track of it otherwise
        } else {
            extra += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
        }

    // If we get here with a border-box (content + padding + border), we're seeking "content" or
    // "padding" or "margin"
    } else {

        // For "content", subtract padding
        if ( box === "content" ) {
            delta -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
        }

        // For "content" or "padding", subtract border
        if ( box !== "margin" ) {
            delta -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
        }
    }
}

// Account for positive content-box scroll gutter when requested by providing computedVal
if ( !isBorderBox && computedVal >= 0 ) {

    // offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
    // Assuming integer scroll gutter, subtract the rest and round down
    delta += Math.max( 0, Math.ceil(
        elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
        computedVal -
        delta -
        extra -
        0.5

    // If offsetWidth/offsetHeight is unknown, then we can't determine content-box scroll gutter
    // Use an explicit zero to avoid NaN (gh-3964)
    ) ) || 0;
}

return delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

// Start with computed style
var styles = getStyles( elem ),

    // To avoid forcing a reflow, only fetch boxSizing if we need it (gh-4322).
    // Fake content-box until we know it's needed to know the true value.
    boxSizingNeeded = !support.boxSizingReliable() || extra,
    isBorderBox = boxSizingNeeded &&
        jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
    valueIsBorderBox = isBorderBox,

    val = curCSS( elem, dimension, styles ),
    offsetProp = "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 );

// Support: Firefox <=54
// Return a confounding non-pixel value or feign ignorance, as appropriate.
if ( rnumnonpx.test( val ) ) {
    if ( !extra ) {
        return val;
    }
    val = "auto";
}


// Support: IE 9 - 11 only
// Use offsetWidth/offsetHeight for when box sizing is unreliable.
// In those cases, the computed value can be trusted to be border-box.
if ( ( !support.boxSizingReliable() && isBorderBox ||

    // Support: IE 10 - 11+, Edge 15 - 18+
    // IE/Edge misreport `getComputedStyle` of table rows with width/height
    // set in CSS while `offset*` properties report correct values.
    // Interestingly, in some cases IE 9 doesn't suffer from this issue.
    !support.reliableTrDimensions() && nodeName( elem, "tr" ) ||

    // Fall back to offsetWidth/offsetHeight when value is "auto"
    // This happens for inline elements with no explicit setting (gh-3571)
    val === "auto" ||

    // Support: Android <=4.1 - 4.3 only
    // Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
    !parseFloat( val ) && jQuery.css( elem, "display", false, styles ) === "inline" ) &&

    // Make sure the element is visible & connected
    elem.getClientRects().length ) {

    isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

    // Where available, offsetWidth/offsetHeight approximate border box dimensions.
    // Where not available (e.g., SVG), assume unreliable box-sizing and interpret the
    // retrieved value as a content box dimension.
    valueIsBorderBox = offsetProp in elem;
    if ( valueIsBorderBox ) {
        val = elem[ offsetProp ];
    }
}

// Normalize "" and auto
val = parseFloat( val ) || 0;

// Adjust for the element's box model
return ( val +
    boxModelAdjustment(
        elem,
        dimension,
        extra || ( isBorderBox ? "border" : "content" ),
        valueIsBorderBox,
        styles,

        // Provide the current computed size to request scroll gutter calculation (gh-3589)
        val
    )
) + "px";
}

jQuery.extend( {

// Add in style property hooks for overriding the default
// behavior of getting and setting a style property
cssHooks: {
    opacity: {
        get: function( elem, computed ) {
            if ( computed ) {

                // We should always get a number back from opacity
                var ret = curCSS( elem, "opacity" );
                return ret === "" ? "1" : ret;
            }
        }
    }
},

// Don't automatically add "px" to these possibly-unitless properties
cssNumber: {
    "animationIterationCount": true,
    "columnCount": true,
    "fillOpacity": true,
    "flexGrow": true,
    "flexShrink": true,
    "fontWeight": true,
    "gridArea": true,
    "gridColumn": true,
    "gridColumnEnd": true,
    "gridColumnStart": true,
    "gridRow": true,
    "gridRowEnd": true,
    "gridRowStart": true,
    "lineHeight": true,
    "opacity": true,
    "order": true,
    "orphans": true,
    "widows": true,
    "zIndex": true,
    "zoom": true
},

// Add in properties whose names you wish to fix before
// setting or getting the value
cssProps: {},

// Get and set the style property on a DOM Node
style: function( elem, name, value, extra ) {

    // Don't set styles on text and comment nodes
    if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
        return;
    }

    // Make sure that we're working with the right name
    var ret, type, hooks,
        origName = camelCase( name ),
        isCustomProp = rcustomProp.test( name ),
        style = elem.style;

    // Make sure that we're working with the right name. We don't
    // want to query the value if it is a CSS custom property
    // since they are user-defined.
    if ( !isCustomProp ) {
        name = finalPropName( origName );
    }

    // Gets hook for the prefixed version, then unprefixed version
    hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

    // Check if we're setting a value
    if ( value !== undefined ) {
        type = typeof value;

        // Convert "+=" or "-=" to relative numbers (#7345)
        if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
            value = adjustCSS( elem, name, ret );

            // Fixes bug #9237
            type = "number";
        }

        // Make sure that null and NaN values aren't set (#7116)
        if ( value == null || value !== value ) {
            return;
        }

        // If a number was passed in, add the unit (except for certain CSS properties)
        // The isCustomProp check can be removed in jQuery 4.0 when we only auto-append
        // "px" to a few hardcoded values.
        if ( type === "number" && !isCustomProp ) {
            value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
        }

        // background-* props affect original clone's values
        if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
            style[ name ] = "inherit";
        }

        // If a hook was provided, use that value, otherwise just set the specified value
        if ( !hooks || !( "set" in hooks ) ||
            ( value = hooks.set( elem, value, extra ) ) !== undefined ) {

            if ( isCustomProp ) {
                style.setProperty( name, value );
            } else {
                style[ name ] = value;
            }
        }

    } else {

        // If a hook was provided get the non-computed value from there
        if ( hooks && "get" in hooks &&
            ( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

            return ret;
        }

        // Otherwise just get the value from the style object
        return style[ name ];
    }
},

css: function( elem, name, extra, styles ) {
    var val, num, hooks,
        origName = camelCase( name ),
        isCustomProp = rcustomProp.test( name );

    // Make sure that we're working with the right name. We don't
    // want to modify the value if it is a CSS custom property
    // since they are user-defined.
    if ( !isCustomProp ) {
        name = finalPropName( origName );
    }

    // Try prefixed name followed by the unprefixed name
    hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

    // If a hook was provided get the computed value from there
    if ( hooks && "get" in hooks ) {
        val = hooks.get( elem, true, extra );
    }

    // Otherwise, if a way to get the computed value exists, use that
    if ( val === undefined ) {
        val = curCSS( elem, name, styles );
    }

    // Convert "normal" to computed value
    if ( val === "normal" && name in cssNormalTransform ) {
        val = cssNormalTransform[ name ];
    }

    // Make numeric if forced or a qualifier was provided and val looks numeric
    if ( extra === "" || extra ) {
        num = parseFloat( val );
        return extra === true || isFinite( num ) ? num || 0 : val;
    }

    return val;
}
} );

jQuery.each( [ "height", "width" ], function( _i, dimension ) {
jQuery.cssHooks[ dimension ] = {
    get: function( elem, computed, extra ) {
        if ( computed ) {

            // Certain elements can have dimension info if we invisibly show them
            // but it must have a current display style that would benefit
            return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&

                // Support: Safari 8+
                // Table columns in Safari have non-zero offsetWidth & zero
                // getBoundingClientRect().width unless display is changed.
                // Support: IE <=11 only
                // Running getBoundingClientRect on a disconnected node
                // in IE throws an error.
                ( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
                    swap( elem, cssShow, function() {
                        return getWidthOrHeight( elem, dimension, extra );
                    } ) :
                    getWidthOrHeight( elem, dimension, extra );
        }
    },

    set: function( elem, value, extra ) {
        var matches,
            styles = getStyles( elem ),

            // Only read styles.position if the test has a chance to fail
            // to avoid forcing a reflow.
            scrollboxSizeBuggy = !support.scrollboxSize() &&
                styles.position === "absolute",

            // To avoid forcing a reflow, only fetch boxSizing if we need it (gh-3991)
            boxSizingNeeded = scrollboxSizeBuggy || extra,
            isBorderBox = boxSizingNeeded &&
                jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
            subtract = extra ?
                boxModelAdjustment(
                    elem,
                    dimension,
                    extra,
                    isBorderBox,
                    styles
                ) :
                0;

        // Account for unreliable border-box dimensions by comparing offset* to computed and
        // faking a content-box to get border and padding (gh-3699)
        if ( isBorderBox && scrollboxSizeBuggy ) {
            subtract -= Math.ceil(
                elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
                parseFloat( styles[ dimension ] ) -
                boxModelAdjustment( elem, dimension, "border", false, styles ) -
                0.5
            );
        }

        // Convert to pixels if value adjustment is needed
        if ( subtract && ( matches = rcssNum.exec( value ) ) &&
            ( matches[ 3 ] || "px" ) !== "px" ) {

            elem.style[ dimension ] = value;
            value = jQuery.css( elem, dimension );
        }

        return setPositiveNumber( elem, value, subtract );
    }
};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
function( elem, computed ) {
    if ( computed ) {
        return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
            elem.getBoundingClientRect().left -
                swap( elem, { marginLeft: 0 }, function() {
                    return elem.getBoundingClientRect().left;
                } )
            ) + "px";
    }
}
);

// These hooks are used by animate to expand properties
jQuery.each( {
margin: "",
padding: "",
border: "Width"
}, function( prefix, suffix ) {
jQuery.cssHooks[ prefix + suffix ] = {
    expand: function( value ) {
        var i = 0,
            expanded = {},

            // Assumes a single number if not a string
            parts = typeof value === "string" ? value.split( " " ) : [ value ];

        for ( ; i < 4; i++ ) {
            expanded[ prefix + cssExpand[ i ] + suffix ] =
                parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
        }

        return expanded;
    }
};

if ( prefix !== "margin" ) {
    jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
}
} );

jQuery.fn.extend( {
css: function( name, value ) {
    return access( this, function( elem, name, value ) {
        var styles, len,
            map = {},
            i = 0;

        if ( Array.isArray( name ) ) {
            styles = getStyles( elem );
            len = name.length;

            for ( ; i < len; i++ ) {
                map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
            }

            return map;
        }

        return value !== undefined ?
            jQuery.style( elem, name, value ) :
            jQuery.css( elem, name );
    }, name, value, arguments.length > 1 );
}
} );


function Tween( elem, options, prop, end, easing ) {
return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
constructor: Tween,
init: function( elem, options, prop, end, easing, unit ) {
    this.elem = elem;
    this.prop = prop;
    this.easing = easing || jQuery.easing._default;
    this.options = options;
    this.start = this.now = this.cur();
    this.end = end;
    this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
},
cur: function() {
    var hooks = Tween.propHooks[ this.prop ];

    return hooks && hooks.get ?
        hooks.get( this ) :
        Tween.propHooks._default.get( this );
},
run: function( percent ) {
    var eased,
        hooks = Tween.propHooks[ this.prop ];

    if ( this.options.duration ) {
        this.pos = eased = jQuery.easing[ this.easing ](
            percent, this.options.duration * percent, 0, 1, this.options.duration
        );
    } else {
        this.pos = eased = percent;
    }
    this.now = ( this.end - this.start ) * eased + this.start;

    if ( this.options.step ) {
        this.options.step.call( this.elem, this.now, this );
    }

    if ( hooks && hooks.set ) {
        hooks.set( this );
    } else {
        Tween.propHooks._default.set( this );
    }
    return this;
}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
_default: {
    get: function( tween ) {
        var result;

        // Use a property on the element directly when it is not a DOM element,
        // or when there is no matching style property that exists.
        if ( tween.elem.nodeType !== 1 ||
            tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
            return tween.elem[ tween.prop ];
        }

        // Passing an empty string as a 3rd parameter to .css will automatically
        // attempt a parseFloat and fallback to a string if the parse fails.
        // Simple values such as "10px" are parsed to Float;
        // complex values such as "rotate(1rad)" are returned as-is.
        result = jQuery.css( tween.elem, tween.prop, "" );

        // Empty strings, null, undefined and "auto" are converted to 0.
        return !result || result === "auto" ? 0 : result;
    },
    set: function( tween ) {

        // Use step hook for back compat.
        // Use cssHook if its there.
        // Use .style if available and use plain properties where available.
        if ( jQuery.fx.step[ tween.prop ] ) {
            jQuery.fx.step[ tween.prop ]( tween );
        } else if ( tween.elem.nodeType === 1 && (
                jQuery.cssHooks[ tween.prop ] ||
                tween.elem.style[ finalPropName( tween.prop ) ] != null ) ) {
            jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
        } else {
            tween.elem[ tween.prop ] = tween.now;
        }
    }
}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
set: function( tween ) {
    if ( tween.elem.nodeType && tween.elem.parentNode ) {
        tween.elem[ tween.prop ] = tween.now;
    }
}
};

jQuery.easing = {
linear: function( p ) {
    return p;
},
swing: function( p ) {
    return 0.5 - Math.cos( p * Math.PI ) / 2;
},
_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
fxNow, inProgress,
rfxtypes = /^(?:toggle|show|hide)$/,
rrun = /queueHooks$/;

function schedule() {
if ( inProgress ) {
    if ( document.hidden === false && window.requestAnimationFrame ) {
        window.requestAnimationFrame( schedule );
    } else {
        window.setTimeout( schedule, jQuery.fx.interval );
    }

    jQuery.fx.tick();
}
}

// Animations created synchronously will run synchronously
function createFxNow() {
window.setTimeout( function() {
    fxNow = undefined;
} );
return ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
var which,
    i = 0,
    attrs = { height: type };

// If we include width, step value is 1 to do all cssExpand values,
// otherwise step value is 2 to skip over Left and Right
includeWidth = includeWidth ? 1 : 0;
for ( ; i < 4; i += 2 - includeWidth ) {
    which = cssExpand[ i ];
    attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
}

if ( includeWidth ) {
    attrs.opacity = attrs.width = type;
}

return attrs;
}

function createTween( value, prop, animation ) {
var tween,
    collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
    index = 0,
    length = collection.length;
for ( ; index < length; index++ ) {
    if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

        // We're done with this property
        return tween;
    }
}
}

function defaultPrefilter( elem, props, opts ) {
var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
    isBox = "width" in props || "height" in props,
    anim = this,
    orig = {},
    style = elem.style,
    hidden = elem.nodeType && isHiddenWithinTree( elem ),
    dataShow = dataPriv.get( elem, "fxshow" );

// Queue-skipping animations hijack the fx hooks
if ( !opts.queue ) {
    hooks = jQuery._queueHooks( elem, "fx" );
    if ( hooks.unqueued == null ) {
        hooks.unqueued = 0;
        oldfire = hooks.empty.fire;
        hooks.empty.fire = function() {
            if ( !hooks.unqueued ) {
                oldfire();
            }
        };
    }
    hooks.unqueued++;

    anim.always( function() {

        // Ensure the complete handler is called before this completes
        anim.always( function() {
            hooks.unqueued--;
            if ( !jQuery.queue( elem, "fx" ).length ) {
                hooks.empty.fire();
            }
        } );
    } );
}

// Detect show/hide animations
for ( prop in props ) {
    value = props[ prop ];
    if ( rfxtypes.test( value ) ) {
        delete props[ prop ];
        toggle = toggle || value === "toggle";
        if ( value === ( hidden ? "hide" : "show" ) ) {

            // Pretend to be hidden if this is a "show" and
            // there is still data from a stopped show/hide
            if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
                hidden = true;

            // Ignore all other no-op show/hide data
            } else {
                continue;
            }
        }
        orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
    }
}

// Bail out if this is a no-op like .hide().hide()
propTween = !jQuery.isEmptyObject( props );
if ( !propTween && jQuery.isEmptyObject( orig ) ) {
    return;
}

// Restrict "overflow" and "display" styles during box animations
if ( isBox && elem.nodeType === 1 ) {

    // Support: IE <=9 - 11, Edge 12 - 15
    // Record all 3 overflow attributes because IE does not infer the shorthand
    // from identically-valued overflowX and overflowY and Edge just mirrors
    // the overflowX value there.
    opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

    // Identify a display type, preferring old show/hide data over the CSS cascade
    restoreDisplay = dataShow && dataShow.display;
    if ( restoreDisplay == null ) {
        restoreDisplay = dataPriv.get( elem, "display" );
    }
    display = jQuery.css( elem, "display" );
    if ( display === "none" ) {
        if ( restoreDisplay ) {
            display = restoreDisplay;
        } else {

            // Get nonempty value(s) by temporarily forcing visibility
            showHide( [ elem ], true );
            restoreDisplay = elem.style.display || restoreDisplay;
            display = jQuery.css( elem, "display" );
            showHide( [ elem ] );
        }
    }

    // Animate inline elements as inline-block
    if ( display === "inline" || display === "inline-block" && restoreDisplay != null ) {
        if ( jQuery.css( elem, "float" ) === "none" ) {

            // Restore the original display value at the end of pure show/hide animations
            if ( !propTween ) {
                anim.done( function() {
                    style.display = restoreDisplay;
                } );
                if ( restoreDisplay == null ) {
                    display = style.display;
                    restoreDisplay = display === "none" ? "" : display;
                }
            }
            style.display = "inline-block";
        }
    }
}

if ( opts.overflow ) {
    style.overflow = "hidden";
    anim.always( function() {
        style.overflow = opts.overflow[ 0 ];
        style.overflowX = opts.overflow[ 1 ];
        style.overflowY = opts.overflow[ 2 ];
    } );
}

// Implement show/hide animations
propTween = false;
for ( prop in orig ) {

    // General show/hide setup for this element animation
    if ( !propTween ) {
        if ( dataShow ) {
            if ( "hidden" in dataShow ) {
                hidden = dataShow.hidden;
            }
        } else {
            dataShow = dataPriv.access( elem, "fxshow", { display: restoreDisplay } );
        }

        // Store hidden/visible for toggle so `.stop().toggle()` "reverses"
        if ( toggle ) {
            dataShow.hidden = !hidden;
        }

        // Show elements before animating them
        if ( hidden ) {
            showHide( [ elem ], true );
        }

        /* eslint-disable no-loop-func */

        anim.done( function() {

        /* eslint-enable no-loop-func */

            // The final step of a "hide" animation is actually hiding the element
            if ( !hidden ) {
                showHide( [ elem ] );
            }
            dataPriv.remove( elem, "fxshow" );
            for ( prop in orig ) {
                jQuery.style( elem, prop, orig[ prop ] );
            }
        } );
    }

    // Per-property setup
    propTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
    if ( !( prop in dataShow ) ) {
        dataShow[ prop ] = propTween.start;
        if ( hidden ) {
            propTween.end = propTween.start;
            propTween.start = 0;
        }
    }
}
}

function propFilter( props, specialEasing ) {
var index, name, easing, value, hooks;

// camelCase, specialEasing and expand cssHook pass
for ( index in props ) {
    name = camelCase( index );
    easing = specialEasing[ name ];
    value = props[ index ];
    if ( Array.isArray( value ) ) {
        easing = value[ 1 ];
        value = props[ index ] = value[ 0 ];
    }

    if ( index !== name ) {
        props[ name ] = value;
        delete props[ index ];
    }

    hooks = jQuery.cssHooks[ name ];
    if ( hooks && "expand" in hooks ) {
        value = hooks.expand( value );
        delete props[ name ];

        // Not quite $.extend, this won't overwrite existing keys.
        // Reusing 'index' because we have the correct "name"
        for ( index in value ) {
            if ( !( index in props ) ) {
                props[ index ] = value[ index ];
                specialEasing[ index ] = easing;
            }
        }
    } else {
        specialEasing[ name ] = easing;
    }
}
}

function Animation( elem, properties, options ) {
var result,
    stopped,
    index = 0,
    length = Animation.prefilters.length,
    deferred = jQuery.Deferred().always( function() {

        // Don't match elem in the :animated selector
        delete tick.elem;
    } ),
    tick = function() {
        if ( stopped ) {
            return false;
        }
        var currentTime = fxNow || createFxNow(),
            remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

            // Support: Android 2.3 only
            // Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
            temp = remaining / animation.duration || 0,
            percent = 1 - temp,
            index = 0,
            length = animation.tweens.length;

        for ( ; index < length; index++ ) {
            animation.tweens[ index ].run( percent );
        }

        deferred.notifyWith( elem, [ animation, percent, remaining ] );

        // If there's more to do, yield
        if ( percent < 1 && length ) {
            return remaining;
        }

        // If this was an empty animation, synthesize a final progress notification
        if ( !length ) {
            deferred.notifyWith( elem, [ animation, 1, 0 ] );
        }

        // Resolve the animation and report its conclusion
        deferred.resolveWith( elem, [ animation ] );
        return false;
    },
    animation = deferred.promise( {
        elem: elem,
        props: jQuery.extend( {}, properties ),
        opts: jQuery.extend( true, {
            specialEasing: {},
            easing: jQuery.easing._default
        }, options ),
        originalProperties: properties,
        originalOptions: options,
        startTime: fxNow || createFxNow(),
        duration: options.duration,
        tweens: [],
        createTween: function( prop, end ) {
            var tween = jQuery.Tween( elem, animation.opts, prop, end,
                    animation.opts.specialEasing[ prop ] || animation.opts.easing );
            animation.tweens.push( tween );
            return tween;
        },
        stop: function( gotoEnd ) {
            var index = 0,

                // If we are going to the end, we want to run all the tweens
                // otherwise we skip this part
                length = gotoEnd ? animation.tweens.length : 0;
            if ( stopped ) {
                return this;
            }
            stopped = true;
            for ( ; index < length; index++ ) {
                animation.tweens[ index ].run( 1 );
            }

            // Resolve when we played the last frame; otherwise, reject
            if ( gotoEnd ) {
                deferred.notifyWith( elem, [ animation, 1, 0 ] );
                deferred.resolveWith( elem, [ animation, gotoEnd ] );
            } else {
                deferred.rejectWith( elem, [ animation, gotoEnd ] );
            }
            return this;
        }
    } ),
    props = animation.props;

propFilter( props, animation.opts.specialEasing );

for ( ; index < length; index++ ) {
    result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
    if ( result ) {
        if ( isFunction( result.stop ) ) {
            jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
                result.stop.bind( result );
        }
        return result;
    }
}

jQuery.map( props, createTween, animation );

if ( isFunction( animation.opts.start ) ) {
    animation.opts.start.call( elem, animation );
}

// Attach callbacks from options
animation
    .progress( animation.opts.progress )
    .done( animation.opts.done, animation.opts.complete )
    .fail( animation.opts.fail )
    .always( animation.opts.always );

jQuery.fx.timer(
    jQuery.extend( tick, {
        elem: elem,
        anim: animation,
        queue: animation.opts.queue
    } )
);

return animation;
}

jQuery.Animation = jQuery.extend( Animation, {

tweeners: {
    "*": [ function( prop, value ) {
        var tween = this.createTween( prop, value );
        adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
        return tween;
    } ]
},

tweener: function( props, callback ) {
    if ( isFunction( props ) ) {
        callback = props;
        props = [ "*" ];
    } else {
        props = props.match( rnothtmlwhite );
    }

    var prop,
        index = 0,
        length = props.length;

    for ( ; index < length; index++ ) {
        prop = props[ index ];
        Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
        Animation.tweeners[ prop ].unshift( callback );
    }
},

prefilters: [ defaultPrefilter ],

prefilter: function( callback, prepend ) {
    if ( prepend ) {
        Animation.prefilters.unshift( callback );
    } else {
        Animation.prefilters.push( callback );
    }
}
} );

jQuery.speed = function( speed, easing, fn ) {
var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
    complete: fn || !fn && easing ||
        isFunction( speed ) && speed,
    duration: speed,
    easing: fn && easing || easing && !isFunction( easing ) && easing
};

// Go to the end state if fx are off
if ( jQuery.fx.off ) {
    opt.duration = 0;

} else {
    if ( typeof opt.duration !== "number" ) {
        if ( opt.duration in jQuery.fx.speeds ) {
            opt.duration = jQuery.fx.speeds[ opt.duration ];

        } else {
            opt.duration = jQuery.fx.speeds._default;
        }
    }
}

// Normalize opt.queue - true/undefined/null -> "fx"
if ( opt.queue == null || opt.queue === true ) {
    opt.queue = "fx";
}

// Queueing
opt.old = opt.complete;

opt.complete = function() {
    if ( isFunction( opt.old ) ) {
        opt.old.call( this );
    }

    if ( opt.queue ) {
        jQuery.dequeue( this, opt.queue );
    }
};

return opt;
};

jQuery.fn.extend( {
fadeTo: function( speed, to, easing, callback ) {

    // Show any hidden elements after setting opacity to 0
    return this.filter( isHiddenWithinTree ).css( "opacity", 0 ).show()

        // Animate to the value specified
        .end().animate( { opacity: to }, speed, easing, callback );
},
animate: function( prop, speed, easing, callback ) {
    var empty = jQuery.isEmptyObject( prop ),
        optall = jQuery.speed( speed, easing, callback ),
        doAnimation = function() {

            // Operate on a copy of prop so per-property easing won't be lost
            var anim = Animation( this, jQuery.extend( {}, prop ), optall );

            // Empty animations, or finishing resolves immediately
            if ( empty || dataPriv.get( this, "finish" ) ) {
                anim.stop( true );
            }
        };
        doAnimation.finish = doAnimation;

    return empty || optall.queue === false ?
        this.each( doAnimation ) :
        this.queue( optall.queue, doAnimation );
},
stop: function( type, clearQueue, gotoEnd ) {
    var stopQueue = function( hooks ) {
        var stop = hooks.stop;
        delete hooks.stop;
        stop( gotoEnd );
    };

    if ( typeof type !== "string" ) {
        gotoEnd = clearQueue;
        clearQueue = type;
        type = undefined;
    }
    if ( clearQueue ) {
        this.queue( type || "fx", [] );
    }

    return this.each( function() {
        var dequeue = true,
            index = type != null && type + "queueHooks",
            timers = jQuery.timers,
            data = dataPriv.get( this );

        if ( index ) {
            if ( data[ index ] && data[ index ].stop ) {
                stopQueue( data[ index ] );
            }
        } else {
            for ( index in data ) {
                if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
                    stopQueue( data[ index ] );
                }
            }
        }

        for ( index = timers.length; index--; ) {
            if ( timers[ index ].elem === this &&
                ( type == null || timers[ index ].queue === type ) ) {

                timers[ index ].anim.stop( gotoEnd );
                dequeue = false;
                timers.splice( index, 1 );
            }
        }

        // Start the next in the queue if the last step wasn't forced.
        // Timers currently will call their complete callbacks, which
        // will dequeue but only if they were gotoEnd.
        if ( dequeue || !gotoEnd ) {
            jQuery.dequeue( this, type );
        }
    } );
},
finish: function( type ) {
    if ( type !== false ) {
        type = type || "fx";
    }
    return this.each( function() {
        var index,
            data = dataPriv.get( this ),
            queue = data[ type + "queue" ],
            hooks = data[ type + "queueHooks" ],
            timers = jQuery.timers,
            length = queue ? queue.length : 0;

        // Enable finishing flag on private data
        data.finish = true;

        // Empty the queue first
        jQuery.queue( this, type, [] );

        if ( hooks && hooks.stop ) {
            hooks.stop.call( this, true );
        }

        // Look for any active animations, and finish them
        for ( index = timers.length; index--; ) {
            if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
                timers[ index ].anim.stop( true );
                timers.splice( index, 1 );
            }
        }

        // Look for any animations in the old queue and finish them
        for ( index = 0; index < length; index++ ) {
            if ( queue[ index ] && queue[ index ].finish ) {
                queue[ index ].finish.call( this );
            }
        }

        // Turn off finishing flag
        delete data.finish;
    } );
}
} );

jQuery.each( [ "toggle", "show", "hide" ], function( _i, name ) {
var cssFn = jQuery.fn[ name ];
jQuery.fn[ name ] = function( speed, easing, callback ) {
    return speed == null || typeof speed === "boolean" ?
        cssFn.apply( this, arguments ) :
        this.animate( genFx( name, true ), speed, easing, callback );
};
} );

// Generate shortcuts for custom animations
jQuery.each( {
slideDown: genFx( "show" ),
slideUp: genFx( "hide" ),
slideToggle: genFx( "toggle" ),
fadeIn: { opacity: "show" },
fadeOut: { opacity: "hide" },
fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
jQuery.fn[ name ] = function( speed, easing, callback ) {
    return this.animate( props, speed, easing, callback );
};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
var timer,
    i = 0,
    timers = jQuery.timers;

fxNow = Date.now();

for ( ; i < timers.length; i++ ) {
    timer = timers[ i ];

    // Run the timer and safely remove it when done (allowing for external removal)
    if ( !timer() && timers[ i ] === timer ) {
        timers.splice( i--, 1 );
    }
}

if ( !timers.length ) {
    jQuery.fx.stop();
}
fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
jQuery.timers.push( timer );
jQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
if ( inProgress ) {
    return;
}

inProgress = true;
schedule();
};

jQuery.fx.stop = function() {
inProgress = null;
};

jQuery.fx.speeds = {
slow: 600,
fast: 200,

// Default speed
_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
type = type || "fx";

return this.queue( type, function( next, hooks ) {
    var timeout = window.setTimeout( next, time );
    hooks.stop = function() {
        window.clearTimeout( timeout );
    };
} );
};


( function() {
var input = document.createElement( "input" ),
    select = document.createElement( "select" ),
    opt = select.appendChild( document.createElement( "option" ) );

input.type = "checkbox";

// Support: Android <=4.3 only
// Default value for a checkbox should be "on"
support.checkOn = input.value !== "";

// Support: IE <=11 only
// Must access selectedIndex to make default options select
support.optSelected = opt.selected;

// Support: IE <=11 only
// An input loses its value after becoming a radio
input = document.createElement( "input" );
input.value = "t";
input.type = "radio";
support.radioValue = input.value === "t";
} )();


var boolHook,
attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
attr: function( name, value ) {
    return access( this, jQuery.attr, name, value, arguments.length > 1 );
},

removeAttr: function( name ) {
    return this.each( function() {
        jQuery.removeAttr( this, name );
    } );
}
} );

jQuery.extend( {
attr: function( elem, name, value ) {
    var ret, hooks,
        nType = elem.nodeType;

    // Don't get/set attributes on text, comment and attribute nodes
    if ( nType === 3 || nType === 8 || nType === 2 ) {
        return;
    }

    // Fallback to prop when attributes are not supported
    if ( typeof elem.getAttribute === "undefined" ) {
        return jQuery.prop( elem, name, value );
    }

    // Attribute hooks are determined by the lowercase version
    // Grab necessary hook if one is defined
    if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
        hooks = jQuery.attrHooks[ name.toLowerCase() ] ||
            ( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
    }

    if ( value !== undefined ) {
        if ( value === null ) {
            jQuery.removeAttr( elem, name );
            return;
        }

        if ( hooks && "set" in hooks &&
            ( ret = hooks.set( elem, value, name ) ) !== undefined ) {
            return ret;
        }

        elem.setAttribute( name, value + "" );
        return value;
    }

    if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
        return ret;
    }

    ret = jQuery.find.attr( elem, name );

    // Non-existent attributes return null, we normalize to undefined
    return ret == null ? undefined : ret;
},

attrHooks: {
    type: {
        set: function( elem, value ) {
            if ( !support.radioValue && value === "radio" &&
                nodeName( elem, "input" ) ) {
                var val = elem.value;
                elem.setAttribute( "type", value );
                if ( val ) {
                    elem.value = val;
                }
                return value;
            }
        }
    }
},

removeAttr: function( elem, value ) {
    var name,
        i = 0,

        // Attribute names can contain non-HTML whitespace characters
        // https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
        attrNames = value && value.match( rnothtmlwhite );

    if ( attrNames && elem.nodeType === 1 ) {
        while ( ( name = attrNames[ i++ ] ) ) {
            elem.removeAttribute( name );
        }
    }
}
} );

// Hooks for boolean attributes
boolHook = {
set: function( elem, value, name ) {
    if ( value === false ) {

        // Remove boolean attributes when set to false
        jQuery.removeAttr( elem, name );
    } else {
        elem.setAttribute( name, name );
    }
    return name;
}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( _i, name ) {
var getter = attrHandle[ name ] || jQuery.find.attr;

attrHandle[ name ] = function( elem, name, isXML ) {
    var ret, handle,
        lowercaseName = name.toLowerCase();

    if ( !isXML ) {

        // Avoid an infinite loop by temporarily removing this function from the getter
        handle = attrHandle[ lowercaseName ];
        attrHandle[ lowercaseName ] = ret;
        ret = getter( elem, name, isXML ) != null ?
            lowercaseName :
            null;
        attrHandle[ lowercaseName ] = handle;
    }
    return ret;
};
} );




var rfocusable = /^(?:input|select|textarea|button)$/i,
rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
prop: function( name, value ) {
    return access( this, jQuery.prop, name, value, arguments.length > 1 );
},

removeProp: function( name ) {
    return this.each( function() {
        delete this[ jQuery.propFix[ name ] || name ];
    } );
}
} );

jQuery.extend( {
prop: function( elem, name, value ) {
    var ret, hooks,
        nType = elem.nodeType;

    // Don't get/set properties on text, comment and attribute nodes
    if ( nType === 3 || nType === 8 || nType === 2 ) {
        return;
    }

    if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

        // Fix name and attach hooks
        name = jQuery.propFix[ name ] || name;
        hooks = jQuery.propHooks[ name ];
    }

    if ( value !== undefined ) {
        if ( hooks && "set" in hooks &&
            ( ret = hooks.set( elem, value, name ) ) !== undefined ) {
            return ret;
        }

        return ( elem[ name ] = value );
    }

    if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
        return ret;
    }

    return elem[ name ];
},

propHooks: {
    tabIndex: {
        get: function( elem ) {

            // Support: IE <=9 - 11 only
            // elem.tabIndex doesn't always return the
            // correct value when it hasn't been explicitly set
            // https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
            // Use proper attribute retrieval(#12072)
            var tabindex = jQuery.find.attr( elem, "tabindex" );

            if ( tabindex ) {
                return parseInt( tabindex, 10 );
            }

            if (
                rfocusable.test( elem.nodeName ) ||
                rclickable.test( elem.nodeName ) &&
                elem.href
            ) {
                return 0;
            }

            return -1;
        }
    }
},

propFix: {
    "for": "htmlFor",
    "class": "className"
}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule "no-unused-expressions" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
jQuery.propHooks.selected = {
    get: function( elem ) {

        /* eslint no-unused-expressions: "off" */

        var parent = elem.parentNode;
        if ( parent && parent.parentNode ) {
            parent.parentNode.selectedIndex;
        }
        return null;
    },
    set: function( elem ) {

        /* eslint no-unused-expressions: "off" */

        var parent = elem.parentNode;
        if ( parent ) {
            parent.selectedIndex;

            if ( parent.parentNode ) {
                parent.parentNode.selectedIndex;
            }
        }
    }
};
}

jQuery.each( [
"tabIndex",
"readOnly",
"maxLength",
"cellSpacing",
"cellPadding",
"rowSpan",
"colSpan",
"useMap",
"frameBorder",
"contentEditable"
], function() {
jQuery.propFix[ this.toLowerCase() ] = this;
} );




// Strip and collapse whitespace according to HTML spec
// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
function stripAndCollapse( value ) {
    var tokens = value.match( rnothtmlwhite ) || [];
    return tokens.join( " " );
}


function getClass( elem ) {
return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

function classesToArray( value ) {
if ( Array.isArray( value ) ) {
    return value;
}
if ( typeof value === "string" ) {
    return value.match( rnothtmlwhite ) || [];
}
return [];
}

jQuery.fn.extend( {
addClass: function( value ) {
    var classes, elem, cur, curValue, clazz, j, finalValue,
        i = 0;

    if ( isFunction( value ) ) {
        return this.each( function( j ) {
            jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
        } );
    }

    classes = classesToArray( value );

    if ( classes.length ) {
        while ( ( elem = this[ i++ ] ) ) {
            curValue = getClass( elem );
            cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

            if ( cur ) {
                j = 0;
                while ( ( clazz = classes[ j++ ] ) ) {
                    if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
                        cur += clazz + " ";
                    }
                }

                // Only assign if different to avoid unneeded rendering.
                finalValue = stripAndCollapse( cur );
                if ( curValue !== finalValue ) {
                    elem.setAttribute( "class", finalValue );
                }
            }
        }
    }

    return this;
},

removeClass: function( value ) {
    var classes, elem, cur, curValue, clazz, j, finalValue,
        i = 0;

    if ( isFunction( value ) ) {
        return this.each( function( j ) {
            jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
        } );
    }

    if ( !arguments.length ) {
        return this.attr( "class", "" );
    }

    classes = classesToArray( value );

    if ( classes.length ) {
        while ( ( elem = this[ i++ ] ) ) {
            curValue = getClass( elem );

            // This expression is here for better compressibility (see addClass)
            cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

            if ( cur ) {
                j = 0;
                while ( ( clazz = classes[ j++ ] ) ) {

                    // Remove *all* instances
                    while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
                        cur = cur.replace( " " + clazz + " ", " " );
                    }
                }

                // Only assign if different to avoid unneeded rendering.
                finalValue = stripAndCollapse( cur );
                if ( curValue !== finalValue ) {
                    elem.setAttribute( "class", finalValue );
                }
            }
        }
    }

    return this;
},

toggleClass: function( value, stateVal ) {
    var type = typeof value,
        isValidValue = type === "string" || Array.isArray( value );

    if ( typeof stateVal === "boolean" && isValidValue ) {
        return stateVal ? this.addClass( value ) : this.removeClass( value );
    }

    if ( isFunction( value ) ) {
        return this.each( function( i ) {
            jQuery( this ).toggleClass(
                value.call( this, i, getClass( this ), stateVal ),
                stateVal
            );
        } );
    }

    return this.each( function() {
        var className, i, self, classNames;

        if ( isValidValue ) {

            // Toggle individual class names
            i = 0;
            self = jQuery( this );
            classNames = classesToArray( value );

            while ( ( className = classNames[ i++ ] ) ) {

                // Check each className given, space separated list
                if ( self.hasClass( className ) ) {
                    self.removeClass( className );
                } else {
                    self.addClass( className );
                }
            }

        // Toggle whole class name
        } else if ( value === undefined || type === "boolean" ) {
            className = getClass( this );
            if ( className ) {

                // Store className if set
                dataPriv.set( this, "__className__", className );
            }

            // If the element has a class name or if we're passed `false`,
            // then remove the whole classname (if there was one, the above saved it).
            // Otherwise bring back whatever was previously saved (if anything),
            // falling back to the empty string if nothing was stored.
            if ( this.setAttribute ) {
                this.setAttribute( "class",
                    className || value === false ?
                    "" :
                    dataPriv.get( this, "__className__" ) || ""
                );
            }
        }
    } );
},

hasClass: function( selector ) {
    var className, elem,
        i = 0;

    className = " " + selector + " ";
    while ( ( elem = this[ i++ ] ) ) {
        if ( elem.nodeType === 1 &&
            ( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
                return true;
        }
    }

    return false;
}
} );




var rreturn = /\r/g;

jQuery.fn.extend( {
val: function( value ) {
    var hooks, ret, valueIsFunction,
        elem = this[ 0 ];

    if ( !arguments.length ) {
        if ( elem ) {
            hooks = jQuery.valHooks[ elem.type ] ||
                jQuery.valHooks[ elem.nodeName.toLowerCase() ];

            if ( hooks &&
                "get" in hooks &&
                ( ret = hooks.get( elem, "value" ) ) !== undefined
            ) {
                return ret;
            }

            ret = elem.value;

            // Handle most common string cases
            if ( typeof ret === "string" ) {
                return ret.replace( rreturn, "" );
            }

            // Handle cases where value is null/undef or number
            return ret == null ? "" : ret;
        }

        return;
    }

    valueIsFunction = isFunction( value );

    return this.each( function( i ) {
        var val;

        if ( this.nodeType !== 1 ) {
            return;
        }

        if ( valueIsFunction ) {
            val = value.call( this, i, jQuery( this ).val() );
        } else {
            val = value;
        }

        // Treat null/undefined as ""; convert numbers to string
        if ( val == null ) {
            val = "";

        } else if ( typeof val === "number" ) {
            val += "";

        } else if ( Array.isArray( val ) ) {
            val = jQuery.map( val, function( value ) {
                return value == null ? "" : value + "";
            } );
        }

        hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

        // If set returns undefined, fall back to normal setting
        if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
            this.value = val;
        }
    } );
}
} );

jQuery.extend( {
valHooks: {
    option: {
        get: function( elem ) {

            var val = jQuery.find.attr( elem, "value" );
            return val != null ?
                val :

                // Support: IE <=10 - 11 only
                // option.text throws exceptions (#14686, #14858)
                // Strip and collapse whitespace
                // https://html.spec.whatwg.org/#strip-and-collapse-whitespace
                stripAndCollapse( jQuery.text( elem ) );
        }
    },
    select: {
        get: function( elem ) {
            var value, option, i,
                options = elem.options,
                index = elem.selectedIndex,
                one = elem.type === "select-one",
                values = one ? null : [],
                max = one ? index + 1 : options.length;

            if ( index < 0 ) {
                i = max;

            } else {
                i = one ? index : 0;
            }

            // Loop through all the selected options
            for ( ; i < max; i++ ) {
                option = options[ i ];

                // Support: IE <=9 only
                // IE8-9 doesn't update selected after form reset (#2551)
                if ( ( option.selected || i === index ) &&

                        // Don't return options that are disabled or in a disabled optgroup
                        !option.disabled &&
                        ( !option.parentNode.disabled ||
                            !nodeName( option.parentNode, "optgroup" ) ) ) {

                    // Get the specific value for the option
                    value = jQuery( option ).val();

                    // We don't need an array for one selects
                    if ( one ) {
                        return value;
                    }

                    // Multi-Selects return an array
                    values.push( value );
                }
            }

            return values;
        },

        set: function( elem, value ) {
            var optionSet, option,
                options = elem.options,
                values = jQuery.makeArray( value ),
                i = options.length;

            while ( i-- ) {
                option = options[ i ];

                /* eslint-disable no-cond-assign */

                if ( option.selected =
                    jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
                ) {
                    optionSet = true;
                }

                /* eslint-enable no-cond-assign */
            }

            // Force browsers to behave consistently when non-matching value is set
            if ( !optionSet ) {
                elem.selectedIndex = -1;
            }
            return values;
        }
    }
}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
jQuery.valHooks[ this ] = {
    set: function( elem, value ) {
        if ( Array.isArray( value ) ) {
            return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
        }
    }
};
if ( !support.checkOn ) {
    jQuery.valHooks[ this ].get = function( elem ) {
        return elem.getAttribute( "value" ) === null ? "on" : elem.value;
    };
}
} );




// Return jQuery for attributes-only inclusion


support.focusin = "onfocusin" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
stopPropagationCallback = function( e ) {
    e.stopPropagation();
};

jQuery.extend( jQuery.event, {

trigger: function( event, data, elem, onlyHandlers ) {

    var i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
        eventPath = [ elem || document ],
        type = hasOwn.call( event, "type" ) ? event.type : event,
        namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

    cur = lastElement = tmp = elem = elem || document;

    // Don't do events on text and comment nodes
    if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
        return;
    }

    // focus/blur morphs to focusin/out; ensure we're not firing them right now
    if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
        return;
    }

    if ( type.indexOf( "." ) > -1 ) {

        // Namespaced trigger; create a regexp to match event type in handle()
        namespaces = type.split( "." );
        type = namespaces.shift();
        namespaces.sort();
    }
    ontype = type.indexOf( ":" ) < 0 && "on" + type;

    // Caller can pass in a jQuery.Event object, Object, or just an event type string
    event = event[ jQuery.expando ] ?
        event :
        new jQuery.Event( type, typeof event === "object" && event );

    // Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
    event.isTrigger = onlyHandlers ? 2 : 3;
    event.namespace = namespaces.join( "." );
    event.rnamespace = event.namespace ?
        new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
        null;

    // Clean up the event in case it is being reused
    event.result = undefined;
    if ( !event.target ) {
        event.target = elem;
    }

    // Clone any incoming data and prepend the event, creating the handler arg list
    data = data == null ?
        [ event ] :
        jQuery.makeArray( data, [ event ] );

    // Allow special events to draw outside the lines
    special = jQuery.event.special[ type ] || {};
    if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
        return;
    }

    // Determine event propagation path in advance, per W3C events spec (#9951)
    // Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
    if ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

        bubbleType = special.delegateType || type;
        if ( !rfocusMorph.test( bubbleType + type ) ) {
            cur = cur.parentNode;
        }
        for ( ; cur; cur = cur.parentNode ) {
            eventPath.push( cur );
            tmp = cur;
        }

        // Only add window if we got to document (e.g., not plain obj or detached DOM)
        if ( tmp === ( elem.ownerDocument || document ) ) {
            eventPath.push( tmp.defaultView || tmp.parentWindow || window );
        }
    }

    // Fire handlers on the event path
    i = 0;
    while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
        lastElement = cur;
        event.type = i > 1 ?
            bubbleType :
            special.bindType || type;

        // jQuery handler
        handle = (
                dataPriv.get( cur, "events" ) || Object.create( null )
            )[ event.type ] &&
            dataPriv.get( cur, "handle" );
        if ( handle ) {
            handle.apply( cur, data );
        }

        // Native handler
        handle = ontype && cur[ ontype ];
        if ( handle && handle.apply && acceptData( cur ) ) {
            event.result = handle.apply( cur, data );
            if ( event.result === false ) {
                event.preventDefault();
            }
        }
    }
    event.type = type;

    // If nobody prevented the default action, do it now
    if ( !onlyHandlers && !event.isDefaultPrevented() ) {

        if ( ( !special._default ||
            special._default.apply( eventPath.pop(), data ) === false ) &&
            acceptData( elem ) ) {

            // Call a native DOM method on the target with the same name as the event.
            // Don't do default actions on window, that's where global variables be (#6170)
            if ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

                // Don't re-trigger an onFOO event when we call its FOO() method
                tmp = elem[ ontype ];

                if ( tmp ) {
                    elem[ ontype ] = null;
                }

                // Prevent re-triggering of the same event, since we already bubbled it above
                jQuery.event.triggered = type;

                if ( event.isPropagationStopped() ) {
                    lastElement.addEventListener( type, stopPropagationCallback );
                }

                elem[ type ]();

                if ( event.isPropagationStopped() ) {
                    lastElement.removeEventListener( type, stopPropagationCallback );
                }

                jQuery.event.triggered = undefined;

                if ( tmp ) {
                    elem[ ontype ] = tmp;
                }
            }
        }
    }

    return event.result;
},

// Piggyback on a donor event to simulate a different one
// Used only for `focus(in | out)` events
simulate: function( type, elem, event ) {
    var e = jQuery.extend(
        new jQuery.Event(),
        event,
        {
            type: type,
            isSimulated: true
        }
    );

    jQuery.event.trigger( e, null, elem );
}

} );

jQuery.fn.extend( {

trigger: function( type, data ) {
    return this.each( function() {
        jQuery.event.trigger( type, data, this );
    } );
},
triggerHandler: function( type, data ) {
    var elem = this[ 0 ];
    if ( elem ) {
        return jQuery.event.trigger( type, data, elem, true );
    }
}
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

    // Attach a single capturing handler on the document while someone wants focusin/focusout
    var handler = function( event ) {
        jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
    };

    jQuery.event.special[ fix ] = {
        setup: function() {

            // Handle: regular nodes (via `this.ownerDocument`), window
            // (via `this.document`) & document (via `this`).
            var doc = this.ownerDocument || this.document || this,
                attaches = dataPriv.access( doc, fix );

            if ( !attaches ) {
                doc.addEventListener( orig, handler, true );
            }
            dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
        },
        teardown: function() {
            var doc = this.ownerDocument || this.document || this,
                attaches = dataPriv.access( doc, fix ) - 1;

            if ( !attaches ) {
                doc.removeEventListener( orig, handler, true );
                dataPriv.remove( doc, fix );

            } else {
                dataPriv.access( doc, fix, attaches );
            }
        }
    };
} );
}
var location = window.location;

var nonce = { guid: Date.now() };

var rquery = ( /\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
var xml;
if ( !data || typeof data !== "string" ) {
    return null;
}

// Support: IE 9 - 11 only
// IE throws on parseFromString with invalid input.
try {
    xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
} catch ( e ) {
    xml = undefined;
}

if ( !xml || xml.getElementsByTagName( "parsererror" ).length ) {
    jQuery.error( "Invalid XML: " + data );
}
return xml;
};


var
rbracket = /\[\]$/,
rCRLF = /\r?\n/g,
rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
var name;

if ( Array.isArray( obj ) ) {

    // Serialize array item.
    jQuery.each( obj, function( i, v ) {
        if ( traditional || rbracket.test( prefix ) ) {

            // Treat each array item as a scalar.
            add( prefix, v );

        } else {

            // Item is non-scalar (array or object), encode its numeric index.
            buildParams(
                prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
                v,
                traditional,
                add
            );
        }
    } );

} else if ( !traditional && toType( obj ) === "object" ) {

    // Serialize object item.
    for ( name in obj ) {
        buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
    }

} else {

    // Serialize scalar item.
    add( prefix, obj );
}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
var prefix,
    s = [],
    add = function( key, valueOrFunction ) {

        // If value is a function, invoke it and use its return value
        var value = isFunction( valueOrFunction ) ?
            valueOrFunction() :
            valueOrFunction;

        s[ s.length ] = encodeURIComponent( key ) + "=" +
            encodeURIComponent( value == null ? "" : value );
    };

if ( a == null ) {
    return "";
}

// If an array was passed in, assume that it is an array of form elements.
if ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

    // Serialize the form elements
    jQuery.each( a, function() {
        add( this.name, this.value );
    } );

} else {

    // If traditional, encode the "old" way (the way 1.3.2 or older
    // did it), otherwise encode params recursively.
    for ( prefix in a ) {
        buildParams( prefix, a[ prefix ], traditional, add );
    }
}

// Return the resulting serialization
return s.join( "&" );
};

jQuery.fn.extend( {
serialize: function() {
    return jQuery.param( this.serializeArray() );
},
serializeArray: function() {
    return this.map( function() {

        // Can add propHook for "elements" to filter or add form elements
        var elements = jQuery.prop( this, "elements" );
        return elements ? jQuery.makeArray( elements ) : this;
    } )
    .filter( function() {
        var type = this.type;

        // Use .is( ":disabled" ) so that fieldset[disabled] works
        return this.name && !jQuery( this ).is( ":disabled" ) &&
            rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
            ( this.checked || !rcheckableType.test( type ) );
    } )
    .map( function( _i, elem ) {
        var val = jQuery( this ).val();

        if ( val == null ) {
            return null;
        }

        if ( Array.isArray( val ) ) {
            return jQuery.map( val, function( val ) {
                return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
            } );
        }

        return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
    } ).get();
}
} );


var
r20 = /%20/g,
rhash = /#.*$/,
rantiCache = /([?&])_=[^&]*/,
rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

// #7653, #8125, #8152: local protocol detection
rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
rnoContent = /^(?:GET|HEAD)$/,
rprotocol = /^\/\//,

/* Prefilters
 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
 * 2) These are called:
 *    - BEFORE asking for a transport
 *    - AFTER param serialization (s.data is a string if s.processData is true)
 * 3) key is the dataType
 * 4) the catchall symbol "*" can be used
 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
 */
prefilters = {},

/* Transports bindings
 * 1) key is the dataType
 * 2) the catchall symbol "*" can be used
 * 3) selection will start with transport dataType and THEN go to "*" if needed
 */
transports = {},

// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
allTypes = "*/".concat( "*" ),

// Anchor tag for parsing the document origin
originAnchor = document.createElement( "a" );
originAnchor.href = location.href;

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

// dataTypeExpression is optional and defaults to "*"
return function( dataTypeExpression, func ) {

    if ( typeof dataTypeExpression !== "string" ) {
        func = dataTypeExpression;
        dataTypeExpression = "*";
    }

    var dataType,
        i = 0,
        dataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

    if ( isFunction( func ) ) {

        // For each dataType in the dataTypeExpression
        while ( ( dataType = dataTypes[ i++ ] ) ) {

            // Prepend if requested
            if ( dataType[ 0 ] === "+" ) {
                dataType = dataType.slice( 1 ) || "*";
                ( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

            // Otherwise append
            } else {
                ( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
            }
        }
    }
};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

var inspected = {},
    seekingTransport = ( structure === transports );

function inspect( dataType ) {
    var selected;
    inspected[ dataType ] = true;
    jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
        var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
        if ( typeof dataTypeOrTransport === "string" &&
            !seekingTransport && !inspected[ dataTypeOrTransport ] ) {

            options.dataTypes.unshift( dataTypeOrTransport );
            inspect( dataTypeOrTransport );
            return false;
        } else if ( seekingTransport ) {
            return !( selected = dataTypeOrTransport );
        }
    } );
    return selected;
}

return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
var key, deep,
    flatOptions = jQuery.ajaxSettings.flatOptions || {};

for ( key in src ) {
    if ( src[ key ] !== undefined ) {
        ( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
    }
}
if ( deep ) {
    jQuery.extend( true, target, deep );
}

return target;
}

/* Handles responses to an ajax request:
* - finds the right dataType (mediates between content-type and expected dataType)
* - returns the corresponding response
*/
function ajaxHandleResponses( s, jqXHR, responses ) {

var ct, type, finalDataType, firstDataType,
    contents = s.contents,
    dataTypes = s.dataTypes;

// Remove auto dataType and get content-type in the process
while ( dataTypes[ 0 ] === "*" ) {
    dataTypes.shift();
    if ( ct === undefined ) {
        ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
    }
}

// Check if we're dealing with a known content-type
if ( ct ) {
    for ( type in contents ) {
        if ( contents[ type ] && contents[ type ].test( ct ) ) {
            dataTypes.unshift( type );
            break;
        }
    }
}

// Check to see if we have a response for the expected dataType
if ( dataTypes[ 0 ] in responses ) {
    finalDataType = dataTypes[ 0 ];
} else {

    // Try convertible dataTypes
    for ( type in responses ) {
        if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
            finalDataType = type;
            break;
        }
        if ( !firstDataType ) {
            firstDataType = type;
        }
    }

    // Or just use first one
    finalDataType = finalDataType || firstDataType;
}

// If we found a dataType
// We add the dataType to the list if needed
// and return the corresponding response
if ( finalDataType ) {
    if ( finalDataType !== dataTypes[ 0 ] ) {
        dataTypes.unshift( finalDataType );
    }
    return responses[ finalDataType ];
}
}

/* Chain conversions given the request and the original response
* Also sets the responseXXX fields on the jqXHR instance
*/
function ajaxConvert( s, response, jqXHR, isSuccess ) {
var conv2, current, conv, tmp, prev,
    converters = {},

    // Work with a copy of dataTypes in case we need to modify it for conversion
    dataTypes = s.dataTypes.slice();

// Create converters map with lowercased keys
if ( dataTypes[ 1 ] ) {
    for ( conv in s.converters ) {
        converters[ conv.toLowerCase() ] = s.converters[ conv ];
    }
}

current = dataTypes.shift();

// Convert to each sequential dataType
while ( current ) {

    if ( s.responseFields[ current ] ) {
        jqXHR[ s.responseFields[ current ] ] = response;
    }

    // Apply the dataFilter if provided
    if ( !prev && isSuccess && s.dataFilter ) {
        response = s.dataFilter( response, s.dataType );
    }

    prev = current;
    current = dataTypes.shift();

    if ( current ) {

        // There's only work to do if current dataType is non-auto
        if ( current === "*" ) {

            current = prev;

        // Convert response if prev dataType is non-auto and differs from current
        } else if ( prev !== "*" && prev !== current ) {

            // Seek a direct converter
            conv = converters[ prev + " " + current ] || converters[ "* " + current ];

            // If none found, seek a pair
            if ( !conv ) {
                for ( conv2 in converters ) {

                    // If conv2 outputs current
                    tmp = conv2.split( " " );
                    if ( tmp[ 1 ] === current ) {

                        // If prev can be converted to accepted input
                        conv = converters[ prev + " " + tmp[ 0 ] ] ||
                            converters[ "* " + tmp[ 0 ] ];
                        if ( conv ) {

                            // Condense equivalence converters
                            if ( conv === true ) {
                                conv = converters[ conv2 ];

                            // Otherwise, insert the intermediate dataType
                            } else if ( converters[ conv2 ] !== true ) {
                                current = tmp[ 0 ];
                                dataTypes.unshift( tmp[ 1 ] );
                            }
                            break;
                        }
                    }
                }
            }

            // Apply converter (if not an equivalence)
            if ( conv !== true ) {

                // Unless errors are allowed to bubble, catch and return them
                if ( conv && s.throws ) {
                    response = conv( response );
                } else {
                    try {
                        response = conv( response );
                    } catch ( e ) {
                        return {
                            state: "parsererror",
                            error: conv ? e : "No conversion from " + prev + " to " + current
                        };
                    }
                }
            }
        }
    }
}

return { state: "success", data: response };
}

jQuery.extend( {

// Counter for holding the number of active queries
active: 0,

// Last-Modified header cache for next request
lastModified: {},
etag: {},

ajaxSettings: {
    url: location.href,
    type: "GET",
    isLocal: rlocalProtocol.test( location.protocol ),
    global: true,
    processData: true,
    async: true,
    contentType: "application/x-www-form-urlencoded; charset=UTF-8",

    /*
    timeout: 0,
    data: null,
    dataType: null,
    username: null,
    password: null,
    cache: null,
    throws: false,
    traditional: false,
    headers: {},
    */

    accepts: {
        "*": allTypes,
        text: "text/plain",
        html: "text/html",
        xml: "application/xml, text/xml",
        json: "application/json, text/javascript"
    },

    contents: {
        xml: /\bxml\b/,
        html: /\bhtml/,
        json: /\bjson\b/
    },

    responseFields: {
        xml: "responseXML",
        text: "responseText",
        json: "responseJSON"
    },

    // Data converters
    // Keys separate source (or catchall "*") and destination types with a single space
    converters: {

        // Convert anything to text
        "* text": String,

        // Text to html (true = no transformation)
        "text html": true,

        // Evaluate text as a json expression
        "text json": JSON.parse,

        // Parse text as xml
        "text xml": jQuery.parseXML
    },

    // For options that shouldn't be deep extended:
    // you can add your own custom options here if
    // and when you create one that shouldn't be
    // deep extended (see ajaxExtend)
    flatOptions: {
        url: true,
        context: true
    }
},

// Creates a full fledged settings object into target
// with both ajaxSettings and settings fields.
// If target is omitted, writes into ajaxSettings.
ajaxSetup: function( target, settings ) {
    return settings ?

        // Building a settings object
        ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

        // Extending ajaxSettings
        ajaxExtend( jQuery.ajaxSettings, target );
},

ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
ajaxTransport: addToPrefiltersOrTransports( transports ),

// Main method
ajax: function( url, options ) {

    // If url is an object, simulate pre-1.5 signature
    if ( typeof url === "object" ) {
        options = url;
        url = undefined;
    }

    // Force options to be an object
    options = options || {};

    var transport,

        // URL without anti-cache param
        cacheURL,

        // Response headers
        responseHeadersString,
        responseHeaders,

        // timeout handle
        timeoutTimer,

        // Url cleanup var
        urlAnchor,

        // Request state (becomes false upon send and true upon completion)
        completed,

        // To know if global events are to be dispatched
        fireGlobals,

        // Loop variable
        i,

        // uncached part of the url
        uncached,

        // Create the final options object
        s = jQuery.ajaxSetup( {}, options ),

        // Callbacks context
        callbackContext = s.context || s,

        // Context for global events is callbackContext if it is a DOM node or jQuery collection
        globalEventContext = s.context &&
            ( callbackContext.nodeType || callbackContext.jquery ) ?
                jQuery( callbackContext ) :
                jQuery.event,

        // Deferreds
        deferred = jQuery.Deferred(),
        completeDeferred = jQuery.Callbacks( "once memory" ),

        // Status-dependent callbacks
        statusCode = s.statusCode || {},

        // Headers (they are sent all at once)
        requestHeaders = {},
        requestHeadersNames = {},

        // Default abort message
        strAbort = "canceled",

        // Fake xhr
        jqXHR = {
            readyState: 0,

            // Builds headers hashtable if needed
            getResponseHeader: function( key ) {
                var match;
                if ( completed ) {
                    if ( !responseHeaders ) {
                        responseHeaders = {};
                        while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
                            responseHeaders[ match[ 1 ].toLowerCase() + " " ] =
                                ( responseHeaders[ match[ 1 ].toLowerCase() + " " ] || [] )
                                    .concat( match[ 2 ] );
                        }
                    }
                    match = responseHeaders[ key.toLowerCase() + " " ];
                }
                return match == null ? null : match.join( ", " );
            },

            // Raw string
            getAllResponseHeaders: function() {
                return completed ? responseHeadersString : null;
            },

            // Caches the header
            setRequestHeader: function( name, value ) {
                if ( completed == null ) {
                    name = requestHeadersNames[ name.toLowerCase() ] =
                        requestHeadersNames[ name.toLowerCase() ] || name;
                    requestHeaders[ name ] = value;
                }
                return this;
            },

            // Overrides response content-type header
            overrideMimeType: function( type ) {
                if ( completed == null ) {
                    s.mimeType = type;
                }
                return this;
            },

            // Status-dependent callbacks
            statusCode: function( map ) {
                var code;
                if ( map ) {
                    if ( completed ) {

                        // Execute the appropriate callbacks
                        jqXHR.always( map[ jqXHR.status ] );
                    } else {

                        // Lazy-add the new callbacks in a way that preserves old ones
                        for ( code in map ) {
                            statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
                        }
                    }
                }
                return this;
            },

            // Cancel the request
            abort: function( statusText ) {
                var finalText = statusText || strAbort;
                if ( transport ) {
                    transport.abort( finalText );
                }
                done( 0, finalText );
                return this;
            }
        };

    // Attach deferreds
    deferred.promise( jqXHR );

    // Add protocol if not provided (prefilters might expect it)
    // Handle falsy url in the settings object (#10093: consistency with old signature)
    // We also use the url parameter if available
    s.url = ( ( url || s.url || location.href ) + "" )
        .replace( rprotocol, location.protocol + "//" );

    // Alias method option to type as per ticket #12004
    s.type = options.method || options.type || s.method || s.type;

    // Extract dataTypes list
    s.dataTypes = ( s.dataType || "*" ).toLowerCase().match( rnothtmlwhite ) || [ "" ];

    // A cross-domain request is in order when the origin doesn't match the current origin.
    if ( s.crossDomain == null ) {
        urlAnchor = document.createElement( "a" );

        // Support: IE <=8 - 11, Edge 12 - 15
        // IE throws exception on accessing the href property if url is malformed,
        // e.g. http://example.com:80x/
        try {
            urlAnchor.href = s.url;

            // Support: IE <=8 - 11 only
            // Anchor's host property isn't correctly set when s.url is relative
            urlAnchor.href = urlAnchor.href;
            s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
                urlAnchor.protocol + "//" + urlAnchor.host;
        } catch ( e ) {

            // If there is an error parsing the URL, assume it is crossDomain,
            // it can be rejected by the transport if it is invalid
            s.crossDomain = true;
        }
    }

    // Convert data if not already a string
    if ( s.data && s.processData && typeof s.data !== "string" ) {
        s.data = jQuery.param( s.data, s.traditional );
    }

    // Apply prefilters
    inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

    // If request was aborted inside a prefilter, stop there
    if ( completed ) {
        return jqXHR;
    }

    // We can fire global events as of now if asked to
    // Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
    fireGlobals = jQuery.event && s.global;

    // Watch for a new set of requests
    if ( fireGlobals && jQuery.active++ === 0 ) {
        jQuery.event.trigger( "ajaxStart" );
    }

    // Uppercase the type
    s.type = s.type.toUpperCase();

    // Determine if request has content
    s.hasContent = !rnoContent.test( s.type );

    // Save the URL in case we're toying with the If-Modified-Since
    // and/or If-None-Match header later on
    // Remove hash to simplify url manipulation
    cacheURL = s.url.replace( rhash, "" );

    // More options handling for requests with no content
    if ( !s.hasContent ) {

        // Remember the hash so we can put it back
        uncached = s.url.slice( cacheURL.length );

        // If data is available and should be processed, append data to url
        if ( s.data && ( s.processData || typeof s.data === "string" ) ) {
            cacheURL += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data;

            // #9682: remove data so that it's not used in an eventual retry
            delete s.data;
        }

        // Add or update anti-cache param if needed
        if ( s.cache === false ) {
            cacheURL = cacheURL.replace( rantiCache, "$1" );
            uncached = ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ( nonce.guid++ ) +
                uncached;
        }

        // Put hash and anti-cache on the URL that will be requested (gh-1732)
        s.url = cacheURL + uncached;

    // Change '%20' to '+' if this is encoded form body content (gh-2658)
    } else if ( s.data && s.processData &&
        ( s.contentType || "" ).indexOf( "application/x-www-form-urlencoded" ) === 0 ) {
        s.data = s.data.replace( r20, "+" );
    }

    // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
    if ( s.ifModified ) {
        if ( jQuery.lastModified[ cacheURL ] ) {
            jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
        }
        if ( jQuery.etag[ cacheURL ] ) {
            jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
        }
    }

    // Set the correct header, if data is being sent
    if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
        jqXHR.setRequestHeader( "Content-Type", s.contentType );
    }

    // Set the Accepts header for the server, depending on the dataType
    jqXHR.setRequestHeader(
        "Accept",
        s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
            s.accepts[ s.dataTypes[ 0 ] ] +
                ( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
            s.accepts[ "*" ]
    );

    // Check for headers option
    for ( i in s.headers ) {
        jqXHR.setRequestHeader( i, s.headers[ i ] );
    }

    // Allow custom headers/mimetypes and early abort
    if ( s.beforeSend &&
        ( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

        // Abort if not done already and return
        return jqXHR.abort();
    }

    // Aborting is no longer a cancellation
    strAbort = "abort";

    // Install callbacks on deferreds
    completeDeferred.add( s.complete );
    jqXHR.done( s.success );
    jqXHR.fail( s.error );

    // Get transport
    transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

    // If no transport, we auto-abort
    if ( !transport ) {
        done( -1, "No Transport" );
    } else {
        jqXHR.readyState = 1;

        // Send global event
        if ( fireGlobals ) {
            globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
        }

        // If request was aborted inside ajaxSend, stop there
        if ( completed ) {
            return jqXHR;
        }

        // Timeout
        if ( s.async && s.timeout > 0 ) {
            timeoutTimer = window.setTimeout( function() {
                jqXHR.abort( "timeout" );
            }, s.timeout );
        }

        try {
            completed = false;
            transport.send( requestHeaders, done );
        } catch ( e ) {

            // Rethrow post-completion exceptions
            if ( completed ) {
                throw e;
            }

            // Propagate others as results
            done( -1, e );
        }
    }

    // Callback for when everything is done
    function done( status, nativeStatusText, responses, headers ) {
        var isSuccess, success, error, response, modified,
            statusText = nativeStatusText;

        // Ignore repeat invocations
        if ( completed ) {
            return;
        }

        completed = true;

        // Clear timeout if it exists
        if ( timeoutTimer ) {
            window.clearTimeout( timeoutTimer );
        }

        // Dereference transport for early garbage collection
        // (no matter how long the jqXHR object will be used)
        transport = undefined;

        // Cache response headers
        responseHeadersString = headers || "";

        // Set readyState
        jqXHR.readyState = status > 0 ? 4 : 0;

        // Determine if successful
        isSuccess = status >= 200 && status < 300 || status === 304;

        // Get response data
        if ( responses ) {
            response = ajaxHandleResponses( s, jqXHR, responses );
        }

        // Use a noop converter for missing script
        if ( !isSuccess && jQuery.inArray( "script", s.dataTypes ) > -1 ) {
            s.converters[ "text script" ] = function() {};
        }

        // Convert no matter what (that way responseXXX fields are always set)
        response = ajaxConvert( s, response, jqXHR, isSuccess );

        // If successful, handle type chaining
        if ( isSuccess ) {

            // Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
            if ( s.ifModified ) {
                modified = jqXHR.getResponseHeader( "Last-Modified" );
                if ( modified ) {
                    jQuery.lastModified[ cacheURL ] = modified;
                }
                modified = jqXHR.getResponseHeader( "etag" );
                if ( modified ) {
                    jQuery.etag[ cacheURL ] = modified;
                }
            }

            // if no content
            if ( status === 204 || s.type === "HEAD" ) {
                statusText = "nocontent";

            // if not modified
            } else if ( status === 304 ) {
                statusText = "notmodified";

            // If we have data, let's convert it
            } else {
                statusText = response.state;
                success = response.data;
                error = response.error;
                isSuccess = !error;
            }
        } else {

            // Extract error from statusText and normalize for non-aborts
            error = statusText;
            if ( status || !statusText ) {
                statusText = "error";
                if ( status < 0 ) {
                    status = 0;
                }
            }
        }

        // Set data for the fake xhr object
        jqXHR.status = status;
        jqXHR.statusText = ( nativeStatusText || statusText ) + "";

        // Success/Error
        if ( isSuccess ) {
            deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
        } else {
            deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
        }

        // Status-dependent callbacks
        jqXHR.statusCode( statusCode );
        statusCode = undefined;

        if ( fireGlobals ) {
            globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
                [ jqXHR, s, isSuccess ? success : error ] );
        }

        // Complete
        completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

        if ( fireGlobals ) {
            globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

            // Handle the global AJAX counter
            if ( !( --jQuery.active ) ) {
                jQuery.event.trigger( "ajaxStop" );
            }
        }
    }

    return jqXHR;
},

getJSON: function( url, data, callback ) {
    return jQuery.get( url, data, callback, "json" );
},

getScript: function( url, callback ) {
    return jQuery.get( url, undefined, callback, "script" );
}
} );

jQuery.each( [ "get", "post" ], function( _i, method ) {
jQuery[ method ] = function( url, data, callback, type ) {

    // Shift arguments if data argument was omitted
    if ( isFunction( data ) ) {
        type = type || callback;
        callback = data;
        data = undefined;
    }

    // The url can be an options object (which then must have .url)
    return jQuery.ajax( jQuery.extend( {
        url: url,
        type: method,
        dataType: type,
        data: data,
        success: callback
    }, jQuery.isPlainObject( url ) && url ) );
};
} );

jQuery.ajaxPrefilter( function( s ) {
var i;
for ( i in s.headers ) {
    if ( i.toLowerCase() === "content-type" ) {
        s.contentType = s.headers[ i ] || "";
    }
}
} );


jQuery._evalUrl = function( url, options, doc ) {
return jQuery.ajax( {
    url: url,

    // Make this explicit, since user can override this through ajaxSetup (#11264)
    type: "GET",
    dataType: "script",
    cache: true,
    async: false,
    global: false,

    // Only evaluate the response if it is successful (gh-4126)
    // dataFilter is not invoked for failure responses, so using it instead
    // of the default converter is kludgy but it works.
    converters: {
        "text script": function() {}
    },
    dataFilter: function( response ) {
        jQuery.globalEval( response, options, doc );
    }
} );
};


jQuery.fn.extend( {
wrapAll: function( html ) {
    var wrap;

    if ( this[ 0 ] ) {
        if ( isFunction( html ) ) {
            html = html.call( this[ 0 ] );
        }

        // The elements to wrap the target around
        wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

        if ( this[ 0 ].parentNode ) {
            wrap.insertBefore( this[ 0 ] );
        }

        wrap.map( function() {
            var elem = this;

            while ( elem.firstElementChild ) {
                elem = elem.firstElementChild;
            }

            return elem;
        } ).append( this );
    }

    return this;
},

wrapInner: function( html ) {
    if ( isFunction( html ) ) {
        return this.each( function( i ) {
            jQuery( this ).wrapInner( html.call( this, i ) );
        } );
    }

    return this.each( function() {
        var self = jQuery( this ),
            contents = self.contents();

        if ( contents.length ) {
            contents.wrapAll( html );

        } else {
            self.append( html );
        }
    } );
},

wrap: function( html ) {
    var htmlIsFunction = isFunction( html );

    return this.each( function( i ) {
        jQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
    } );
},

unwrap: function( selector ) {
    this.parent( selector ).not( "body" ).each( function() {
        jQuery( this ).replaceWith( this.childNodes );
    } );
    return this;
}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
try {
    return new window.XMLHttpRequest();
} catch ( e ) {}
};

var xhrSuccessStatus = {

    // File protocol always yields status code 0, assume 200
    0: 200,

    // Support: IE <=9 only
    // #1450: sometimes IE returns 1223 when it should be 204
    1223: 204
},
xhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
var callback, errorCallback;

// Cross domain only allowed if supported through XMLHttpRequest
if ( support.cors || xhrSupported && !options.crossDomain ) {
    return {
        send: function( headers, complete ) {
            var i,
                xhr = options.xhr();

            xhr.open(
                options.type,
                options.url,
                options.async,
                options.username,
                options.password
            );

            // Apply custom fields if provided
            if ( options.xhrFields ) {
                for ( i in options.xhrFields ) {
                    xhr[ i ] = options.xhrFields[ i ];
                }
            }

            // Override mime type if needed
            if ( options.mimeType && xhr.overrideMimeType ) {
                xhr.overrideMimeType( options.mimeType );
            }

            // X-Requested-With header
            // For cross-domain requests, seeing as conditions for a preflight are
            // akin to a jigsaw puzzle, we simply never set it to be sure.
            // (it can always be set on a per-request basis or even using ajaxSetup)
            // For same-domain requests, won't change header if already provided.
            if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
                headers[ "X-Requested-With" ] = "XMLHttpRequest";
            }

            // Set headers
            for ( i in headers ) {
                xhr.setRequestHeader( i, headers[ i ] );
            }

            // Callback
            callback = function( type ) {
                return function() {
                    if ( callback ) {
                        callback = errorCallback = xhr.onload =
                            xhr.onerror = xhr.onabort = xhr.ontimeout =
                                xhr.onreadystatechange = null;

                        if ( type === "abort" ) {
                            xhr.abort();
                        } else if ( type === "error" ) {

                            // Support: IE <=9 only
                            // On a manual native abort, IE9 throws
                            // errors on any property access that is not readyState
                            if ( typeof xhr.status !== "number" ) {
                                complete( 0, "error" );
                            } else {
                                complete(

                                    // File: protocol always yields status 0; see #8605, #14207
                                    xhr.status,
                                    xhr.statusText
                                );
                            }
                        } else {
                            complete(
                                xhrSuccessStatus[ xhr.status ] || xhr.status,
                                xhr.statusText,

                                // Support: IE <=9 only
                                // IE9 has no XHR2 but throws on binary (trac-11426)
                                // For XHR2 non-text, let the caller handle it (gh-2498)
                                ( xhr.responseType || "text" ) !== "text"  ||
                                typeof xhr.responseText !== "string" ?
                                    { binary: xhr.response } :
                                    { text: xhr.responseText },
                                xhr.getAllResponseHeaders()
                            );
                        }
                    }
                };
            };

            // Listen to events
            xhr.onload = callback();
            errorCallback = xhr.onerror = xhr.ontimeout = callback( "error" );

            // Support: IE 9 only
            // Use onreadystatechange to replace onabort
            // to handle uncaught aborts
            if ( xhr.onabort !== undefined ) {
                xhr.onabort = errorCallback;
            } else {
                xhr.onreadystatechange = function() {

                    // Check readyState before timeout as it changes
                    if ( xhr.readyState === 4 ) {

                        // Allow onerror to be called first,
                        // but that will not handle a native abort
                        // Also, save errorCallback to a variable
                        // as xhr.onerror cannot be accessed
                        window.setTimeout( function() {
                            if ( callback ) {
                                errorCallback();
                            }
                        } );
                    }
                };
            }

            // Create the abort callback
            callback = callback( "abort" );

            try {

                // Do send the request (this may raise an exception)
                xhr.send( options.hasContent && options.data || null );
            } catch ( e ) {

                // #14683: Only rethrow if this hasn't been notified as an error yet
                if ( callback ) {
                    throw e;
                }
            }
        },

        abort: function() {
            if ( callback ) {
                callback();
            }
        }
    };
}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
if ( s.crossDomain ) {
    s.contents.script = false;
}
} );

// Install script dataType
jQuery.ajaxSetup( {
accepts: {
    script: "text/javascript, application/javascript, " +
        "application/ecmascript, application/x-ecmascript"
},
contents: {
    script: /\b(?:java|ecma)script\b/
},
converters: {
    "text script": function( text ) {
        jQuery.globalEval( text );
        return text;
    }
}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( "script", function( s ) {
if ( s.cache === undefined ) {
    s.cache = false;
}
if ( s.crossDomain ) {
    s.type = "GET";
}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

// This transport only deals with cross domain or forced-by-attrs requests
if ( s.crossDomain || s.scriptAttrs ) {
    var script, callback;
    return {
        send: function( _, complete ) {
            script = jQuery( "<script>" )
                .attr( s.scriptAttrs || {} )
                .prop( { charset: s.scriptCharset, src: s.url } )
                .on( "load error", callback = function( evt ) {
                    script.remove();
                    callback = null;
                    if ( evt ) {
                        complete( evt.type === "error" ? 404 : 200, evt.type );
                    }
                } );

            // Use native DOM manipulation to avoid our domManip AJAX trickery
            document.head.appendChild( script[ 0 ] );
        },
        abort: function() {
            if ( callback ) {
                callback();
            }
        }
    };
}
} );




var oldCallbacks = [],
rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
jsonp: "callback",
jsonpCallback: function() {
    var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce.guid++ ) );
    this[ callback ] = true;
    return callback;
}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

var callbackName, overwritten, responseContainer,
    jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
        "url" :
        typeof s.data === "string" &&
            ( s.contentType || "" )
                .indexOf( "application/x-www-form-urlencoded" ) === 0 &&
            rjsonp.test( s.data ) && "data"
    );

// Handle iff the expected data type is "jsonp" or we have a parameter to set
if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

    // Get callback name, remembering preexisting value associated with it
    callbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
        s.jsonpCallback() :
        s.jsonpCallback;

    // Insert callback into url or form data
    if ( jsonProp ) {
        s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
    } else if ( s.jsonp !== false ) {
        s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
    }

    // Use data converter to retrieve json after script execution
    s.converters[ "script json" ] = function() {
        if ( !responseContainer ) {
            jQuery.error( callbackName + " was not called" );
        }
        return responseContainer[ 0 ];
    };

    // Force json dataType
    s.dataTypes[ 0 ] = "json";

    // Install callback
    overwritten = window[ callbackName ];
    window[ callbackName ] = function() {
        responseContainer = arguments;
    };

    // Clean-up function (fires after converters)
    jqXHR.always( function() {

        // If previous value didn't exist - remove it
        if ( overwritten === undefined ) {
            jQuery( window ).removeProp( callbackName );

        // Otherwise restore preexisting value
        } else {
            window[ callbackName ] = overwritten;
        }

        // Save back as free
        if ( s[ callbackName ] ) {

            // Make sure that re-using the options doesn't screw things around
            s.jsonpCallback = originalSettings.jsonpCallback;

            // Save the callback name for future use
            oldCallbacks.push( callbackName );
        }

        // Call if it was a function and we have a response
        if ( responseContainer && isFunction( overwritten ) ) {
            overwritten( responseContainer[ 0 ] );
        }

        responseContainer = overwritten = undefined;
    } );

    // Delegate to script
    return "script";
}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
var body = document.implementation.createHTMLDocument( "" ).body;
body.innerHTML = "<form></form><form></form>";
return body.childNodes.length === 2;
} )();


// Argument "data" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
if ( typeof data !== "string" ) {
    return [];
}
if ( typeof context === "boolean" ) {
    keepScripts = context;
    context = false;
}

var base, parsed, scripts;

if ( !context ) {

    // Stop scripts or inline event handlers from being executed immediately
    // by using document.implementation
    if ( support.createHTMLDocument ) {
        context = document.implementation.createHTMLDocument( "" );

        // Set the base href for the created document
        // so any parsed elements with URLs
        // are based on the document's URL (gh-2965)
        base = context.createElement( "base" );
        base.href = document.location.href;
        context.head.appendChild( base );
    } else {
        context = document;
    }
}

parsed = rsingleTag.exec( data );
scripts = !keepScripts && [];

// Single tag
if ( parsed ) {
    return [ context.createElement( parsed[ 1 ] ) ];
}

parsed = buildFragment( [ data ], context, scripts );

if ( scripts && scripts.length ) {
    jQuery( scripts ).remove();
}

return jQuery.merge( [], parsed.childNodes );
};


/**
* Load a url into a page
*/
jQuery.fn.load = function( url, params, callback ) {
var selector, type, response,
    self = this,
    off = url.indexOf( " " );

if ( off > -1 ) {
    selector = stripAndCollapse( url.slice( off ) );
    url = url.slice( 0, off );
}

// If it's a function
if ( isFunction( params ) ) {

    // We assume that it's the callback
    callback = params;
    params = undefined;

// Otherwise, build a param string
} else if ( params && typeof params === "object" ) {
    type = "POST";
}

// If we have elements to modify, make the request
if ( self.length > 0 ) {
    jQuery.ajax( {
        url: url,

        // If "type" variable is undefined, then "GET" method will be used.
        // Make value of this field explicit since
        // user can override it through ajaxSetup method
        type: type || "GET",
        dataType: "html",
        data: params
    } ).done( function( responseText ) {

        // Save response for use in complete callback
        response = arguments;

        self.html( selector ?

            // If a selector was specified, locate the right elements in a dummy div
            // Exclude scripts to avoid IE 'Permission Denied' errors
            jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

            // Otherwise use the full result
            responseText );

    // If the request succeeds, this function gets "data", "status", "jqXHR"
    // but they are ignored because response was set above.
    // If it fails, this function gets "jqXHR", "status", "error"
    } ).always( callback && function( jqXHR, status ) {
        self.each( function() {
            callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
        } );
    } );
}

return this;
};




jQuery.expr.pseudos.animated = function( elem ) {
return jQuery.grep( jQuery.timers, function( fn ) {
    return elem === fn.elem;
} ).length;
};




jQuery.offset = {
setOffset: function( elem, options, i ) {
    var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
        position = jQuery.css( elem, "position" ),
        curElem = jQuery( elem ),
        props = {};

    // Set position first, in-case top/left are set even on static elem
    if ( position === "static" ) {
        elem.style.position = "relative";
    }

    curOffset = curElem.offset();
    curCSSTop = jQuery.css( elem, "top" );
    curCSSLeft = jQuery.css( elem, "left" );
    calculatePosition = ( position === "absolute" || position === "fixed" ) &&
        ( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

    // Need to be able to calculate position if either
    // top or left is auto and position is either absolute or fixed
    if ( calculatePosition ) {
        curPosition = curElem.position();
        curTop = curPosition.top;
        curLeft = curPosition.left;

    } else {
        curTop = parseFloat( curCSSTop ) || 0;
        curLeft = parseFloat( curCSSLeft ) || 0;
    }

    if ( isFunction( options ) ) {

        // Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
        options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
    }

    if ( options.top != null ) {
        props.top = ( options.top - curOffset.top ) + curTop;
    }
    if ( options.left != null ) {
        props.left = ( options.left - curOffset.left ) + curLeft;
    }

    if ( "using" in options ) {
        options.using.call( elem, props );

    } else {
        if ( typeof props.top === "number" ) {
            props.top += "px";
        }
        if ( typeof props.left === "number" ) {
            props.left += "px";
        }
        curElem.css( props );
    }
}
};

jQuery.fn.extend( {

// offset() relates an element's border box to the document origin
offset: function( options ) {

    // Preserve chaining for setter
    if ( arguments.length ) {
        return options === undefined ?
            this :
            this.each( function( i ) {
                jQuery.offset.setOffset( this, options, i );
            } );
    }

    var rect, win,
        elem = this[ 0 ];

    if ( !elem ) {
        return;
    }

    // Return zeros for disconnected and hidden (display: none) elements (gh-2310)
    // Support: IE <=11 only
    // Running getBoundingClientRect on a
    // disconnected node in IE throws an error
    if ( !elem.getClientRects().length ) {
        return { top: 0, left: 0 };
    }

    // Get document-relative position by adding viewport scroll to viewport-relative gBCR
    rect = elem.getBoundingClientRect();
    win = elem.ownerDocument.defaultView;
    return {
        top: rect.top + win.pageYOffset,
        left: rect.left + win.pageXOffset
    };
},

// position() relates an element's margin box to its offset parent's padding box
// This corresponds to the behavior of CSS absolute positioning
position: function() {
    if ( !this[ 0 ] ) {
        return;
    }

    var offsetParent, offset, doc,
        elem = this[ 0 ],
        parentOffset = { top: 0, left: 0 };

    // position:fixed elements are offset from the viewport, which itself always has zero offset
    if ( jQuery.css( elem, "position" ) === "fixed" ) {

        // Assume position:fixed implies availability of getBoundingClientRect
        offset = elem.getBoundingClientRect();

    } else {
        offset = this.offset();

        // Account for the *real* offset parent, which can be the document or its root element
        // when a statically positioned element is identified
        doc = elem.ownerDocument;
        offsetParent = elem.offsetParent || doc.documentElement;
        while ( offsetParent &&
            ( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
            jQuery.css( offsetParent, "position" ) === "static" ) {

            offsetParent = offsetParent.parentNode;
        }
        if ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

            // Incorporate borders into its offset, since they are outside its content origin
            parentOffset = jQuery( offsetParent ).offset();
            parentOffset.top += jQuery.css( offsetParent, "borderTopWidth", true );
            parentOffset.left += jQuery.css( offsetParent, "borderLeftWidth", true );
        }
    }

    // Subtract parent offsets and element margins
    return {
        top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
        left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
    };
},

// This method will return documentElement in the following cases:
// 1) For the element inside the iframe without offsetParent, this method will return
//    documentElement of the parent window
// 2) For the hidden or detached element
// 3) For body or html element, i.e. in case of the html node - it will return itself
//
// but those exceptions were never presented as a real life use-cases
// and might be considered as more preferable results.
//
// This logic, however, is not guaranteed and can change at any point in the future
offsetParent: function() {
    return this.map( function() {
        var offsetParent = this.offsetParent;

        while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
            offsetParent = offsetParent.offsetParent;
        }

        return offsetParent || documentElement;
    } );
}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
var top = "pageYOffset" === prop;

jQuery.fn[ method ] = function( val ) {
    return access( this, function( elem, method, val ) {

        // Coalesce documents and windows
        var win;
        if ( isWindow( elem ) ) {
            win = elem;
        } else if ( elem.nodeType === 9 ) {
            win = elem.defaultView;
        }

        if ( val === undefined ) {
            return win ? win[ prop ] : elem[ method ];
        }

        if ( win ) {
            win.scrollTo(
                !top ? val : win.pageXOffset,
                top ? val : win.pageYOffset
            );

        } else {
            elem[ method ] = val;
        }
    }, method, val, arguments.length );
};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ "top", "left" ], function( _i, prop ) {
jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
    function( elem, computed ) {
        if ( computed ) {
            computed = curCSS( elem, prop );

            // If curCSS returns percentage, fallback to offset
            return rnumnonpx.test( computed ) ?
                jQuery( elem ).position()[ prop ] + "px" :
                computed;
        }
    }
);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
    function( defaultExtra, funcName ) {

    // Margin is only for outerHeight, outerWidth
    jQuery.fn[ funcName ] = function( margin, value ) {
        var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
            extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

        return access( this, function( elem, type, value ) {
            var doc;

            if ( isWindow( elem ) ) {

                // $( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
                return funcName.indexOf( "outer" ) === 0 ?
                    elem[ "inner" + name ] :
                    elem.document.documentElement[ "client" + name ];
            }

            // Get document width or height
            if ( elem.nodeType === 9 ) {
                doc = elem.documentElement;

                // Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
                // whichever is greatest
                return Math.max(
                    elem.body[ "scroll" + name ], doc[ "scroll" + name ],
                    elem.body[ "offset" + name ], doc[ "offset" + name ],
                    doc[ "client" + name ]
                );
            }

            return value === undefined ?

                // Get width or height on the element, requesting but not forcing parseFloat
                jQuery.css( elem, type, extra ) :

                // Set width or height on the element
                jQuery.style( elem, type, value, extra );
        }, type, chainable ? margin : undefined, chainable );
    };
} );
} );


jQuery.each( [
"ajaxStart",
"ajaxStop",
"ajaxComplete",
"ajaxError",
"ajaxSuccess",
"ajaxSend"
], function( _i, type ) {
jQuery.fn[ type ] = function( fn ) {
    return this.on( type, fn );
};
} );




jQuery.fn.extend( {

bind: function( types, data, fn ) {
    return this.on( types, null, data, fn );
},
unbind: function( types, fn ) {
    return this.off( types, null, fn );
},

delegate: function( selector, types, data, fn ) {
    return this.on( types, selector, data, fn );
},
undelegate: function( selector, types, fn ) {

    // ( namespace ) or ( selector, types [, fn] )
    return arguments.length === 1 ?
        this.off( selector, "**" ) :
        this.off( types, selector || "**", fn );
},

hover: function( fnOver, fnOut ) {
    return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
}
} );

jQuery.each( ( "blur focus focusin focusout resize scroll click dblclick " +
"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
"change select submit keydown keypress keyup contextmenu" ).split( " " ),
function( _i, name ) {

    // Handle event binding
    jQuery.fn[ name ] = function( data, fn ) {
        return arguments.length > 0 ?
            this.on( name, null, data, fn ) :
            this.trigger( name );
    };
} );




// Support: Android <=4.0 only
// Make sure we trim BOM and NBSP
var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
var tmp, args, proxy;

if ( typeof context === "string" ) {
    tmp = fn[ context ];
    context = fn;
    fn = tmp;
}

// Quick check to determine if target is callable, in the spec
// this throws a TypeError, but we will just return undefined.
if ( !isFunction( fn ) ) {
    return undefined;
}

// Simulated bind
args = slice.call( arguments, 2 );
proxy = function() {
    return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
};

// Set the guid of unique handler to the same of original handler, so it can be removed
proxy.guid = fn.guid = fn.guid || jQuery.guid++;

return proxy;
};

jQuery.holdReady = function( hold ) {
if ( hold ) {
    jQuery.readyWait++;
} else {
    jQuery.ready( true );
}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

// As of jQuery 3.0, isNumeric is limited to
// strings and numbers (primitives or objects)
// that can be coerced to finite numbers (gh-2662)
var type = jQuery.type( obj );
return ( type === "number" || type === "string" ) &&

    // parseFloat NaNs numeric-cast false positives ("")
    // ...but misinterprets leading-number strings, particularly hex literals ("0x...")
    // subtraction forces infinities to NaN
    !isNaN( obj - parseFloat( obj ) );
};

jQuery.trim = function( text ) {
return text == null ?
    "" :
    ( text + "" ).replace( rtrim, "" );
};



// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === "function" && define.amd ) {
define( "jquery", [], function() {
    return jQuery;
} );
}




var

// Map over jQuery in case of overwrite
_jQuery = window.jQuery,

// Map over the $ in case of overwrite
_$ = window.$;

jQuery.noConflict = function( deep ) {
if ( window.$ === jQuery ) {
    window.$ = _$;
}

if ( deep && window.jQuery === jQuery ) {
    window.jQuery = _jQuery;
}

return jQuery;
};

// Expose jQuery and $ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === "undefined" ) {
window.jQuery = window.$ = jQuery;
}




return jQuery;
} );

</script>

<script>

    /*!
   Copyright 2008-2021 SpryMedia Ltd.

 This source file is free software, available under the following license:
   MIT license - http://datatables.net/license

 This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.

 For details please refer to: http://www.datatables.net
 DataTables 1.10.24
 ©2008-2021 SpryMedia Ltd - datatables.net/license
*/
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(k,y,z){k instanceof String&&(k=String(k));for(var q=k.length,G=0;G<q;G++){var O=k[G];if(y.call(z,O,G,k))return{i:G,v:O}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;$jscomp.ISOLATE_POLYFILLS=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(k,y,z){if(k==Array.prototype||k==Object.prototype)return k;k[y]=z.value;return k};$jscomp.getGlobal=function(k){k=["object"==typeof globalThis&&globalThis,k,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var y=0;y<k.length;++y){var z=k[y];if(z&&z.Math==Math)return z}throw Error("Cannot find global object");};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE="function"===typeof Symbol&&"symbol"===typeof Symbol("x");$jscomp.TRUST_ES6_POLYFILLS=!$jscomp.ISOLATE_POLYFILLS||$jscomp.IS_SYMBOL_NATIVE;$jscomp.polyfills={};$jscomp.propertyToPolyfillSymbol={};$jscomp.POLYFILL_PREFIX="$jscp$";var $jscomp$lookupPolyfilledValue=function(k,y){var z=$jscomp.propertyToPolyfillSymbol[y];if(null==z)return k[y];z=k[z];return void 0!==z?z:k[y]};
$jscomp.polyfill=function(k,y,z,q){y&&($jscomp.ISOLATE_POLYFILLS?$jscomp.polyfillIsolated(k,y,z,q):$jscomp.polyfillUnisolated(k,y,z,q))};$jscomp.polyfillUnisolated=function(k,y,z,q){z=$jscomp.global;k=k.split(".");for(q=0;q<k.length-1;q++){var G=k[q];if(!(G in z))return;z=z[G]}k=k[k.length-1];q=z[k];y=y(q);y!=q&&null!=y&&$jscomp.defineProperty(z,k,{configurable:!0,writable:!0,value:y})};
$jscomp.polyfillIsolated=function(k,y,z,q){var G=k.split(".");k=1===G.length;q=G[0];q=!k&&q in $jscomp.polyfills?$jscomp.polyfills:$jscomp.global;for(var O=0;O<G.length-1;O++){var ma=G[O];if(!(ma in q))return;q=q[ma]}G=G[G.length-1];z=$jscomp.IS_SYMBOL_NATIVE&&"es6"===z?q[G]:null;y=y(z);null!=y&&(k?$jscomp.defineProperty($jscomp.polyfills,G,{configurable:!0,writable:!0,value:y}):y!==z&&($jscomp.propertyToPolyfillSymbol[G]=$jscomp.IS_SYMBOL_NATIVE?$jscomp.global.Symbol(G):$jscomp.POLYFILL_PREFIX+G,
G=$jscomp.propertyToPolyfillSymbol[G],$jscomp.defineProperty(q,G,{configurable:!0,writable:!0,value:y})))};$jscomp.polyfill("Array.prototype.find",function(k){return k?k:function(y,z){return $jscomp.findInternal(this,y,z).v}},"es6","es3");
(function(k){"function"===typeof define&&define.amd?define(["jquery"],function(y){return k(y,window,document)}):"object"===typeof exports?module.exports=function(y,z){y||(y=window);z||(z="undefined"!==typeof window?require("jquery"):require("jquery")(y));return k(z,y,y.document)}:k(jQuery,window,document)})(function(k,y,z,q){function G(a){var b,c,d={};k.each(a,function(e,f){(b=e.match(/^([^A-Z]+?)([A-Z])/))&&-1!=="a aa ai ao as b fn i m o s ".indexOf(b[1]+" ")&&(c=e.replace(b[0],b[2].toLowerCase()),
d[c]=e,"o"===b[1]&&G(a[e]))});a._hungarianMap=d}function O(a,b,c){a._hungarianMap||G(a);var d;k.each(b,function(e,f){d=a._hungarianMap[e];d===q||!c&&b[d]!==q||("o"===d.charAt(0)?(b[d]||(b[d]={}),k.extend(!0,b[d],b[e]),O(a[d],b[d],c)):b[d]=b[e])})}function ma(a){var b=u.defaults.oLanguage,c=b.sDecimal;c&&Va(c);if(a){var d=a.sZeroRecords;!a.sEmptyTable&&d&&"No data available in table"===b.sEmptyTable&&V(a,a,"sZeroRecords","sEmptyTable");!a.sLoadingRecords&&d&&"Loading..."===b.sLoadingRecords&&V(a,a,
"sZeroRecords","sLoadingRecords");a.sInfoThousands&&(a.sThousands=a.sInfoThousands);(a=a.sDecimal)&&c!==a&&Va(a)}}function yb(a){R(a,"ordering","bSort");R(a,"orderMulti","bSortMulti");R(a,"orderClasses","bSortClasses");R(a,"orderCellsTop","bSortCellsTop");R(a,"order","aaSorting");R(a,"orderFixed","aaSortingFixed");R(a,"paging","bPaginate");R(a,"pagingType","sPaginationType");R(a,"pageLength","iDisplayLength");R(a,"searching","bFilter");"boolean"===typeof a.sScrollX&&(a.sScrollX=a.sScrollX?"100%":
"");"boolean"===typeof a.scrollX&&(a.scrollX=a.scrollX?"100%":"");if(a=a.aoSearchCols)for(var b=0,c=a.length;b<c;b++)a[b]&&O(u.models.oSearch,a[b])}function zb(a){R(a,"orderable","bSortable");R(a,"orderData","aDataSort");R(a,"orderSequence","asSorting");R(a,"orderDataType","sortDataType");var b=a.aDataSort;"number"!==typeof b||Array.isArray(b)||(a.aDataSort=[b])}function Ab(a){if(!u.__browser){var b={};u.__browser=b;var c=k("<div/>").css({position:"fixed",top:0,left:-1*k(y).scrollLeft(),height:1,
width:1,overflow:"hidden"}).append(k("<div/>").css({position:"absolute",top:1,left:1,width:100,overflow:"scroll"}).append(k("<div/>").css({width:"100%",height:10}))).appendTo("body"),d=c.children(),e=d.children();b.barWidth=d[0].offsetWidth-d[0].clientWidth;b.bScrollOversize=100===e[0].offsetWidth&&100!==d[0].clientWidth;b.bScrollbarLeft=1!==Math.round(e.offset().left);b.bBounding=c[0].getBoundingClientRect().width?!0:!1;c.remove()}k.extend(a.oBrowser,u.__browser);a.oScroll.iBarWidth=u.__browser.barWidth}
function Bb(a,b,c,d,e,f){var g=!1;if(c!==q){var h=c;g=!0}for(;d!==e;)a.hasOwnProperty(d)&&(h=g?b(h,a[d],d,a):a[d],g=!0,d+=f);return h}function Wa(a,b){var c=u.defaults.column,d=a.aoColumns.length;c=k.extend({},u.models.oColumn,c,{nTh:b?b:z.createElement("th"),sTitle:c.sTitle?c.sTitle:b?b.innerHTML:"",aDataSort:c.aDataSort?c.aDataSort:[d],mData:c.mData?c.mData:d,idx:d});a.aoColumns.push(c);c=a.aoPreSearchCols;c[d]=k.extend({},u.models.oSearch,c[d]);Da(a,d,k(b).data())}function Da(a,b,c){b=a.aoColumns[b];
var d=a.oClasses,e=k(b.nTh);if(!b.sWidthOrig){b.sWidthOrig=e.attr("width")||null;var f=(e.attr("style")||"").match(/width:\s*(\d+[pxem%]+)/);f&&(b.sWidthOrig=f[1])}c!==q&&null!==c&&(zb(c),O(u.defaults.column,c,!0),c.mDataProp===q||c.mData||(c.mData=c.mDataProp),c.sType&&(b._sManualType=c.sType),c.className&&!c.sClass&&(c.sClass=c.className),c.sClass&&e.addClass(c.sClass),k.extend(b,c),V(b,c,"sWidth","sWidthOrig"),c.iDataSort!==q&&(b.aDataSort=[c.iDataSort]),V(b,c,"aDataSort"));var g=b.mData,h=ia(g),
l=b.mRender?ia(b.mRender):null;c=function(n){return"string"===typeof n&&-1!==n.indexOf("@")};b._bAttrSrc=k.isPlainObject(g)&&(c(g.sort)||c(g.type)||c(g.filter));b._setter=null;b.fnGetData=function(n,m,p){var t=h(n,m,q,p);return l&&m?l(t,m,n,p):t};b.fnSetData=function(n,m,p){return da(g)(n,m,p)};"number"!==typeof g&&(a._rowReadObject=!0);a.oFeatures.bSort||(b.bSortable=!1,e.addClass(d.sSortableNone));a=-1!==k.inArray("asc",b.asSorting);c=-1!==k.inArray("desc",b.asSorting);b.bSortable&&(a||c)?a&&!c?
(b.sSortingClass=d.sSortableAsc,b.sSortingClassJUI=d.sSortJUIAscAllowed):!a&&c?(b.sSortingClass=d.sSortableDesc,b.sSortingClassJUI=d.sSortJUIDescAllowed):(b.sSortingClass=d.sSortable,b.sSortingClassJUI=d.sSortJUI):(b.sSortingClass=d.sSortableNone,b.sSortingClassJUI="")}function ra(a){if(!1!==a.oFeatures.bAutoWidth){var b=a.aoColumns;Xa(a);for(var c=0,d=b.length;c<d;c++)b[c].nTh.style.width=b[c].sWidth}b=a.oScroll;""===b.sY&&""===b.sX||Ea(a);H(a,null,"column-sizing",[a])}function sa(a,b){a=Fa(a,"bVisible");
return"number"===typeof a[b]?a[b]:null}function ta(a,b){a=Fa(a,"bVisible");b=k.inArray(b,a);return-1!==b?b:null}function na(a){var b=0;k.each(a.aoColumns,function(c,d){d.bVisible&&"none"!==k(d.nTh).css("display")&&b++});return b}function Fa(a,b){var c=[];k.map(a.aoColumns,function(d,e){d[b]&&c.push(e)});return c}function Ya(a){var b=a.aoColumns,c=a.aoData,d=u.ext.type.detect,e,f,g;var h=0;for(e=b.length;h<e;h++){var l=b[h];var n=[];if(!l.sType&&l._sManualType)l.sType=l._sManualType;else if(!l.sType){var m=
0;for(f=d.length;m<f;m++){var p=0;for(g=c.length;p<g;p++){n[p]===q&&(n[p]=S(a,p,h,"type"));var t=d[m](n[p],a);if(!t&&m!==d.length-1)break;if("html"===t)break}if(t){l.sType=t;break}}l.sType||(l.sType="string")}}}function Cb(a,b,c,d){var e,f,g,h=a.aoColumns;if(b)for(e=b.length-1;0<=e;e--){var l=b[e];var n=l.targets!==q?l.targets:l.aTargets;Array.isArray(n)||(n=[n]);var m=0;for(f=n.length;m<f;m++)if("number"===typeof n[m]&&0<=n[m]){for(;h.length<=n[m];)Wa(a);d(n[m],l)}else if("number"===typeof n[m]&&
0>n[m])d(h.length+n[m],l);else if("string"===typeof n[m]){var p=0;for(g=h.length;p<g;p++)("_all"==n[m]||k(h[p].nTh).hasClass(n[m]))&&d(p,l)}}if(c)for(e=0,a=c.length;e<a;e++)d(e,c[e])}function ea(a,b,c,d){var e=a.aoData.length,f=k.extend(!0,{},u.models.oRow,{src:c?"dom":"data",idx:e});f._aData=b;a.aoData.push(f);for(var g=a.aoColumns,h=0,l=g.length;h<l;h++)g[h].sType=null;a.aiDisplayMaster.push(e);b=a.rowIdFn(b);b!==q&&(a.aIds[b]=f);!c&&a.oFeatures.bDeferRender||Za(a,e,c,d);return e}function Ga(a,
b){var c;b instanceof k||(b=k(b));return b.map(function(d,e){c=$a(a,e);return ea(a,c.data,e,c.cells)})}function S(a,b,c,d){var e=a.iDraw,f=a.aoColumns[c],g=a.aoData[b]._aData,h=f.sDefaultContent,l=f.fnGetData(g,d,{settings:a,row:b,col:c});if(l===q)return a.iDrawError!=e&&null===h&&(aa(a,0,"Requested unknown parameter "+("function"==typeof f.mData?"{function}":"'"+f.mData+"'")+" for row "+b+", column "+c,4),a.iDrawError=e),h;if((l===g||null===l)&&null!==h&&d!==q)l=h;else if("function"===typeof l)return l.call(g);
return null===l&&"display"==d?"":l}function Db(a,b,c,d){a.aoColumns[c].fnSetData(a.aoData[b]._aData,d,{settings:a,row:b,col:c})}function ab(a){return k.map(a.match(/(\\.|[^\.])+/g)||[""],function(b){return b.replace(/\\\./g,".")})}function ia(a){if(k.isPlainObject(a)){var b={};k.each(a,function(d,e){e&&(b[d]=ia(e))});return function(d,e,f,g){var h=b[e]||b._;return h!==q?h(d,e,f,g):d}}if(null===a)return function(d){return d};if("function"===typeof a)return function(d,e,f,g){return a(d,e,f,g)};if("string"!==
typeof a||-1===a.indexOf(".")&&-1===a.indexOf("[")&&-1===a.indexOf("("))return function(d,e){return d[a]};var c=function(d,e,f){if(""!==f){var g=ab(f);for(var h=0,l=g.length;h<l;h++){f=g[h].match(ua);var n=g[h].match(oa);if(f){g[h]=g[h].replace(ua,"");""!==g[h]&&(d=d[g[h]]);n=[];g.splice(0,h+1);g=g.join(".");if(Array.isArray(d))for(h=0,l=d.length;h<l;h++)n.push(c(d[h],e,g));d=f[0].substring(1,f[0].length-1);d=""===d?n:n.join(d);break}else if(n){g[h]=g[h].replace(oa,"");d=d[g[h]]();continue}if(null===
d||d[g[h]]===q)return q;d=d[g[h]]}}return d};return function(d,e){return c(d,e,a)}}function da(a){if(k.isPlainObject(a))return da(a._);if(null===a)return function(){};if("function"===typeof a)return function(c,d,e){a(c,"set",d,e)};if("string"!==typeof a||-1===a.indexOf(".")&&-1===a.indexOf("[")&&-1===a.indexOf("("))return function(c,d){c[a]=d};var b=function(c,d,e){e=ab(e);var f=e[e.length-1];for(var g,h,l=0,n=e.length-1;l<n;l++){if("__proto__"===e[l]||"constructor"===e[l])throw Error("Cannot set prototype values");
g=e[l].match(ua);h=e[l].match(oa);if(g){e[l]=e[l].replace(ua,"");c[e[l]]=[];f=e.slice();f.splice(0,l+1);g=f.join(".");if(Array.isArray(d))for(h=0,n=d.length;h<n;h++)f={},b(f,d[h],g),c[e[l]].push(f);else c[e[l]]=d;return}h&&(e[l]=e[l].replace(oa,""),c=c[e[l]](d));if(null===c[e[l]]||c[e[l]]===q)c[e[l]]={};c=c[e[l]]}if(f.match(oa))c[f.replace(oa,"")](d);else c[f.replace(ua,"")]=d};return function(c,d){return b(c,d,a)}}function bb(a){return T(a.aoData,"_aData")}function Ha(a){a.aoData.length=0;a.aiDisplayMaster.length=
0;a.aiDisplay.length=0;a.aIds={}}function Ia(a,b,c){for(var d=-1,e=0,f=a.length;e<f;e++)a[e]==b?d=e:a[e]>b&&a[e]--; -1!=d&&c===q&&a.splice(d,1)}function va(a,b,c,d){var e=a.aoData[b],f,g=function(l,n){for(;l.childNodes.length;)l.removeChild(l.firstChild);l.innerHTML=S(a,b,n,"display")};if("dom"!==c&&(c&&"auto"!==c||"dom"!==e.src)){var h=e.anCells;if(h)if(d!==q)g(h[d],d);else for(c=0,f=h.length;c<f;c++)g(h[c],c)}else e._aData=$a(a,e,d,d===q?q:e._aData).data;e._aSortData=null;e._aFilterData=null;g=
a.aoColumns;if(d!==q)g[d].sType=null;else{c=0;for(f=g.length;c<f;c++)g[c].sType=null;cb(a,e)}}function $a(a,b,c,d){var e=[],f=b.firstChild,g,h=0,l,n=a.aoColumns,m=a._rowReadObject;d=d!==q?d:m?{}:[];var p=function(x,r){if("string"===typeof x){var A=x.indexOf("@");-1!==A&&(A=x.substring(A+1),da(x)(d,r.getAttribute(A)))}},t=function(x){if(c===q||c===h)g=n[h],l=x.innerHTML.trim(),g&&g._bAttrSrc?(da(g.mData._)(d,l),p(g.mData.sort,x),p(g.mData.type,x),p(g.mData.filter,x)):m?(g._setter||(g._setter=da(g.mData)),
g._setter(d,l)):d[h]=l;h++};if(f)for(;f;){var v=f.nodeName.toUpperCase();if("TD"==v||"TH"==v)t(f),e.push(f);f=f.nextSibling}else for(e=b.anCells,f=0,v=e.length;f<v;f++)t(e[f]);(b=b.firstChild?b:b.nTr)&&(b=b.getAttribute("id"))&&da(a.rowId)(d,b);return{data:d,cells:e}}function Za(a,b,c,d){var e=a.aoData[b],f=e._aData,g=[],h,l;if(null===e.nTr){var n=c||z.createElement("tr");e.nTr=n;e.anCells=g;n._DT_RowIndex=b;cb(a,e);var m=0;for(h=a.aoColumns.length;m<h;m++){var p=a.aoColumns[m];e=(l=c?!1:!0)?z.createElement(p.sCellType):
d[m];e._DT_CellIndex={row:b,column:m};g.push(e);if(l||!(!p.mRender&&p.mData===m||k.isPlainObject(p.mData)&&p.mData._===m+".display"))e.innerHTML=S(a,b,m,"display");p.sClass&&(e.className+=" "+p.sClass);p.bVisible&&!c?n.appendChild(e):!p.bVisible&&c&&e.parentNode.removeChild(e);p.fnCreatedCell&&p.fnCreatedCell.call(a.oInstance,e,S(a,b,m),f,b,m)}H(a,"aoRowCreatedCallback",null,[n,f,b,g])}}function cb(a,b){var c=b.nTr,d=b._aData;if(c){if(a=a.rowIdFn(d))c.id=a;d.DT_RowClass&&(a=d.DT_RowClass.split(" "),
b.__rowc=b.__rowc?Ja(b.__rowc.concat(a)):a,k(c).removeClass(b.__rowc.join(" ")).addClass(d.DT_RowClass));d.DT_RowAttr&&k(c).attr(d.DT_RowAttr);d.DT_RowData&&k(c).data(d.DT_RowData)}}function Eb(a){var b,c,d=a.nTHead,e=a.nTFoot,f=0===k("th, td",d).length,g=a.oClasses,h=a.aoColumns;f&&(c=k("<tr/>").appendTo(d));var l=0;for(b=h.length;l<b;l++){var n=h[l];var m=k(n.nTh).addClass(n.sClass);f&&m.appendTo(c);a.oFeatures.bSort&&(m.addClass(n.sSortingClass),!1!==n.bSortable&&(m.attr("tabindex",a.iTabIndex).attr("aria-controls",
a.sTableId),db(a,n.nTh,l)));n.sTitle!=m[0].innerHTML&&m.html(n.sTitle);eb(a,"header")(a,m,n,g)}f&&wa(a.aoHeader,d);k(d).children("tr").attr("role","row");k(d).children("tr").children("th, td").addClass(g.sHeaderTH);k(e).children("tr").children("th, td").addClass(g.sFooterTH);if(null!==e)for(a=a.aoFooter[0],l=0,b=a.length;l<b;l++)n=h[l],n.nTf=a[l].cell,n.sClass&&k(n.nTf).addClass(n.sClass)}function xa(a,b,c){var d,e,f=[],g=[],h=a.aoColumns.length;if(b){c===q&&(c=!1);var l=0;for(d=b.length;l<d;l++){f[l]=
b[l].slice();f[l].nTr=b[l].nTr;for(e=h-1;0<=e;e--)a.aoColumns[e].bVisible||c||f[l].splice(e,1);g.push([])}l=0;for(d=f.length;l<d;l++){if(a=f[l].nTr)for(;e=a.firstChild;)a.removeChild(e);e=0;for(b=f[l].length;e<b;e++){var n=h=1;if(g[l][e]===q){a.appendChild(f[l][e].cell);for(g[l][e]=1;f[l+h]!==q&&f[l][e].cell==f[l+h][e].cell;)g[l+h][e]=1,h++;for(;f[l][e+n]!==q&&f[l][e].cell==f[l][e+n].cell;){for(c=0;c<h;c++)g[l+c][e+n]=1;n++}k(f[l][e].cell).attr("rowspan",h).attr("colspan",n)}}}}}function fa(a){var b=
H(a,"aoPreDrawCallback","preDraw",[a]);if(-1!==k.inArray(!1,b))U(a,!1);else{b=[];var c=0,d=a.asStripeClasses,e=d.length,f=a.oLanguage,g=a.iInitDisplayStart,h="ssp"==P(a),l=a.aiDisplay;a.bDrawing=!0;g!==q&&-1!==g&&(a._iDisplayStart=h?g:g>=a.fnRecordsDisplay()?0:g,a.iInitDisplayStart=-1);g=a._iDisplayStart;var n=a.fnDisplayEnd();if(a.bDeferLoading)a.bDeferLoading=!1,a.iDraw++,U(a,!1);else if(!h)a.iDraw++;else if(!a.bDestroying&&!Fb(a))return;if(0!==l.length)for(f=h?a.aoData.length:n,h=h?0:g;h<f;h++){var m=
l[h],p=a.aoData[m];null===p.nTr&&Za(a,m);var t=p.nTr;if(0!==e){var v=d[c%e];p._sRowStripe!=v&&(k(t).removeClass(p._sRowStripe).addClass(v),p._sRowStripe=v)}H(a,"aoRowCallback",null,[t,p._aData,c,h,m]);b.push(t);c++}else c=f.sZeroRecords,1==a.iDraw&&"ajax"==P(a)?c=f.sLoadingRecords:f.sEmptyTable&&0===a.fnRecordsTotal()&&(c=f.sEmptyTable),b[0]=k("<tr/>",{"class":e?d[0]:""}).append(k("<td />",{valign:"top",colSpan:na(a),"class":a.oClasses.sRowEmpty}).html(c))[0];H(a,"aoHeaderCallback","header",[k(a.nTHead).children("tr")[0],
bb(a),g,n,l]);H(a,"aoFooterCallback","footer",[k(a.nTFoot).children("tr")[0],bb(a),g,n,l]);d=k(a.nTBody);d.children().detach();d.append(k(b));H(a,"aoDrawCallback","draw",[a]);a.bSorted=!1;a.bFiltered=!1;a.bDrawing=!1}}function ja(a,b){var c=a.oFeatures,d=c.bFilter;c.bSort&&Gb(a);d?ya(a,a.oPreviousSearch):a.aiDisplay=a.aiDisplayMaster.slice();!0!==b&&(a._iDisplayStart=0);a._drawHold=b;fa(a);a._drawHold=!1}function Hb(a){var b=a.oClasses,c=k(a.nTable);c=k("<div/>").insertBefore(c);var d=a.oFeatures,
e=k("<div/>",{id:a.sTableId+"_wrapper","class":b.sWrapper+(a.nTFoot?"":" "+b.sNoFooter)});a.nHolding=c[0];a.nTableWrapper=e[0];a.nTableReinsertBefore=a.nTable.nextSibling;for(var f=a.sDom.split(""),g,h,l,n,m,p,t=0;t<f.length;t++){g=null;h=f[t];if("<"==h){l=k("<div/>")[0];n=f[t+1];if("'"==n||'"'==n){m="";for(p=2;f[t+p]!=n;)m+=f[t+p],p++;"H"==m?m=b.sJUIHeader:"F"==m&&(m=b.sJUIFooter);-1!=m.indexOf(".")?(n=m.split("."),l.id=n[0].substr(1,n[0].length-1),l.className=n[1]):"#"==m.charAt(0)?l.id=m.substr(1,
m.length-1):l.className=m;t+=p}e.append(l);e=k(l)}else if(">"==h)e=e.parent();else if("l"==h&&d.bPaginate&&d.bLengthChange)g=Ib(a);else if("f"==h&&d.bFilter)g=Jb(a);else if("r"==h&&d.bProcessing)g=Kb(a);else if("t"==h)g=Lb(a);else if("i"==h&&d.bInfo)g=Mb(a);else if("p"==h&&d.bPaginate)g=Nb(a);else if(0!==u.ext.feature.length)for(l=u.ext.feature,p=0,n=l.length;p<n;p++)if(h==l[p].cFeature){g=l[p].fnInit(a);break}g&&(l=a.aanFeatures,l[h]||(l[h]=[]),l[h].push(g),e.append(g))}c.replaceWith(e);a.nHolding=
null}function wa(a,b){b=k(b).children("tr");var c,d,e;a.splice(0,a.length);var f=0;for(e=b.length;f<e;f++)a.push([]);f=0;for(e=b.length;f<e;f++){var g=b[f];for(c=g.firstChild;c;){if("TD"==c.nodeName.toUpperCase()||"TH"==c.nodeName.toUpperCase()){var h=1*c.getAttribute("colspan");var l=1*c.getAttribute("rowspan");h=h&&0!==h&&1!==h?h:1;l=l&&0!==l&&1!==l?l:1;var n=0;for(d=a[f];d[n];)n++;var m=n;var p=1===h?!0:!1;for(d=0;d<h;d++)for(n=0;n<l;n++)a[f+n][m+d]={cell:c,unique:p},a[f+n].nTr=g}c=c.nextSibling}}}
function Ka(a,b,c){var d=[];c||(c=a.aoHeader,b&&(c=[],wa(c,b)));b=0;for(var e=c.length;b<e;b++)for(var f=0,g=c[b].length;f<g;f++)!c[b][f].unique||d[f]&&a.bSortCellsTop||(d[f]=c[b][f].cell);return d}function La(a,b,c){H(a,"aoServerParams","serverParams",[b]);if(b&&Array.isArray(b)){var d={},e=/(.*?)\[\]$/;k.each(b,function(m,p){(m=p.name.match(e))?(m=m[0],d[m]||(d[m]=[]),d[m].push(p.value)):d[p.name]=p.value});b=d}var f=a.ajax,g=a.oInstance,h=function(m){H(a,null,"xhr",[a,m,a.jqXHR]);c(m)};if(k.isPlainObject(f)&&
f.data){var l=f.data;var n="function"===typeof l?l(b,a):l;b="function"===typeof l&&n?n:k.extend(!0,b,n);delete f.data}n={data:b,success:function(m){var p=m.error||m.sError;p&&aa(a,0,p);a.json=m;h(m)},dataType:"json",cache:!1,type:a.sServerMethod,error:function(m,p,t){t=H(a,null,"xhr",[a,null,a.jqXHR]);-1===k.inArray(!0,t)&&("parsererror"==p?aa(a,0,"Invalid JSON response",1):4===m.readyState&&aa(a,0,"Ajax error",7));U(a,!1)}};a.oAjaxData=b;H(a,null,"preXhr",[a,b]);a.fnServerData?a.fnServerData.call(g,
a.sAjaxSource,k.map(b,function(m,p){return{name:p,value:m}}),h,a):a.sAjaxSource||"string"===typeof f?a.jqXHR=k.ajax(k.extend(n,{url:f||a.sAjaxSource})):"function"===typeof f?a.jqXHR=f.call(g,b,h,a):(a.jqXHR=k.ajax(k.extend(n,f)),f.data=l)}function Fb(a){return a.bAjaxDataGet?(a.iDraw++,U(a,!0),La(a,Ob(a),function(b){Pb(a,b)}),!1):!0}function Ob(a){var b=a.aoColumns,c=b.length,d=a.oFeatures,e=a.oPreviousSearch,f=a.aoPreSearchCols,g=[],h=pa(a);var l=a._iDisplayStart;var n=!1!==d.bPaginate?a._iDisplayLength:
-1;var m=function(x,r){g.push({name:x,value:r})};m("sEcho",a.iDraw);m("iColumns",c);m("sColumns",T(b,"sName").join(","));m("iDisplayStart",l);m("iDisplayLength",n);var p={draw:a.iDraw,columns:[],order:[],start:l,length:n,search:{value:e.sSearch,regex:e.bRegex}};for(l=0;l<c;l++){var t=b[l];var v=f[l];n="function"==typeof t.mData?"function":t.mData;p.columns.push({data:n,name:t.sName,searchable:t.bSearchable,orderable:t.bSortable,search:{value:v.sSearch,regex:v.bRegex}});m("mDataProp_"+l,n);d.bFilter&&
(m("sSearch_"+l,v.sSearch),m("bRegex_"+l,v.bRegex),m("bSearchable_"+l,t.bSearchable));d.bSort&&m("bSortable_"+l,t.bSortable)}d.bFilter&&(m("sSearch",e.sSearch),m("bRegex",e.bRegex));d.bSort&&(k.each(h,function(x,r){p.order.push({column:r.col,dir:r.dir});m("iSortCol_"+x,r.col);m("sSortDir_"+x,r.dir)}),m("iSortingCols",h.length));b=u.ext.legacy.ajax;return null===b?a.sAjaxSource?g:p:b?g:p}function Pb(a,b){var c=function(g,h){return b[g]!==q?b[g]:b[h]},d=Ma(a,b),e=c("sEcho","draw"),f=c("iTotalRecords",
"recordsTotal");c=c("iTotalDisplayRecords","recordsFiltered");if(e!==q){if(1*e<a.iDraw)return;a.iDraw=1*e}Ha(a);a._iRecordsTotal=parseInt(f,10);a._iRecordsDisplay=parseInt(c,10);e=0;for(f=d.length;e<f;e++)ea(a,d[e]);a.aiDisplay=a.aiDisplayMaster.slice();a.bAjaxDataGet=!1;fa(a);a._bInitComplete||Na(a,b);a.bAjaxDataGet=!0;U(a,!1)}function Ma(a,b){a=k.isPlainObject(a.ajax)&&a.ajax.dataSrc!==q?a.ajax.dataSrc:a.sAjaxDataProp;return"data"===a?b.aaData||b[a]:""!==a?ia(a)(b):b}function Jb(a){var b=a.oClasses,
c=a.sTableId,d=a.oLanguage,e=a.oPreviousSearch,f=a.aanFeatures,g='<input type="search" class="'+b.sFilterInput+'"/>',h=d.sSearch;h=h.match(/_INPUT_/)?h.replace("_INPUT_",g):h+g;b=k("<div/>",{id:f.f?null:c+"_filter","class":b.sFilter}).append(k("<label/>").append(h));var l=function(){var m=this.value?this.value:"";m!=e.sSearch&&(ya(a,{sSearch:m,bRegex:e.bRegex,bSmart:e.bSmart,bCaseInsensitive:e.bCaseInsensitive}),a._iDisplayStart=0,fa(a))};f=null!==a.searchDelay?a.searchDelay:"ssp"===P(a)?400:0;var n=
k("input",b).val(e.sSearch).attr("placeholder",d.sSearchPlaceholder).on("keyup.DT search.DT input.DT paste.DT cut.DT",f?fb(l,f):l).on("mouseup",function(m){setTimeout(function(){l.call(n[0])},10)}).on("keypress.DT",function(m){if(13==m.keyCode)return!1}).attr("aria-controls",c);k(a.nTable).on("search.dt.DT",function(m,p){if(a===p)try{n[0]!==z.activeElement&&n.val(e.sSearch)}catch(t){}});return b[0]}function ya(a,b,c){var d=a.oPreviousSearch,e=a.aoPreSearchCols,f=function(h){d.sSearch=h.sSearch;d.bRegex=
h.bRegex;d.bSmart=h.bSmart;d.bCaseInsensitive=h.bCaseInsensitive},g=function(h){return h.bEscapeRegex!==q?!h.bEscapeRegex:h.bRegex};Ya(a);if("ssp"!=P(a)){Qb(a,b.sSearch,c,g(b),b.bSmart,b.bCaseInsensitive);f(b);for(b=0;b<e.length;b++)Rb(a,e[b].sSearch,b,g(e[b]),e[b].bSmart,e[b].bCaseInsensitive);Sb(a)}else f(b);a.bFiltered=!0;H(a,null,"search",[a])}function Sb(a){for(var b=u.ext.search,c=a.aiDisplay,d,e,f=0,g=b.length;f<g;f++){for(var h=[],l=0,n=c.length;l<n;l++)e=c[l],d=a.aoData[e],b[f](a,d._aFilterData,
e,d._aData,l)&&h.push(e);c.length=0;k.merge(c,h)}}function Rb(a,b,c,d,e,f){if(""!==b){var g=[],h=a.aiDisplay;d=gb(b,d,e,f);for(e=0;e<h.length;e++)b=a.aoData[h[e]]._aFilterData[c],d.test(b)&&g.push(h[e]);a.aiDisplay=g}}function Qb(a,b,c,d,e,f){e=gb(b,d,e,f);var g=a.oPreviousSearch.sSearch,h=a.aiDisplayMaster;f=[];0!==u.ext.search.length&&(c=!0);var l=Tb(a);if(0>=b.length)a.aiDisplay=h.slice();else{if(l||c||d||g.length>b.length||0!==b.indexOf(g)||a.bSorted)a.aiDisplay=h.slice();b=a.aiDisplay;for(c=
0;c<b.length;c++)e.test(a.aoData[b[c]]._sFilterRow)&&f.push(b[c]);a.aiDisplay=f}}function gb(a,b,c,d){a=b?a:hb(a);c&&(a="^(?=.*?"+k.map(a.match(/"[^"]+"|[^ ]+/g)||[""],function(e){if('"'===e.charAt(0)){var f=e.match(/^"(.*)"$/);e=f?f[1]:e}return e.replace('"',"")}).join(")(?=.*?")+").*$");return new RegExp(a,d?"i":"")}function Tb(a){var b=a.aoColumns,c,d,e=u.ext.type.search;var f=!1;var g=0;for(c=a.aoData.length;g<c;g++){var h=a.aoData[g];if(!h._aFilterData){var l=[];var n=0;for(d=b.length;n<d;n++){f=
b[n];if(f.bSearchable){var m=S(a,g,n,"filter");e[f.sType]&&(m=e[f.sType](m));null===m&&(m="");"string"!==typeof m&&m.toString&&(m=m.toString())}else m="";m.indexOf&&-1!==m.indexOf("&")&&(Oa.innerHTML=m,m=rc?Oa.textContent:Oa.innerText);m.replace&&(m=m.replace(/[\r\n\u2028]/g,""));l.push(m)}h._aFilterData=l;h._sFilterRow=l.join("  ");f=!0}}return f}function Ub(a){return{search:a.sSearch,smart:a.bSmart,regex:a.bRegex,caseInsensitive:a.bCaseInsensitive}}function Vb(a){return{sSearch:a.search,bSmart:a.smart,
bRegex:a.regex,bCaseInsensitive:a.caseInsensitive}}function Mb(a){var b=a.sTableId,c=a.aanFeatures.i,d=k("<div/>",{"class":a.oClasses.sInfo,id:c?null:b+"_info"});c||(a.aoDrawCallback.push({fn:Wb,sName:"information"}),d.attr("role","status").attr("aria-live","polite"),k(a.nTable).attr("aria-describedby",b+"_info"));return d[0]}function Wb(a){var b=a.aanFeatures.i;if(0!==b.length){var c=a.oLanguage,d=a._iDisplayStart+1,e=a.fnDisplayEnd(),f=a.fnRecordsTotal(),g=a.fnRecordsDisplay(),h=g?c.sInfo:c.sInfoEmpty;
g!==f&&(h+=" "+c.sInfoFiltered);h+=c.sInfoPostFix;h=Xb(a,h);c=c.fnInfoCallback;null!==c&&(h=c.call(a.oInstance,a,d,e,f,g,h));k(b).html(h)}}function Xb(a,b){var c=a.fnFormatNumber,d=a._iDisplayStart+1,e=a._iDisplayLength,f=a.fnRecordsDisplay(),g=-1===e;return b.replace(/_START_/g,c.call(a,d)).replace(/_END_/g,c.call(a,a.fnDisplayEnd())).replace(/_MAX_/g,c.call(a,a.fnRecordsTotal())).replace(/_TOTAL_/g,c.call(a,f)).replace(/_PAGE_/g,c.call(a,g?1:Math.ceil(d/e))).replace(/_PAGES_/g,c.call(a,g?1:Math.ceil(f/
e)))}function za(a){var b=a.iInitDisplayStart,c=a.aoColumns;var d=a.oFeatures;var e=a.bDeferLoading;if(a.bInitialised){Hb(a);Eb(a);xa(a,a.aoHeader);xa(a,a.aoFooter);U(a,!0);d.bAutoWidth&&Xa(a);var f=0;for(d=c.length;f<d;f++){var g=c[f];g.sWidth&&(g.nTh.style.width=K(g.sWidth))}H(a,null,"preInit",[a]);ja(a);c=P(a);if("ssp"!=c||e)"ajax"==c?La(a,[],function(h){var l=Ma(a,h);for(f=0;f<l.length;f++)ea(a,l[f]);a.iInitDisplayStart=b;ja(a);U(a,!1);Na(a,h)},a):(U(a,!1),Na(a))}else setTimeout(function(){za(a)},
200)}function Na(a,b){a._bInitComplete=!0;(b||a.oInit.aaData)&&ra(a);H(a,null,"plugin-init",[a,b]);H(a,"aoInitComplete","init",[a,b])}function ib(a,b){b=parseInt(b,10);a._iDisplayLength=b;jb(a);H(a,null,"length",[a,b])}function Ib(a){var b=a.oClasses,c=a.sTableId,d=a.aLengthMenu,e=Array.isArray(d[0]),f=e?d[0]:d;d=e?d[1]:d;e=k("<select/>",{name:c+"_length","aria-controls":c,"class":b.sLengthSelect});for(var g=0,h=f.length;g<h;g++)e[0][g]=new Option("number"===typeof d[g]?a.fnFormatNumber(d[g]):d[g],
f[g]);var l=k("<div><label/></div>").addClass(b.sLength);a.aanFeatures.l||(l[0].id=c+"_length");l.children().append(a.oLanguage.sLengthMenu.replace("_MENU_",e[0].outerHTML));k("select",l).val(a._iDisplayLength).on("change.DT",function(n){ib(a,k(this).val());fa(a)});k(a.nTable).on("length.dt.DT",function(n,m,p){a===m&&k("select",l).val(p)});return l[0]}function Nb(a){var b=a.sPaginationType,c=u.ext.pager[b],d="function"===typeof c,e=function(g){fa(g)};b=k("<div/>").addClass(a.oClasses.sPaging+b)[0];
var f=a.aanFeatures;d||c.fnInit(a,b,e);f.p||(b.id=a.sTableId+"_paginate",a.aoDrawCallback.push({fn:function(g){if(d){var h=g._iDisplayStart,l=g._iDisplayLength,n=g.fnRecordsDisplay(),m=-1===l;h=m?0:Math.ceil(h/l);l=m?1:Math.ceil(n/l);n=c(h,l);var p;m=0;for(p=f.p.length;m<p;m++)eb(g,"pageButton")(g,f.p[m],m,n,h,l)}else c.fnUpdate(g,e)},sName:"pagination"}));return b}function kb(a,b,c){var d=a._iDisplayStart,e=a._iDisplayLength,f=a.fnRecordsDisplay();0===f||-1===e?d=0:"number"===typeof b?(d=b*e,d>f&&
(d=0)):"first"==b?d=0:"previous"==b?(d=0<=e?d-e:0,0>d&&(d=0)):"next"==b?d+e<f&&(d+=e):"last"==b?d=Math.floor((f-1)/e)*e:aa(a,0,"Unknown paging action: "+b,5);b=a._iDisplayStart!==d;a._iDisplayStart=d;b&&(H(a,null,"page",[a]),c&&fa(a));return b}function Kb(a){return k("<div/>",{id:a.aanFeatures.r?null:a.sTableId+"_processing","class":a.oClasses.sProcessing}).html(a.oLanguage.sProcessing).insertBefore(a.nTable)[0]}function U(a,b){a.oFeatures.bProcessing&&k(a.aanFeatures.r).css("display",b?"block":"none");
H(a,null,"processing",[a,b])}function Lb(a){var b=k(a.nTable);b.attr("role","grid");var c=a.oScroll;if(""===c.sX&&""===c.sY)return a.nTable;var d=c.sX,e=c.sY,f=a.oClasses,g=b.children("caption"),h=g.length?g[0]._captionSide:null,l=k(b[0].cloneNode(!1)),n=k(b[0].cloneNode(!1)),m=b.children("tfoot");m.length||(m=null);l=k("<div/>",{"class":f.sScrollWrapper}).append(k("<div/>",{"class":f.sScrollHead}).css({overflow:"hidden",position:"relative",border:0,width:d?d?K(d):null:"100%"}).append(k("<div/>",
{"class":f.sScrollHeadInner}).css({"box-sizing":"content-box",width:c.sXInner||"100%"}).append(l.removeAttr("id").css("margin-left",0).append("top"===h?g:null).append(b.children("thead"))))).append(k("<div/>",{"class":f.sScrollBody}).css({position:"relative",overflow:"auto",width:d?K(d):null}).append(b));m&&l.append(k("<div/>",{"class":f.sScrollFoot}).css({overflow:"hidden",border:0,width:d?d?K(d):null:"100%"}).append(k("<div/>",{"class":f.sScrollFootInner}).append(n.removeAttr("id").css("margin-left",
0).append("bottom"===h?g:null).append(b.children("tfoot")))));b=l.children();var p=b[0];f=b[1];var t=m?b[2]:null;if(d)k(f).on("scroll.DT",function(v){v=this.scrollLeft;p.scrollLeft=v;m&&(t.scrollLeft=v)});k(f).css("max-height",e);c.bCollapse||k(f).css("height",e);a.nScrollHead=p;a.nScrollBody=f;a.nScrollFoot=t;a.aoDrawCallback.push({fn:Ea,sName:"scrolling"});return l[0]}function Ea(a){var b=a.oScroll,c=b.sX,d=b.sXInner,e=b.sY;b=b.iBarWidth;var f=k(a.nScrollHead),g=f[0].style,h=f.children("div"),l=
h[0].style,n=h.children("table");h=a.nScrollBody;var m=k(h),p=h.style,t=k(a.nScrollFoot).children("div"),v=t.children("table"),x=k(a.nTHead),r=k(a.nTable),A=r[0],E=A.style,I=a.nTFoot?k(a.nTFoot):null,W=a.oBrowser,M=W.bScrollOversize,C=T(a.aoColumns,"nTh"),B=[],ba=[],X=[],lb=[],Aa,Yb=function(F){F=F.style;F.paddingTop="0";F.paddingBottom="0";F.borderTopWidth="0";F.borderBottomWidth="0";F.height=0};var ha=h.scrollHeight>h.clientHeight;if(a.scrollBarVis!==ha&&a.scrollBarVis!==q)a.scrollBarVis=ha,ra(a);
else{a.scrollBarVis=ha;r.children("thead, tfoot").remove();if(I){var ka=I.clone().prependTo(r);var la=I.find("tr");ka=ka.find("tr")}var mb=x.clone().prependTo(r);x=x.find("tr");ha=mb.find("tr");mb.find("th, td").removeAttr("tabindex");c||(p.width="100%",f[0].style.width="100%");k.each(Ka(a,mb),function(F,Y){Aa=sa(a,F);Y.style.width=a.aoColumns[Aa].sWidth});I&&Z(function(F){F.style.width=""},ka);f=r.outerWidth();""===c?(E.width="100%",M&&(r.find("tbody").height()>h.offsetHeight||"scroll"==m.css("overflow-y"))&&
(E.width=K(r.outerWidth()-b)),f=r.outerWidth()):""!==d&&(E.width=K(d),f=r.outerWidth());Z(Yb,ha);Z(function(F){X.push(F.innerHTML);B.push(K(k(F).css("width")))},ha);Z(function(F,Y){-1!==k.inArray(F,C)&&(F.style.width=B[Y])},x);k(ha).height(0);I&&(Z(Yb,ka),Z(function(F){lb.push(F.innerHTML);ba.push(K(k(F).css("width")))},ka),Z(function(F,Y){F.style.width=ba[Y]},la),k(ka).height(0));Z(function(F,Y){F.innerHTML='<div class="dataTables_sizing">'+X[Y]+"</div>";F.childNodes[0].style.height="0";F.childNodes[0].style.overflow=
"hidden";F.style.width=B[Y]},ha);I&&Z(function(F,Y){F.innerHTML='<div class="dataTables_sizing">'+lb[Y]+"</div>";F.childNodes[0].style.height="0";F.childNodes[0].style.overflow="hidden";F.style.width=ba[Y]},ka);r.outerWidth()<f?(la=h.scrollHeight>h.offsetHeight||"scroll"==m.css("overflow-y")?f+b:f,M&&(h.scrollHeight>h.offsetHeight||"scroll"==m.css("overflow-y"))&&(E.width=K(la-b)),""!==c&&""===d||aa(a,1,"Possible column misalignment",6)):la="100%";p.width=K(la);g.width=K(la);I&&(a.nScrollFoot.style.width=
K(la));!e&&M&&(p.height=K(A.offsetHeight+b));c=r.outerWidth();n[0].style.width=K(c);l.width=K(c);d=r.height()>h.clientHeight||"scroll"==m.css("overflow-y");e="padding"+(W.bScrollbarLeft?"Left":"Right");l[e]=d?b+"px":"0px";I&&(v[0].style.width=K(c),t[0].style.width=K(c),t[0].style[e]=d?b+"px":"0px");r.children("colgroup").insertBefore(r.children("thead"));m.trigger("scroll");!a.bSorted&&!a.bFiltered||a._drawHold||(h.scrollTop=0)}}function Z(a,b,c){for(var d=0,e=0,f=b.length,g,h;e<f;){g=b[e].firstChild;
for(h=c?c[e].firstChild:null;g;)1===g.nodeType&&(c?a(g,h,d):a(g,d),d++),g=g.nextSibling,h=c?h.nextSibling:null;e++}}function Xa(a){var b=a.nTable,c=a.aoColumns,d=a.oScroll,e=d.sY,f=d.sX,g=d.sXInner,h=c.length,l=Fa(a,"bVisible"),n=k("th",a.nTHead),m=b.getAttribute("width"),p=b.parentNode,t=!1,v,x=a.oBrowser;d=x.bScrollOversize;(v=b.style.width)&&-1!==v.indexOf("%")&&(m=v);for(v=0;v<l.length;v++){var r=c[l[v]];null!==r.sWidth&&(r.sWidth=Zb(r.sWidthOrig,p),t=!0)}if(d||!t&&!f&&!e&&h==na(a)&&h==n.length)for(v=
0;v<h;v++)l=sa(a,v),null!==l&&(c[l].sWidth=K(n.eq(v).width()));else{h=k(b).clone().css("visibility","hidden").removeAttr("id");h.find("tbody tr").remove();var A=k("<tr/>").appendTo(h.find("tbody"));h.find("thead, tfoot").remove();h.append(k(a.nTHead).clone()).append(k(a.nTFoot).clone());h.find("tfoot th, tfoot td").css("width","");n=Ka(a,h.find("thead")[0]);for(v=0;v<l.length;v++)r=c[l[v]],n[v].style.width=null!==r.sWidthOrig&&""!==r.sWidthOrig?K(r.sWidthOrig):"",r.sWidthOrig&&f&&k(n[v]).append(k("<div/>").css({width:r.sWidthOrig,
margin:0,padding:0,border:0,height:1}));if(a.aoData.length)for(v=0;v<l.length;v++)t=l[v],r=c[t],k($b(a,t)).clone(!1).append(r.sContentPadding).appendTo(A);k("[name]",h).removeAttr("name");r=k("<div/>").css(f||e?{position:"absolute",top:0,left:0,height:1,right:0,overflow:"hidden"}:{}).append(h).appendTo(p);f&&g?h.width(g):f?(h.css("width","auto"),h.removeAttr("width"),h.width()<p.clientWidth&&m&&h.width(p.clientWidth)):e?h.width(p.clientWidth):m&&h.width(m);for(v=e=0;v<l.length;v++)p=k(n[v]),g=p.outerWidth()-
p.width(),p=x.bBounding?Math.ceil(n[v].getBoundingClientRect().width):p.outerWidth(),e+=p,c[l[v]].sWidth=K(p-g);b.style.width=K(e);r.remove()}m&&(b.style.width=K(m));!m&&!f||a._reszEvt||(b=function(){k(y).on("resize.DT-"+a.sInstance,fb(function(){ra(a)}))},d?setTimeout(b,1E3):b(),a._reszEvt=!0)}function Zb(a,b){if(!a)return 0;a=k("<div/>").css("width",K(a)).appendTo(b||z.body);b=a[0].offsetWidth;a.remove();return b}function $b(a,b){var c=ac(a,b);if(0>c)return null;var d=a.aoData[c];return d.nTr?d.anCells[b]:
k("<td/>").html(S(a,c,b,"display"))[0]}function ac(a,b){for(var c,d=-1,e=-1,f=0,g=a.aoData.length;f<g;f++)c=S(a,f,b,"display")+"",c=c.replace(sc,""),c=c.replace(/&nbsp;/g," "),c.length>d&&(d=c.length,e=f);return e}function K(a){return null===a?"0px":"number"==typeof a?0>a?"0px":a+"px":a.match(/\d$/)?a+"px":a}function pa(a){var b=[],c=a.aoColumns;var d=a.aaSortingFixed;var e=k.isPlainObject(d);var f=[];var g=function(m){m.length&&!Array.isArray(m[0])?f.push(m):k.merge(f,m)};Array.isArray(d)&&g(d);
e&&d.pre&&g(d.pre);g(a.aaSorting);e&&d.post&&g(d.post);for(a=0;a<f.length;a++){var h=f[a][0];g=c[h].aDataSort;d=0;for(e=g.length;d<e;d++){var l=g[d];var n=c[l].sType||"string";f[a]._idx===q&&(f[a]._idx=k.inArray(f[a][1],c[l].asSorting));b.push({src:h,col:l,dir:f[a][1],index:f[a]._idx,type:n,formatter:u.ext.type.order[n+"-pre"]})}}return b}function Gb(a){var b,c=[],d=u.ext.type.order,e=a.aoData,f=0,g=a.aiDisplayMaster;Ya(a);var h=pa(a);var l=0;for(b=h.length;l<b;l++){var n=h[l];n.formatter&&f++;bc(a,
n.col)}if("ssp"!=P(a)&&0!==h.length){l=0;for(b=g.length;l<b;l++)c[g[l]]=l;f===h.length?g.sort(function(m,p){var t,v=h.length,x=e[m]._aSortData,r=e[p]._aSortData;for(t=0;t<v;t++){var A=h[t];var E=x[A.col];var I=r[A.col];E=E<I?-1:E>I?1:0;if(0!==E)return"asc"===A.dir?E:-E}E=c[m];I=c[p];return E<I?-1:E>I?1:0}):g.sort(function(m,p){var t,v=h.length,x=e[m]._aSortData,r=e[p]._aSortData;for(t=0;t<v;t++){var A=h[t];var E=x[A.col];var I=r[A.col];A=d[A.type+"-"+A.dir]||d["string-"+A.dir];E=A(E,I);if(0!==E)return E}E=
c[m];I=c[p];return E<I?-1:E>I?1:0})}a.bSorted=!0}function cc(a){var b=a.aoColumns,c=pa(a);a=a.oLanguage.oAria;for(var d=0,e=b.length;d<e;d++){var f=b[d];var g=f.asSorting;var h=f.sTitle.replace(/<.*?>/g,"");var l=f.nTh;l.removeAttribute("aria-sort");f.bSortable&&(0<c.length&&c[0].col==d?(l.setAttribute("aria-sort","asc"==c[0].dir?"ascending":"descending"),f=g[c[0].index+1]||g[0]):f=g[0],h+="asc"===f?a.sSortAscending:a.sSortDescending);l.setAttribute("aria-label",h)}}function nb(a,b,c,d){var e=a.aaSorting,
f=a.aoColumns[b].asSorting,g=function(h,l){var n=h._idx;n===q&&(n=k.inArray(h[1],f));return n+1<f.length?n+1:l?null:0};"number"===typeof e[0]&&(e=a.aaSorting=[e]);c&&a.oFeatures.bSortMulti?(c=k.inArray(b,T(e,"0")),-1!==c?(b=g(e[c],!0),null===b&&1===e.length&&(b=0),null===b?e.splice(c,1):(e[c][1]=f[b],e[c]._idx=b)):(e.push([b,f[0],0]),e[e.length-1]._idx=0)):e.length&&e[0][0]==b?(b=g(e[0]),e.length=1,e[0][1]=f[b],e[0]._idx=b):(e.length=0,e.push([b,f[0]]),e[0]._idx=0);ja(a);"function"==typeof d&&d(a)}
function db(a,b,c,d){var e=a.aoColumns[c];ob(b,{},function(f){!1!==e.bSortable&&(a.oFeatures.bProcessing?(U(a,!0),setTimeout(function(){nb(a,c,f.shiftKey,d);"ssp"!==P(a)&&U(a,!1)},0)):nb(a,c,f.shiftKey,d))})}function Pa(a){var b=a.aLastSort,c=a.oClasses.sSortColumn,d=pa(a),e=a.oFeatures,f;if(e.bSort&&e.bSortClasses){e=0;for(f=b.length;e<f;e++){var g=b[e].src;k(T(a.aoData,"anCells",g)).removeClass(c+(2>e?e+1:3))}e=0;for(f=d.length;e<f;e++)g=d[e].src,k(T(a.aoData,"anCells",g)).addClass(c+(2>e?e+1:3))}a.aLastSort=
d}function bc(a,b){var c=a.aoColumns[b],d=u.ext.order[c.sSortDataType],e;d&&(e=d.call(a.oInstance,a,b,ta(a,b)));for(var f,g=u.ext.type.order[c.sType+"-pre"],h=0,l=a.aoData.length;h<l;h++)if(c=a.aoData[h],c._aSortData||(c._aSortData=[]),!c._aSortData[b]||d)f=d?e[h]:S(a,h,b,"sort"),c._aSortData[b]=g?g(f):f}function Qa(a){if(a.oFeatures.bStateSave&&!a.bDestroying){var b={time:+new Date,start:a._iDisplayStart,length:a._iDisplayLength,order:k.extend(!0,[],a.aaSorting),search:Ub(a.oPreviousSearch),columns:k.map(a.aoColumns,
function(c,d){return{visible:c.bVisible,search:Ub(a.aoPreSearchCols[d])}})};H(a,"aoStateSaveParams","stateSaveParams",[a,b]);a.oSavedState=b;a.fnStateSaveCallback.call(a.oInstance,a,b)}}function dc(a,b,c){var d,e,f=a.aoColumns;b=function(h){if(h&&h.time){var l=H(a,"aoStateLoadParams","stateLoadParams",[a,h]);if(-1===k.inArray(!1,l)&&(l=a.iStateDuration,!(0<l&&h.time<+new Date-1E3*l||h.columns&&f.length!==h.columns.length))){a.oLoadedState=k.extend(!0,{},h);h.start!==q&&(a._iDisplayStart=h.start,a.iInitDisplayStart=
h.start);h.length!==q&&(a._iDisplayLength=h.length);h.order!==q&&(a.aaSorting=[],k.each(h.order,function(n,m){a.aaSorting.push(m[0]>=f.length?[0,m[1]]:m)}));h.search!==q&&k.extend(a.oPreviousSearch,Vb(h.search));if(h.columns)for(d=0,e=h.columns.length;d<e;d++)l=h.columns[d],l.visible!==q&&(f[d].bVisible=l.visible),l.search!==q&&k.extend(a.aoPreSearchCols[d],Vb(l.search));H(a,"aoStateLoaded","stateLoaded",[a,h])}}c()};if(a.oFeatures.bStateSave){var g=a.fnStateLoadCallback.call(a.oInstance,a,b);g!==
q&&b(g)}else c()}function Ra(a){var b=u.settings;a=k.inArray(a,T(b,"nTable"));return-1!==a?b[a]:null}function aa(a,b,c,d){c="DataTables warning: "+(a?"table id="+a.sTableId+" - ":"")+c;d&&(c+=". For more information about this error, please see http://datatables.net/tn/"+d);if(b)y.console&&console.log&&console.log(c);else if(b=u.ext,b=b.sErrMode||b.errMode,a&&H(a,null,"error",[a,d,c]),"alert"==b)alert(c);else{if("throw"==b)throw Error(c);"function"==typeof b&&b(a,d,c)}}function V(a,b,c,d){Array.isArray(c)?
k.each(c,function(e,f){Array.isArray(f)?V(a,b,f[0],f[1]):V(a,b,f)}):(d===q&&(d=c),b[c]!==q&&(a[d]=b[c]))}function pb(a,b,c){var d;for(d in b)if(b.hasOwnProperty(d)){var e=b[d];k.isPlainObject(e)?(k.isPlainObject(a[d])||(a[d]={}),k.extend(!0,a[d],e)):c&&"data"!==d&&"aaData"!==d&&Array.isArray(e)?a[d]=e.slice():a[d]=e}return a}function ob(a,b,c){k(a).on("click.DT",b,function(d){k(a).trigger("blur");c(d)}).on("keypress.DT",b,function(d){13===d.which&&(d.preventDefault(),c(d))}).on("selectstart.DT",function(){return!1})}
function Q(a,b,c,d){c&&a[b].push({fn:c,sName:d})}function H(a,b,c,d){var e=[];b&&(e=k.map(a[b].slice().reverse(),function(f,g){return f.fn.apply(a.oInstance,d)}));null!==c&&(b=k.Event(c+".dt"),k(a.nTable).trigger(b,d),e.push(b.result));return e}function jb(a){var b=a._iDisplayStart,c=a.fnDisplayEnd(),d=a._iDisplayLength;b>=c&&(b=c-d);b-=b%d;if(-1===d||0>b)b=0;a._iDisplayStart=b}function eb(a,b){a=a.renderer;var c=u.ext.renderer[b];return k.isPlainObject(a)&&a[b]?c[a[b]]||c._:"string"===typeof a?c[a]||
c._:c._}function P(a){return a.oFeatures.bServerSide?"ssp":a.ajax||a.sAjaxSource?"ajax":"dom"}function Ba(a,b){var c=ec.numbers_length,d=Math.floor(c/2);b<=c?a=qa(0,b):a<=d?(a=qa(0,c-2),a.push("ellipsis"),a.push(b-1)):(a>=b-1-d?a=qa(b-(c-2),b):(a=qa(a-d+2,a+d-1),a.push("ellipsis"),a.push(b-1)),a.splice(0,0,"ellipsis"),a.splice(0,0,0));a.DT_el="span";return a}function Va(a){k.each({num:function(b){return Sa(b,a)},"num-fmt":function(b){return Sa(b,a,qb)},"html-num":function(b){return Sa(b,a,Ta)},"html-num-fmt":function(b){return Sa(b,
a,Ta,qb)}},function(b,c){L.type.order[b+a+"-pre"]=c;b.match(/^html\-/)&&(L.type.search[b+a]=L.type.search.html)})}function fc(a){return function(){var b=[Ra(this[u.ext.iApiIndex])].concat(Array.prototype.slice.call(arguments));return u.ext.internal[a].apply(this,b)}}var u=function(a){this.$=function(f,g){return this.api(!0).$(f,g)};this._=function(f,g){return this.api(!0).rows(f,g).data()};this.api=function(f){return f?new D(Ra(this[L.iApiIndex])):new D(this)};this.fnAddData=function(f,g){var h=this.api(!0);
f=Array.isArray(f)&&(Array.isArray(f[0])||k.isPlainObject(f[0]))?h.rows.add(f):h.row.add(f);(g===q||g)&&h.draw();return f.flatten().toArray()};this.fnAdjustColumnSizing=function(f){var g=this.api(!0).columns.adjust(),h=g.settings()[0],l=h.oScroll;f===q||f?g.draw(!1):(""!==l.sX||""!==l.sY)&&Ea(h)};this.fnClearTable=function(f){var g=this.api(!0).clear();(f===q||f)&&g.draw()};this.fnClose=function(f){this.api(!0).row(f).child.hide()};this.fnDeleteRow=function(f,g,h){var l=this.api(!0);f=l.rows(f);var n=
f.settings()[0],m=n.aoData[f[0][0]];f.remove();g&&g.call(this,n,m);(h===q||h)&&l.draw();return m};this.fnDestroy=function(f){this.api(!0).destroy(f)};this.fnDraw=function(f){this.api(!0).draw(f)};this.fnFilter=function(f,g,h,l,n,m){n=this.api(!0);null===g||g===q?n.search(f,h,l,m):n.column(g).search(f,h,l,m);n.draw()};this.fnGetData=function(f,g){var h=this.api(!0);if(f!==q){var l=f.nodeName?f.nodeName.toLowerCase():"";return g!==q||"td"==l||"th"==l?h.cell(f,g).data():h.row(f).data()||null}return h.data().toArray()};
this.fnGetNodes=function(f){var g=this.api(!0);return f!==q?g.row(f).node():g.rows().nodes().flatten().toArray()};this.fnGetPosition=function(f){var g=this.api(!0),h=f.nodeName.toUpperCase();return"TR"==h?g.row(f).index():"TD"==h||"TH"==h?(f=g.cell(f).index(),[f.row,f.columnVisible,f.column]):null};this.fnIsOpen=function(f){return this.api(!0).row(f).child.isShown()};this.fnOpen=function(f,g,h){return this.api(!0).row(f).child(g,h).show().child()[0]};this.fnPageChange=function(f,g){f=this.api(!0).page(f);
(g===q||g)&&f.draw(!1)};this.fnSetColumnVis=function(f,g,h){f=this.api(!0).column(f).visible(g);(h===q||h)&&f.columns.adjust().draw()};this.fnSettings=function(){return Ra(this[L.iApiIndex])};this.fnSort=function(f){this.api(!0).order(f).draw()};this.fnSortListener=function(f,g,h){this.api(!0).order.listener(f,g,h)};this.fnUpdate=function(f,g,h,l,n){var m=this.api(!0);h===q||null===h?m.row(g).data(f):m.cell(g,h).data(f);(n===q||n)&&m.columns.adjust();(l===q||l)&&m.draw();return 0};this.fnVersionCheck=
L.fnVersionCheck;var b=this,c=a===q,d=this.length;c&&(a={});this.oApi=this.internal=L.internal;for(var e in u.ext.internal)e&&(this[e]=fc(e));this.each(function(){var f={},g=1<d?pb(f,a,!0):a,h=0,l;f=this.getAttribute("id");var n=!1,m=u.defaults,p=k(this);if("table"!=this.nodeName.toLowerCase())aa(null,0,"Non-table node initialisation ("+this.nodeName+")",2);else{yb(m);zb(m.column);O(m,m,!0);O(m.column,m.column,!0);O(m,k.extend(g,p.data()),!0);var t=u.settings;h=0;for(l=t.length;h<l;h++){var v=t[h];
if(v.nTable==this||v.nTHead&&v.nTHead.parentNode==this||v.nTFoot&&v.nTFoot.parentNode==this){var x=g.bRetrieve!==q?g.bRetrieve:m.bRetrieve;if(c||x)return v.oInstance;if(g.bDestroy!==q?g.bDestroy:m.bDestroy){v.oInstance.fnDestroy();break}else{aa(v,0,"Cannot reinitialise DataTable",3);return}}if(v.sTableId==this.id){t.splice(h,1);break}}if(null===f||""===f)this.id=f="DataTables_Table_"+u.ext._unique++;var r=k.extend(!0,{},u.models.oSettings,{sDestroyWidth:p[0].style.width,sInstance:f,sTableId:f});r.nTable=
this;r.oApi=b.internal;r.oInit=g;t.push(r);r.oInstance=1===b.length?b:p.dataTable();yb(g);ma(g.oLanguage);g.aLengthMenu&&!g.iDisplayLength&&(g.iDisplayLength=Array.isArray(g.aLengthMenu[0])?g.aLengthMenu[0][0]:g.aLengthMenu[0]);g=pb(k.extend(!0,{},m),g);V(r.oFeatures,g,"bPaginate bLengthChange bFilter bSort bSortMulti bInfo bProcessing bAutoWidth bSortClasses bServerSide bDeferRender".split(" "));V(r,g,["asStripeClasses","ajax","fnServerData","fnFormatNumber","sServerMethod","aaSorting","aaSortingFixed",
"aLengthMenu","sPaginationType","sAjaxSource","sAjaxDataProp","iStateDuration","sDom","bSortCellsTop","iTabIndex","fnStateLoadCallback","fnStateSaveCallback","renderer","searchDelay","rowId",["iCookieDuration","iStateDuration"],["oSearch","oPreviousSearch"],["aoSearchCols","aoPreSearchCols"],["iDisplayLength","_iDisplayLength"]]);V(r.oScroll,g,[["sScrollX","sX"],["sScrollXInner","sXInner"],["sScrollY","sY"],["bScrollCollapse","bCollapse"]]);V(r.oLanguage,g,"fnInfoCallback");Q(r,"aoDrawCallback",g.fnDrawCallback,
"user");Q(r,"aoServerParams",g.fnServerParams,"user");Q(r,"aoStateSaveParams",g.fnStateSaveParams,"user");Q(r,"aoStateLoadParams",g.fnStateLoadParams,"user");Q(r,"aoStateLoaded",g.fnStateLoaded,"user");Q(r,"aoRowCallback",g.fnRowCallback,"user");Q(r,"aoRowCreatedCallback",g.fnCreatedRow,"user");Q(r,"aoHeaderCallback",g.fnHeaderCallback,"user");Q(r,"aoFooterCallback",g.fnFooterCallback,"user");Q(r,"aoInitComplete",g.fnInitComplete,"user");Q(r,"aoPreDrawCallback",g.fnPreDrawCallback,"user");r.rowIdFn=
ia(g.rowId);Ab(r);var A=r.oClasses;k.extend(A,u.ext.classes,g.oClasses);p.addClass(A.sTable);r.iInitDisplayStart===q&&(r.iInitDisplayStart=g.iDisplayStart,r._iDisplayStart=g.iDisplayStart);null!==g.iDeferLoading&&(r.bDeferLoading=!0,f=Array.isArray(g.iDeferLoading),r._iRecordsDisplay=f?g.iDeferLoading[0]:g.iDeferLoading,r._iRecordsTotal=f?g.iDeferLoading[1]:g.iDeferLoading);var E=r.oLanguage;k.extend(!0,E,g.oLanguage);E.sUrl?(k.ajax({dataType:"json",url:E.sUrl,success:function(C){ma(C);O(m.oLanguage,
C);k.extend(!0,E,C);H(r,null,"i18n",[r]);za(r)},error:function(){za(r)}}),n=!0):H(r,null,"i18n",[r]);null===g.asStripeClasses&&(r.asStripeClasses=[A.sStripeOdd,A.sStripeEven]);f=r.asStripeClasses;var I=p.children("tbody").find("tr").eq(0);-1!==k.inArray(!0,k.map(f,function(C,B){return I.hasClass(C)}))&&(k("tbody tr",this).removeClass(f.join(" ")),r.asDestroyStripes=f.slice());f=[];t=this.getElementsByTagName("thead");0!==t.length&&(wa(r.aoHeader,t[0]),f=Ka(r));if(null===g.aoColumns)for(t=[],h=0,l=
f.length;h<l;h++)t.push(null);else t=g.aoColumns;h=0;for(l=t.length;h<l;h++)Wa(r,f?f[h]:null);Cb(r,g.aoColumnDefs,t,function(C,B){Da(r,C,B)});if(I.length){var W=function(C,B){return null!==C.getAttribute("data-"+B)?B:null};k(I[0]).children("th, td").each(function(C,B){var ba=r.aoColumns[C];if(ba.mData===C){var X=W(B,"sort")||W(B,"order");B=W(B,"filter")||W(B,"search");if(null!==X||null!==B)ba.mData={_:C+".display",sort:null!==X?C+".@data-"+X:q,type:null!==X?C+".@data-"+X:q,filter:null!==B?C+".@data-"+
B:q},Da(r,C)}})}var M=r.oFeatures;f=function(){if(g.aaSorting===q){var C=r.aaSorting;h=0;for(l=C.length;h<l;h++)C[h][1]=r.aoColumns[h].asSorting[0]}Pa(r);M.bSort&&Q(r,"aoDrawCallback",function(){if(r.bSorted){var ba=pa(r),X={};k.each(ba,function(lb,Aa){X[Aa.src]=Aa.dir});H(r,null,"order",[r,ba,X]);cc(r)}});Q(r,"aoDrawCallback",function(){(r.bSorted||"ssp"===P(r)||M.bDeferRender)&&Pa(r)},"sc");C=p.children("caption").each(function(){this._captionSide=k(this).css("caption-side")});var B=p.children("thead");
0===B.length&&(B=k("<thead/>").appendTo(p));r.nTHead=B[0];B=p.children("tbody");0===B.length&&(B=k("<tbody/>").appendTo(p));r.nTBody=B[0];B=p.children("tfoot");0===B.length&&0<C.length&&(""!==r.oScroll.sX||""!==r.oScroll.sY)&&(B=k("<tfoot/>").appendTo(p));0===B.length||0===B.children().length?p.addClass(A.sNoFooter):0<B.length&&(r.nTFoot=B[0],wa(r.aoFooter,r.nTFoot));if(g.aaData)for(h=0;h<g.aaData.length;h++)ea(r,g.aaData[h]);else(r.bDeferLoading||"dom"==P(r))&&Ga(r,k(r.nTBody).children("tr"));r.aiDisplay=
r.aiDisplayMaster.slice();r.bInitialised=!0;!1===n&&za(r)};g.bStateSave?(M.bStateSave=!0,Q(r,"aoDrawCallback",Qa,"state_save"),dc(r,g,f)):f()}});b=null;return this},L,w,J,rb={},gc=/[\r\n\u2028]/g,Ta=/<.*?>/g,tc=/^\d{2,4}[\.\/\-]\d{1,2}[\.\/\-]\d{1,2}([T ]{1}\d{1,2}[:\.]\d{2}([\.:]\d{2})?)?$/,uc=/(\/|\.|\*|\+|\?|\||\(|\)|\[|\]|\{|\}|\\|\$|\^|\-)/g,qb=/['\u00A0,$£€¥%\u2009\u202F\u20BD\u20a9\u20BArfkɃΞ]/gi,ca=function(a){return a&&!0!==a&&"-"!==a?!1:!0},hc=function(a){var b=parseInt(a,10);return!isNaN(b)&&
isFinite(a)?b:null},ic=function(a,b){rb[b]||(rb[b]=new RegExp(hb(b),"g"));return"string"===typeof a&&"."!==b?a.replace(/\./g,"").replace(rb[b],"."):a},sb=function(a,b,c){var d="string"===typeof a;if(ca(a))return!0;b&&d&&(a=ic(a,b));c&&d&&(a=a.replace(qb,""));return!isNaN(parseFloat(a))&&isFinite(a)},jc=function(a,b,c){return ca(a)?!0:ca(a)||"string"===typeof a?sb(a.replace(Ta,""),b,c)?!0:null:null},T=function(a,b,c){var d=[],e=0,f=a.length;if(c!==q)for(;e<f;e++)a[e]&&a[e][b]&&d.push(a[e][b][c]);else for(;e<
f;e++)a[e]&&d.push(a[e][b]);return d},Ca=function(a,b,c,d){var e=[],f=0,g=b.length;if(d!==q)for(;f<g;f++)a[b[f]][c]&&e.push(a[b[f]][c][d]);else for(;f<g;f++)e.push(a[b[f]][c]);return e},qa=function(a,b){var c=[];if(b===q){b=0;var d=a}else d=b,b=a;for(a=b;a<d;a++)c.push(a);return c},kc=function(a){for(var b=[],c=0,d=a.length;c<d;c++)a[c]&&b.push(a[c]);return b},Ja=function(a){a:{if(!(2>a.length)){var b=a.slice().sort();for(var c=b[0],d=1,e=b.length;d<e;d++){if(b[d]===c){b=!1;break a}c=b[d]}}b=!0}if(b)return a.slice();
b=[];e=a.length;var f,g=0;d=0;a:for(;d<e;d++){c=a[d];for(f=0;f<g;f++)if(b[f]===c)continue a;b.push(c);g++}return b},lc=function(a,b){if(Array.isArray(b))for(var c=0;c<b.length;c++)lc(a,b[c]);else a.push(b);return a};Array.isArray||(Array.isArray=function(a){return"[object Array]"===Object.prototype.toString.call(a)});String.prototype.trim||(String.prototype.trim=function(){return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")});u.util={throttle:function(a,b){var c=b!==q?b:200,d,e;return function(){var f=
this,g=+new Date,h=arguments;d&&g<d+c?(clearTimeout(e),e=setTimeout(function(){d=q;a.apply(f,h)},c)):(d=g,a.apply(f,h))}},escapeRegex:function(a){return a.replace(uc,"\\$1")}};var R=function(a,b,c){a[b]!==q&&(a[c]=a[b])},ua=/\[.*?\]$/,oa=/\(\)$/,hb=u.util.escapeRegex,Oa=k("<div>")[0],rc=Oa.textContent!==q,sc=/<.*?>/g,fb=u.util.throttle,mc=[],N=Array.prototype,vc=function(a){var b,c=u.settings,d=k.map(c,function(f,g){return f.nTable});if(a){if(a.nTable&&a.oApi)return[a];if(a.nodeName&&"table"===a.nodeName.toLowerCase()){var e=
k.inArray(a,d);return-1!==e?[c[e]]:null}if(a&&"function"===typeof a.settings)return a.settings().toArray();"string"===typeof a?b=k(a):a instanceof k&&(b=a)}else return[];if(b)return b.map(function(f){e=k.inArray(this,d);return-1!==e?c[e]:null}).toArray()};var D=function(a,b){if(!(this instanceof D))return new D(a,b);var c=[],d=function(g){(g=vc(g))&&c.push.apply(c,g)};if(Array.isArray(a))for(var e=0,f=a.length;e<f;e++)d(a[e]);else d(a);this.context=Ja(c);b&&k.merge(this,b);this.selector={rows:null,
cols:null,opts:null};D.extend(this,this,mc)};u.Api=D;k.extend(D.prototype,{any:function(){return 0!==this.count()},concat:N.concat,context:[],count:function(){return this.flatten().length},each:function(a){for(var b=0,c=this.length;b<c;b++)a.call(this,this[b],b,this);return this},eq:function(a){var b=this.context;return b.length>a?new D(b[a],this[a]):null},filter:function(a){var b=[];if(N.filter)b=N.filter.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)a.call(this,this[c],c,this)&&b.push(this[c]);
return new D(this.context,b)},flatten:function(){var a=[];return new D(this.context,a.concat.apply(a,this.toArray()))},join:N.join,indexOf:N.indexOf||function(a,b){b=b||0;for(var c=this.length;b<c;b++)if(this[b]===a)return b;return-1},iterator:function(a,b,c,d){var e=[],f,g,h=this.context,l,n=this.selector;"string"===typeof a&&(d=c,c=b,b=a,a=!1);var m=0;for(f=h.length;m<f;m++){var p=new D(h[m]);if("table"===b){var t=c.call(p,h[m],m);t!==q&&e.push(t)}else if("columns"===b||"rows"===b)t=c.call(p,h[m],
this[m],m),t!==q&&e.push(t);else if("column"===b||"column-rows"===b||"row"===b||"cell"===b){var v=this[m];"column-rows"===b&&(l=Ua(h[m],n.opts));var x=0;for(g=v.length;x<g;x++)t=v[x],t="cell"===b?c.call(p,h[m],t.row,t.column,m,x):c.call(p,h[m],t,m,x,l),t!==q&&e.push(t)}}return e.length||d?(a=new D(h,a?e.concat.apply([],e):e),b=a.selector,b.rows=n.rows,b.cols=n.cols,b.opts=n.opts,a):this},lastIndexOf:N.lastIndexOf||function(a,b){return this.indexOf.apply(this.toArray.reverse(),arguments)},length:0,
map:function(a){var b=[];if(N.map)b=N.map.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)b.push(a.call(this,this[c],c));return new D(this.context,b)},pluck:function(a){return this.map(function(b){return b[a]})},pop:N.pop,push:N.push,reduce:N.reduce||function(a,b){return Bb(this,a,b,0,this.length,1)},reduceRight:N.reduceRight||function(a,b){return Bb(this,a,b,this.length-1,-1,-1)},reverse:N.reverse,selector:null,shift:N.shift,slice:function(){return new D(this.context,this)},sort:N.sort,
splice:N.splice,toArray:function(){return N.slice.call(this)},to$:function(){return k(this)},toJQuery:function(){return k(this)},unique:function(){return new D(this.context,Ja(this))},unshift:N.unshift});D.extend=function(a,b,c){if(c.length&&b&&(b instanceof D||b.__dt_wrapper)){var d,e=function(h,l,n){return function(){var m=l.apply(h,arguments);D.extend(m,m,n.methodExt);return m}};var f=0;for(d=c.length;f<d;f++){var g=c[f];b[g.name]="function"===g.type?e(a,g.val,g):"object"===g.type?{}:g.val;b[g.name].__dt_wrapper=
!0;D.extend(a,b[g.name],g.propExt)}}};D.register=w=function(a,b){if(Array.isArray(a))for(var c=0,d=a.length;c<d;c++)D.register(a[c],b);else{d=a.split(".");var e=mc,f;a=0;for(c=d.length;a<c;a++){var g=(f=-1!==d[a].indexOf("()"))?d[a].replace("()",""):d[a];a:{var h=0;for(var l=e.length;h<l;h++)if(e[h].name===g){h=e[h];break a}h=null}h||(h={name:g,val:{},methodExt:[],propExt:[],type:"object"},e.push(h));a===c-1?(h.val=b,h.type="function"===typeof b?"function":k.isPlainObject(b)?"object":"other"):e=f?
h.methodExt:h.propExt}}};D.registerPlural=J=function(a,b,c){D.register(a,c);D.register(b,function(){var d=c.apply(this,arguments);return d===this?this:d instanceof D?d.length?Array.isArray(d[0])?new D(d.context,d[0]):d[0]:q:d})};var nc=function(a,b){if(Array.isArray(a))return k.map(a,function(d){return nc(d,b)});if("number"===typeof a)return[b[a]];var c=k.map(b,function(d,e){return d.nTable});return k(c).filter(a).map(function(d){d=k.inArray(this,c);return b[d]}).toArray()};w("tables()",function(a){return a!==
q&&null!==a?new D(nc(a,this.context)):this});w("table()",function(a){a=this.tables(a);var b=a.context;return b.length?new D(b[0]):a});J("tables().nodes()","table().node()",function(){return this.iterator("table",function(a){return a.nTable},1)});J("tables().body()","table().body()",function(){return this.iterator("table",function(a){return a.nTBody},1)});J("tables().header()","table().header()",function(){return this.iterator("table",function(a){return a.nTHead},1)});J("tables().footer()","table().footer()",
function(){return this.iterator("table",function(a){return a.nTFoot},1)});J("tables().containers()","table().container()",function(){return this.iterator("table",function(a){return a.nTableWrapper},1)});w("draw()",function(a){return this.iterator("table",function(b){"page"===a?fa(b):("string"===typeof a&&(a="full-hold"===a?!1:!0),ja(b,!1===a))})});w("page()",function(a){return a===q?this.page.info().page:this.iterator("table",function(b){kb(b,a)})});w("page.info()",function(a){if(0===this.context.length)return q;
a=this.context[0];var b=a._iDisplayStart,c=a.oFeatures.bPaginate?a._iDisplayLength:-1,d=a.fnRecordsDisplay(),e=-1===c;return{page:e?0:Math.floor(b/c),pages:e?1:Math.ceil(d/c),start:b,end:a.fnDisplayEnd(),length:c,recordsTotal:a.fnRecordsTotal(),recordsDisplay:d,serverSide:"ssp"===P(a)}});w("page.len()",function(a){return a===q?0!==this.context.length?this.context[0]._iDisplayLength:q:this.iterator("table",function(b){ib(b,a)})});var oc=function(a,b,c){if(c){var d=new D(a);d.one("draw",function(){c(d.ajax.json())})}if("ssp"==
P(a))ja(a,b);else{U(a,!0);var e=a.jqXHR;e&&4!==e.readyState&&e.abort();La(a,[],function(f){Ha(a);f=Ma(a,f);for(var g=0,h=f.length;g<h;g++)ea(a,f[g]);ja(a,b);U(a,!1)})}};w("ajax.json()",function(){var a=this.context;if(0<a.length)return a[0].json});w("ajax.params()",function(){var a=this.context;if(0<a.length)return a[0].oAjaxData});w("ajax.reload()",function(a,b){return this.iterator("table",function(c){oc(c,!1===b,a)})});w("ajax.url()",function(a){var b=this.context;if(a===q){if(0===b.length)return q;
b=b[0];return b.ajax?k.isPlainObject(b.ajax)?b.ajax.url:b.ajax:b.sAjaxSource}return this.iterator("table",function(c){k.isPlainObject(c.ajax)?c.ajax.url=a:c.ajax=a})});w("ajax.url().load()",function(a,b){return this.iterator("table",function(c){oc(c,!1===b,a)})});var tb=function(a,b,c,d,e){var f=[],g,h,l;var n=typeof b;b&&"string"!==n&&"function"!==n&&b.length!==q||(b=[b]);n=0;for(h=b.length;n<h;n++){var m=b[n]&&b[n].split&&!b[n].match(/[\[\(:]/)?b[n].split(","):[b[n]];var p=0;for(l=m.length;p<l;p++)(g=
c("string"===typeof m[p]?m[p].trim():m[p]))&&g.length&&(f=f.concat(g))}a=L.selector[a];if(a.length)for(n=0,h=a.length;n<h;n++)f=a[n](d,e,f);return Ja(f)},ub=function(a){a||(a={});a.filter&&a.search===q&&(a.search=a.filter);return k.extend({search:"none",order:"current",page:"all"},a)},vb=function(a){for(var b=0,c=a.length;b<c;b++)if(0<a[b].length)return a[0]=a[b],a[0].length=1,a.length=1,a.context=[a.context[b]],a;a.length=0;return a},Ua=function(a,b){var c=[],d=a.aiDisplay;var e=a.aiDisplayMaster;
var f=b.search;var g=b.order;b=b.page;if("ssp"==P(a))return"removed"===f?[]:qa(0,e.length);if("current"==b)for(g=a._iDisplayStart,a=a.fnDisplayEnd();g<a;g++)c.push(d[g]);else if("current"==g||"applied"==g)if("none"==f)c=e.slice();else if("applied"==f)c=d.slice();else{if("removed"==f){var h={};g=0;for(a=d.length;g<a;g++)h[d[g]]=null;c=k.map(e,function(l){return h.hasOwnProperty(l)?null:l})}}else if("index"==g||"original"==g)for(g=0,a=a.aoData.length;g<a;g++)"none"==f?c.push(g):(e=k.inArray(g,d),(-1===
e&&"removed"==f||0<=e&&"applied"==f)&&c.push(g));return c},wc=function(a,b,c){var d;return tb("row",b,function(e){var f=hc(e),g=a.aoData;if(null!==f&&!c)return[f];d||(d=Ua(a,c));if(null!==f&&-1!==k.inArray(f,d))return[f];if(null===e||e===q||""===e)return d;if("function"===typeof e)return k.map(d,function(l){var n=g[l];return e(l,n._aData,n.nTr)?l:null});if(e.nodeName){f=e._DT_RowIndex;var h=e._DT_CellIndex;if(f!==q)return g[f]&&g[f].nTr===e?[f]:[];if(h)return g[h.row]&&g[h.row].nTr===e.parentNode?
[h.row]:[];f=k(e).closest("*[data-dt-row]");return f.length?[f.data("dt-row")]:[]}if("string"===typeof e&&"#"===e.charAt(0)&&(f=a.aIds[e.replace(/^#/,"")],f!==q))return[f.idx];f=kc(Ca(a.aoData,d,"nTr"));return k(f).filter(e).map(function(){return this._DT_RowIndex}).toArray()},a,c)};w("rows()",function(a,b){a===q?a="":k.isPlainObject(a)&&(b=a,a="");b=ub(b);var c=this.iterator("table",function(d){return wc(d,a,b)},1);c.selector.rows=a;c.selector.opts=b;return c});w("rows().nodes()",function(){return this.iterator("row",
function(a,b){return a.aoData[b].nTr||q},1)});w("rows().data()",function(){return this.iterator(!0,"rows",function(a,b){return Ca(a.aoData,b,"_aData")},1)});J("rows().cache()","row().cache()",function(a){return this.iterator("row",function(b,c){b=b.aoData[c];return"search"===a?b._aFilterData:b._aSortData},1)});J("rows().invalidate()","row().invalidate()",function(a){return this.iterator("row",function(b,c){va(b,c,a)})});J("rows().indexes()","row().index()",function(){return this.iterator("row",function(a,
b){return b},1)});J("rows().ids()","row().id()",function(a){for(var b=[],c=this.context,d=0,e=c.length;d<e;d++)for(var f=0,g=this[d].length;f<g;f++){var h=c[d].rowIdFn(c[d].aoData[this[d][f]]._aData);b.push((!0===a?"#":"")+h)}return new D(c,b)});J("rows().remove()","row().remove()",function(){var a=this;this.iterator("row",function(b,c,d){var e=b.aoData,f=e[c],g,h;e.splice(c,1);var l=0;for(g=e.length;l<g;l++){var n=e[l];var m=n.anCells;null!==n.nTr&&(n.nTr._DT_RowIndex=l);if(null!==m)for(n=0,h=m.length;n<
h;n++)m[n]._DT_CellIndex.row=l}Ia(b.aiDisplayMaster,c);Ia(b.aiDisplay,c);Ia(a[d],c,!1);0<b._iRecordsDisplay&&b._iRecordsDisplay--;jb(b);c=b.rowIdFn(f._aData);c!==q&&delete b.aIds[c]});this.iterator("table",function(b){for(var c=0,d=b.aoData.length;c<d;c++)b.aoData[c].idx=c});return this});w("rows.add()",function(a){var b=this.iterator("table",function(d){var e,f=[];var g=0;for(e=a.length;g<e;g++){var h=a[g];h.nodeName&&"TR"===h.nodeName.toUpperCase()?f.push(Ga(d,h)[0]):f.push(ea(d,h))}return f},1),
c=this.rows(-1);c.pop();k.merge(c,b);return c});w("row()",function(a,b){return vb(this.rows(a,b))});w("row().data()",function(a){var b=this.context;if(a===q)return b.length&&this.length?b[0].aoData[this[0]]._aData:q;var c=b[0].aoData[this[0]];c._aData=a;Array.isArray(a)&&c.nTr&&c.nTr.id&&da(b[0].rowId)(a,c.nTr.id);va(b[0],this[0],"data");return this});w("row().node()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]].nTr||null:null});w("row.add()",function(a){a instanceof
k&&a.length&&(a=a[0]);var b=this.iterator("table",function(c){return a.nodeName&&"TR"===a.nodeName.toUpperCase()?Ga(c,a)[0]:ea(c,a)});return this.row(b[0])});var xc=function(a,b,c,d){var e=[],f=function(g,h){if(Array.isArray(g)||g instanceof k)for(var l=0,n=g.length;l<n;l++)f(g[l],h);else g.nodeName&&"tr"===g.nodeName.toLowerCase()?e.push(g):(l=k("<tr><td></td></tr>").addClass(h),k("td",l).addClass(h).html(g)[0].colSpan=na(a),e.push(l[0]))};f(c,d);b._details&&b._details.detach();b._details=k(e);b._detailsShow&&
b._details.insertAfter(b.nTr)},wb=function(a,b){var c=a.context;c.length&&(a=c[0].aoData[b!==q?b:a[0]])&&a._details&&(a._details.remove(),a._detailsShow=q,a._details=q)},pc=function(a,b){var c=a.context;c.length&&a.length&&(a=c[0].aoData[a[0]],a._details&&((a._detailsShow=b)?a._details.insertAfter(a.nTr):a._details.detach(),yc(c[0])))},yc=function(a){var b=new D(a),c=a.aoData;b.off("draw.dt.DT_details column-visibility.dt.DT_details destroy.dt.DT_details");0<T(c,"_details").length&&(b.on("draw.dt.DT_details",
function(d,e){a===e&&b.rows({page:"current"}).eq(0).each(function(f){f=c[f];f._detailsShow&&f._details.insertAfter(f.nTr)})}),b.on("column-visibility.dt.DT_details",function(d,e,f,g){if(a===e)for(e=na(e),f=0,g=c.length;f<g;f++)d=c[f],d._details&&d._details.children("td[colspan]").attr("colspan",e)}),b.on("destroy.dt.DT_details",function(d,e){if(a===e)for(d=0,e=c.length;d<e;d++)c[d]._details&&wb(b,d)}))};w("row().child()",function(a,b){var c=this.context;if(a===q)return c.length&&this.length?c[0].aoData[this[0]]._details:
q;!0===a?this.child.show():!1===a?wb(this):c.length&&this.length&&xc(c[0],c[0].aoData[this[0]],a,b);return this});w(["row().child.show()","row().child().show()"],function(a){pc(this,!0);return this});w(["row().child.hide()","row().child().hide()"],function(){pc(this,!1);return this});w(["row().child.remove()","row().child().remove()"],function(){wb(this);return this});w("row().child.isShown()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]]._detailsShow||!1:!1});var zc=
/^([^:]+):(name|visIdx|visible)$/,qc=function(a,b,c,d,e){c=[];d=0;for(var f=e.length;d<f;d++)c.push(S(a,e[d],b));return c},Ac=function(a,b,c){var d=a.aoColumns,e=T(d,"sName"),f=T(d,"nTh");return tb("column",b,function(g){var h=hc(g);if(""===g)return qa(d.length);if(null!==h)return[0<=h?h:d.length+h];if("function"===typeof g){var l=Ua(a,c);return k.map(d,function(p,t){return g(t,qc(a,t,0,0,l),f[t])?t:null})}var n="string"===typeof g?g.match(zc):"";if(n)switch(n[2]){case "visIdx":case "visible":h=parseInt(n[1],
10);if(0>h){var m=k.map(d,function(p,t){return p.bVisible?t:null});return[m[m.length+h]]}return[sa(a,h)];case "name":return k.map(e,function(p,t){return p===n[1]?t:null});default:return[]}if(g.nodeName&&g._DT_CellIndex)return[g._DT_CellIndex.column];h=k(f).filter(g).map(function(){return k.inArray(this,f)}).toArray();if(h.length||!g.nodeName)return h;h=k(g).closest("*[data-dt-column]");return h.length?[h.data("dt-column")]:[]},a,c)};w("columns()",function(a,b){a===q?a="":k.isPlainObject(a)&&(b=a,
a="");b=ub(b);var c=this.iterator("table",function(d){return Ac(d,a,b)},1);c.selector.cols=a;c.selector.opts=b;return c});J("columns().header()","column().header()",function(a,b){return this.iterator("column",function(c,d){return c.aoColumns[d].nTh},1)});J("columns().footer()","column().footer()",function(a,b){return this.iterator("column",function(c,d){return c.aoColumns[d].nTf},1)});J("columns().data()","column().data()",function(){return this.iterator("column-rows",qc,1)});J("columns().dataSrc()",
"column().dataSrc()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].mData},1)});J("columns().cache()","column().cache()",function(a){return this.iterator("column-rows",function(b,c,d,e,f){return Ca(b.aoData,f,"search"===a?"_aFilterData":"_aSortData",c)},1)});J("columns().nodes()","column().nodes()",function(){return this.iterator("column-rows",function(a,b,c,d,e){return Ca(a.aoData,e,"anCells",b)},1)});J("columns().visible()","column().visible()",function(a,b){var c=
this,d=this.iterator("column",function(e,f){if(a===q)return e.aoColumns[f].bVisible;var g=e.aoColumns,h=g[f],l=e.aoData,n;if(a!==q&&h.bVisible!==a){if(a){var m=k.inArray(!0,T(g,"bVisible"),f+1);g=0;for(n=l.length;g<n;g++){var p=l[g].nTr;e=l[g].anCells;p&&p.insertBefore(e[f],e[m]||null)}}else k(T(e.aoData,"anCells",f)).detach();h.bVisible=a}});a!==q&&this.iterator("table",function(e){xa(e,e.aoHeader);xa(e,e.aoFooter);e.aiDisplay.length||k(e.nTBody).find("td[colspan]").attr("colspan",na(e));Qa(e);c.iterator("column",
function(f,g){H(f,null,"column-visibility",[f,g,a,b])});(b===q||b)&&c.columns.adjust()});return d});J("columns().indexes()","column().index()",function(a){return this.iterator("column",function(b,c){return"visible"===a?ta(b,c):c},1)});w("columns.adjust()",function(){return this.iterator("table",function(a){ra(a)},1)});w("column.index()",function(a,b){if(0!==this.context.length){var c=this.context[0];if("fromVisible"===a||"toData"===a)return sa(c,b);if("fromData"===a||"toVisible"===a)return ta(c,b)}});
w("column()",function(a,b){return vb(this.columns(a,b))});var Bc=function(a,b,c){var d=a.aoData,e=Ua(a,c),f=kc(Ca(d,e,"anCells")),g=k(lc([],f)),h,l=a.aoColumns.length,n,m,p,t,v,x;return tb("cell",b,function(r){var A="function"===typeof r;if(null===r||r===q||A){n=[];m=0;for(p=e.length;m<p;m++)for(h=e[m],t=0;t<l;t++)v={row:h,column:t},A?(x=d[h],r(v,S(a,h,t),x.anCells?x.anCells[t]:null)&&n.push(v)):n.push(v);return n}if(k.isPlainObject(r))return r.column!==q&&r.row!==q&&-1!==k.inArray(r.row,e)?[r]:[];
A=g.filter(r).map(function(E,I){return{row:I._DT_CellIndex.row,column:I._DT_CellIndex.column}}).toArray();if(A.length||!r.nodeName)return A;x=k(r).closest("*[data-dt-row]");return x.length?[{row:x.data("dt-row"),column:x.data("dt-column")}]:[]},a,c)};w("cells()",function(a,b,c){k.isPlainObject(a)&&(a.row===q?(c=a,a=null):(c=b,b=null));k.isPlainObject(b)&&(c=b,b=null);if(null===b||b===q)return this.iterator("table",function(m){return Bc(m,a,ub(c))});var d=c?{page:c.page,order:c.order,search:c.search}:
{},e=this.columns(b,d),f=this.rows(a,d),g,h,l,n;d=this.iterator("table",function(m,p){m=[];g=0;for(h=f[p].length;g<h;g++)for(l=0,n=e[p].length;l<n;l++)m.push({row:f[p][g],column:e[p][l]});return m},1);d=c&&c.selected?this.cells(d,c):d;k.extend(d.selector,{cols:b,rows:a,opts:c});return d});J("cells().nodes()","cell().node()",function(){return this.iterator("cell",function(a,b,c){return(a=a.aoData[b])&&a.anCells?a.anCells[c]:q},1)});w("cells().data()",function(){return this.iterator("cell",function(a,
b,c){return S(a,b,c)},1)});J("cells().cache()","cell().cache()",function(a){a="search"===a?"_aFilterData":"_aSortData";return this.iterator("cell",function(b,c,d){return b.aoData[c][a][d]},1)});J("cells().render()","cell().render()",function(a){return this.iterator("cell",function(b,c,d){return S(b,c,d,a)},1)});J("cells().indexes()","cell().index()",function(){return this.iterator("cell",function(a,b,c){return{row:b,column:c,columnVisible:ta(a,c)}},1)});J("cells().invalidate()","cell().invalidate()",
function(a){return this.iterator("cell",function(b,c,d){va(b,c,a,d)})});w("cell()",function(a,b,c){return vb(this.cells(a,b,c))});w("cell().data()",function(a){var b=this.context,c=this[0];if(a===q)return b.length&&c.length?S(b[0],c[0].row,c[0].column):q;Db(b[0],c[0].row,c[0].column,a);va(b[0],c[0].row,"data",c[0].column);return this});w("order()",function(a,b){var c=this.context;if(a===q)return 0!==c.length?c[0].aaSorting:q;"number"===typeof a?a=[[a,b]]:a.length&&!Array.isArray(a[0])&&(a=Array.prototype.slice.call(arguments));
return this.iterator("table",function(d){d.aaSorting=a.slice()})});w("order.listener()",function(a,b,c){return this.iterator("table",function(d){db(d,a,b,c)})});w("order.fixed()",function(a){if(!a){var b=this.context;b=b.length?b[0].aaSortingFixed:q;return Array.isArray(b)?{pre:b}:b}return this.iterator("table",function(c){c.aaSortingFixed=k.extend(!0,{},a)})});w(["columns().order()","column().order()"],function(a){var b=this;return this.iterator("table",function(c,d){var e=[];k.each(b[d],function(f,
g){e.push([g,a])});c.aaSorting=e})});w("search()",function(a,b,c,d){var e=this.context;return a===q?0!==e.length?e[0].oPreviousSearch.sSearch:q:this.iterator("table",function(f){f.oFeatures.bFilter&&ya(f,k.extend({},f.oPreviousSearch,{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),1)})});J("columns().search()","column().search()",function(a,b,c,d){return this.iterator("column",function(e,f){var g=e.aoPreSearchCols;if(a===q)return g[f].sSearch;e.oFeatures.bFilter&&
(k.extend(g[f],{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),ya(e,e.oPreviousSearch,1))})});w("state()",function(){return this.context.length?this.context[0].oSavedState:null});w("state.clear()",function(){return this.iterator("table",function(a){a.fnStateSaveCallback.call(a.oInstance,a,{})})});w("state.loaded()",function(){return this.context.length?this.context[0].oLoadedState:null});w("state.save()",function(){return this.iterator("table",function(a){Qa(a)})});
u.versionCheck=u.fnVersionCheck=function(a){var b=u.version.split(".");a=a.split(".");for(var c,d,e=0,f=a.length;e<f;e++)if(c=parseInt(b[e],10)||0,d=parseInt(a[e],10)||0,c!==d)return c>d;return!0};u.isDataTable=u.fnIsDataTable=function(a){var b=k(a).get(0),c=!1;if(a instanceof u.Api)return!0;k.each(u.settings,function(d,e){d=e.nScrollHead?k("table",e.nScrollHead)[0]:null;var f=e.nScrollFoot?k("table",e.nScrollFoot)[0]:null;if(e.nTable===b||d===b||f===b)c=!0});return c};u.tables=u.fnTables=function(a){var b=
!1;k.isPlainObject(a)&&(b=a.api,a=a.visible);var c=k.map(u.settings,function(d){if(!a||a&&k(d.nTable).is(":visible"))return d.nTable});return b?new D(c):c};u.camelToHungarian=O;w("$()",function(a,b){b=this.rows(b).nodes();b=k(b);return k([].concat(b.filter(a).toArray(),b.find(a).toArray()))});k.each(["on","one","off"],function(a,b){w(b+"()",function(){var c=Array.prototype.slice.call(arguments);c[0]=k.map(c[0].split(/\s/),function(e){return e.match(/\.dt\b/)?e:e+".dt"}).join(" ");var d=k(this.tables().nodes());
d[b].apply(d,c);return this})});w("clear()",function(){return this.iterator("table",function(a){Ha(a)})});w("settings()",function(){return new D(this.context,this.context)});w("init()",function(){var a=this.context;return a.length?a[0].oInit:null});w("data()",function(){return this.iterator("table",function(a){return T(a.aoData,"_aData")}).flatten()});w("destroy()",function(a){a=a||!1;return this.iterator("table",function(b){var c=b.nTableWrapper.parentNode,d=b.oClasses,e=b.nTable,f=b.nTBody,g=b.nTHead,
h=b.nTFoot,l=k(e);f=k(f);var n=k(b.nTableWrapper),m=k.map(b.aoData,function(t){return t.nTr}),p;b.bDestroying=!0;H(b,"aoDestroyCallback","destroy",[b]);a||(new D(b)).columns().visible(!0);n.off(".DT").find(":not(tbody *)").off(".DT");k(y).off(".DT-"+b.sInstance);e!=g.parentNode&&(l.children("thead").detach(),l.append(g));h&&e!=h.parentNode&&(l.children("tfoot").detach(),l.append(h));b.aaSorting=[];b.aaSortingFixed=[];Pa(b);k(m).removeClass(b.asStripeClasses.join(" "));k("th, td",g).removeClass(d.sSortable+
" "+d.sSortableAsc+" "+d.sSortableDesc+" "+d.sSortableNone);f.children().detach();f.append(m);g=a?"remove":"detach";l[g]();n[g]();!a&&c&&(c.insertBefore(e,b.nTableReinsertBefore),l.css("width",b.sDestroyWidth).removeClass(d.sTable),(p=b.asDestroyStripes.length)&&f.children().each(function(t){k(this).addClass(b.asDestroyStripes[t%p])}));c=k.inArray(b,u.settings);-1!==c&&u.settings.splice(c,1)})});k.each(["column","row","cell"],function(a,b){w(b+"s().every()",function(c){var d=this.selector.opts,e=
this;return this.iterator(b,function(f,g,h,l,n){c.call(e[b](g,"cell"===b?h:d,"cell"===b?d:q),g,h,l,n)})})});w("i18n()",function(a,b,c){var d=this.context[0];a=ia(a)(d.oLanguage);a===q&&(a=b);c!==q&&k.isPlainObject(a)&&(a=a[c]!==q?a[c]:a._);return a.replace("%d",c)});u.version="1.10.24";u.settings=[];u.models={};u.models.oSearch={bCaseInsensitive:!0,sSearch:"",bRegex:!1,bSmart:!0};u.models.oRow={nTr:null,anCells:null,_aData:[],_aSortData:null,_aFilterData:null,_sFilterRow:null,_sRowStripe:"",src:null,
idx:-1};u.models.oColumn={idx:null,aDataSort:null,asSorting:null,bSearchable:null,bSortable:null,bVisible:null,_sManualType:null,_bAttrSrc:!1,fnCreatedCell:null,fnGetData:null,fnSetData:null,mData:null,mRender:null,nTh:null,nTf:null,sClass:null,sContentPadding:null,sDefaultContent:null,sName:null,sSortDataType:"std",sSortingClass:null,sSortingClassJUI:null,sTitle:null,sType:null,sWidth:null,sWidthOrig:null};u.defaults={aaData:null,aaSorting:[[0,"asc"]],aaSortingFixed:[],ajax:null,aLengthMenu:[10,
25,50,100],aoColumns:null,aoColumnDefs:null,aoSearchCols:[],asStripeClasses:null,bAutoWidth:!0,bDeferRender:!1,bDestroy:!1,bFilter:!0,bInfo:!0,bLengthChange:!0,bPaginate:!0,bProcessing:!1,bRetrieve:!1,bScrollCollapse:!1,bServerSide:!1,bSort:!0,bSortMulti:!0,bSortCellsTop:!1,bSortClasses:!0,bStateSave:!1,fnCreatedRow:null,fnDrawCallback:null,fnFooterCallback:null,fnFormatNumber:function(a){return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g,this.oLanguage.sThousands)},fnHeaderCallback:null,fnInfoCallback:null,
fnInitComplete:null,fnPreDrawCallback:null,fnRowCallback:null,fnServerData:null,fnServerParams:null,fnStateLoadCallback:function(a){try{return JSON.parse((-1===a.iStateDuration?sessionStorage:localStorage).getItem("DataTables_"+a.sInstance+"_"+location.pathname))}catch(b){return{}}},fnStateLoadParams:null,fnStateLoaded:null,fnStateSaveCallback:function(a,b){try{(-1===a.iStateDuration?sessionStorage:localStorage).setItem("DataTables_"+a.sInstance+"_"+location.pathname,JSON.stringify(b))}catch(c){}},
fnStateSaveParams:null,iStateDuration:7200,iDeferLoading:null,iDisplayLength:10,iDisplayStart:0,iTabIndex:0,oClasses:{},oLanguage:{oAria:{sSortAscending:": activate to sort column ascending",sSortDescending:": activate to sort column descending"},oPaginate:{sFirst:"First",sLast:"Last",sNext:"Next",sPrevious:"Previous"},sEmptyTable:"No data available in table",sInfo:"Showing _START_ to _END_ of _TOTAL_ entries",sInfoEmpty:"Showing 0 to 0 of 0 entries",sInfoFiltered:"(filtered from _MAX_ total entries)",
sInfoPostFix:"",sDecimal:"",sThousands:",",sLengthMenu:"Show _MENU_ entries",sLoadingRecords:"Loading...",sProcessing:"Processing...",sSearch:"Search:",sSearchPlaceholder:"",sUrl:"",sZeroRecords:"No matching records found"},oSearch:k.extend({},u.models.oSearch),sAjaxDataProp:"data",sAjaxSource:null,sDom:"lfrtip",searchDelay:null,sPaginationType:"simple_numbers",sScrollX:"",sScrollXInner:"",sScrollY:"",sServerMethod:"GET",renderer:null,rowId:"DT_RowId"};G(u.defaults);u.defaults.column={aDataSort:null,
iDataSort:-1,asSorting:["asc","desc"],bSearchable:!0,bSortable:!0,bVisible:!0,fnCreatedCell:null,mData:null,mRender:null,sCellType:"td",sClass:"",sContentPadding:"",sDefaultContent:null,sName:"",sSortDataType:"std",sTitle:null,sType:null,sWidth:null};G(u.defaults.column);u.models.oSettings={oFeatures:{bAutoWidth:null,bDeferRender:null,bFilter:null,bInfo:null,bLengthChange:null,bPaginate:null,bProcessing:null,bServerSide:null,bSort:null,bSortMulti:null,bSortClasses:null,bStateSave:null},oScroll:{bCollapse:null,
iBarWidth:0,sX:null,sXInner:null,sY:null},oLanguage:{fnInfoCallback:null},oBrowser:{bScrollOversize:!1,bScrollbarLeft:!1,bBounding:!1,barWidth:0},ajax:null,aanFeatures:[],aoData:[],aiDisplay:[],aiDisplayMaster:[],aIds:{},aoColumns:[],aoHeader:[],aoFooter:[],oPreviousSearch:{},aoPreSearchCols:[],aaSorting:null,aaSortingFixed:[],asStripeClasses:null,asDestroyStripes:[],sDestroyWidth:0,aoRowCallback:[],aoHeaderCallback:[],aoFooterCallback:[],aoDrawCallback:[],aoRowCreatedCallback:[],aoPreDrawCallback:[],
aoInitComplete:[],aoStateSaveParams:[],aoStateLoadParams:[],aoStateLoaded:[],sTableId:"",nTable:null,nTHead:null,nTFoot:null,nTBody:null,nTableWrapper:null,bDeferLoading:!1,bInitialised:!1,aoOpenRows:[],sDom:null,searchDelay:null,sPaginationType:"two_button",iStateDuration:0,aoStateSave:[],aoStateLoad:[],oSavedState:null,oLoadedState:null,sAjaxSource:null,sAjaxDataProp:null,bAjaxDataGet:!0,jqXHR:null,json:q,oAjaxData:q,fnServerData:null,aoServerParams:[],sServerMethod:null,fnFormatNumber:null,aLengthMenu:null,
iDraw:0,bDrawing:!1,iDrawError:-1,_iDisplayLength:10,_iDisplayStart:0,_iRecordsTotal:0,_iRecordsDisplay:0,oClasses:{},bFiltered:!1,bSorted:!1,bSortCellsTop:null,oInit:null,aoDestroyCallback:[],fnRecordsTotal:function(){return"ssp"==P(this)?1*this._iRecordsTotal:this.aiDisplayMaster.length},fnRecordsDisplay:function(){return"ssp"==P(this)?1*this._iRecordsDisplay:this.aiDisplay.length},fnDisplayEnd:function(){var a=this._iDisplayLength,b=this._iDisplayStart,c=b+a,d=this.aiDisplay.length,e=this.oFeatures,
f=e.bPaginate;return e.bServerSide?!1===f||-1===a?b+d:Math.min(b+a,this._iRecordsDisplay):!f||c>d||-1===a?d:c},oInstance:null,sInstance:null,iTabIndex:0,nScrollHead:null,nScrollFoot:null,aLastSort:[],oPlugins:{},rowIdFn:null,rowId:null};u.ext=L={buttons:{},classes:{},builder:"-source-",errMode:"alert",feature:[],search:[],selector:{cell:[],column:[],row:[]},internal:{},legacy:{ajax:null},pager:{},renderer:{pageButton:{},header:{}},order:{},type:{detect:[],search:{},order:{}},_unique:0,fnVersionCheck:u.fnVersionCheck,
iApiIndex:0,oJUIClasses:{},sVersion:u.version};k.extend(L,{afnFiltering:L.search,aTypes:L.type.detect,ofnSearch:L.type.search,oSort:L.type.order,afnSortData:L.order,aoFeatures:L.feature,oApi:L.internal,oStdClasses:L.classes,oPagination:L.pager});k.extend(u.ext.classes,{sTable:"dataTable",sNoFooter:"no-footer",sPageButton:"paginate_button",sPageButtonActive:"current",sPageButtonDisabled:"disabled",sStripeOdd:"odd",sStripeEven:"even",sRowEmpty:"dataTables_empty",sWrapper:"dataTables_wrapper",sFilter:"dataTables_filter",
sInfo:"dataTables_info",sPaging:"dataTables_paginate paging_",sLength:"dataTables_length",sProcessing:"dataTables_processing",sSortAsc:"sorting_asc",sSortDesc:"sorting_desc",sSortable:"sorting",sSortableAsc:"sorting_desc_disabled",sSortableDesc:"sorting_asc_disabled",sSortableNone:"sorting_disabled",sSortColumn:"sorting_",sFilterInput:"",sLengthSelect:"",sScrollWrapper:"dataTables_scroll",sScrollHead:"dataTables_scrollHead",sScrollHeadInner:"dataTables_scrollHeadInner",sScrollBody:"dataTables_scrollBody",
sScrollFoot:"dataTables_scrollFoot",sScrollFootInner:"dataTables_scrollFootInner",sHeaderTH:"",sFooterTH:"",sSortJUIAsc:"",sSortJUIDesc:"",sSortJUI:"",sSortJUIAscAllowed:"",sSortJUIDescAllowed:"",sSortJUIWrapper:"",sSortIcon:"",sJUIHeader:"",sJUIFooter:""});var ec=u.ext.pager;k.extend(ec,{simple:function(a,b){return["previous","next"]},full:function(a,b){return["first","previous","next","last"]},numbers:function(a,b){return[Ba(a,b)]},simple_numbers:function(a,b){return["previous",Ba(a,b),"next"]},
full_numbers:function(a,b){return["first","previous",Ba(a,b),"next","last"]},first_last_numbers:function(a,b){return["first",Ba(a,b),"last"]},_numbers:Ba,numbers_length:7});k.extend(!0,u.ext.renderer,{pageButton:{_:function(a,b,c,d,e,f){var g=a.oClasses,h=a.oLanguage.oPaginate,l=a.oLanguage.oAria.paginate||{},n,m,p=0,t=function(x,r){var A,E=g.sPageButtonDisabled,I=function(B){kb(a,B.data.action,!0)};var W=0;for(A=r.length;W<A;W++){var M=r[W];if(Array.isArray(M)){var C=k("<"+(M.DT_el||"div")+"/>").appendTo(x);
t(C,M)}else{n=null;m=M;C=a.iTabIndex;switch(M){case "ellipsis":x.append('<span class="ellipsis">&#x2026;</span>');break;case "first":n=h.sFirst;0===e&&(C=-1,m+=" "+E);break;case "previous":n=h.sPrevious;0===e&&(C=-1,m+=" "+E);break;case "next":n=h.sNext;if(0===f||e===f-1)C=-1,m+=" "+E;break;case "last":n=h.sLast;if(0===f||e===f-1)C=-1,m+=" "+E;break;default:n=a.fnFormatNumber(M+1),m=e===M?g.sPageButtonActive:""}null!==n&&(C=k("<a>",{"class":g.sPageButton+" "+m,"aria-controls":a.sTableId,"aria-label":l[M],
"data-dt-idx":p,tabindex:C,id:0===c&&"string"===typeof M?a.sTableId+"_"+M:null}).html(n).appendTo(x),ob(C,{action:M},I),p++)}}};try{var v=k(b).find(z.activeElement).data("dt-idx")}catch(x){}t(k(b).empty(),d);v!==q&&k(b).find("[data-dt-idx="+v+"]").trigger("focus")}}});k.extend(u.ext.type.detect,[function(a,b){b=b.oLanguage.sDecimal;return sb(a,b)?"num"+b:null},function(a,b){if(a&&!(a instanceof Date)&&!tc.test(a))return null;b=Date.parse(a);return null!==b&&!isNaN(b)||ca(a)?"date":null},function(a,
b){b=b.oLanguage.sDecimal;return sb(a,b,!0)?"num-fmt"+b:null},function(a,b){b=b.oLanguage.sDecimal;return jc(a,b)?"html-num"+b:null},function(a,b){b=b.oLanguage.sDecimal;return jc(a,b,!0)?"html-num-fmt"+b:null},function(a,b){return ca(a)||"string"===typeof a&&-1!==a.indexOf("<")?"html":null}]);k.extend(u.ext.type.search,{html:function(a){return ca(a)?a:"string"===typeof a?a.replace(gc," ").replace(Ta,""):""},string:function(a){return ca(a)?a:"string"===typeof a?a.replace(gc," "):a}});var Sa=function(a,
b,c,d){if(0!==a&&(!a||"-"===a))return-Infinity;b&&(a=ic(a,b));a.replace&&(c&&(a=a.replace(c,"")),d&&(a=a.replace(d,"")));return 1*a};k.extend(L.type.order,{"date-pre":function(a){a=Date.parse(a);return isNaN(a)?-Infinity:a},"html-pre":function(a){return ca(a)?"":a.replace?a.replace(/<.*?>/g,"").toLowerCase():a+""},"string-pre":function(a){return ca(a)?"":"string"===typeof a?a.toLowerCase():a.toString?a.toString():""},"string-asc":function(a,b){return a<b?-1:a>b?1:0},"string-desc":function(a,b){return a<
b?1:a>b?-1:0}});Va("");k.extend(!0,u.ext.renderer,{header:{_:function(a,b,c,d){k(a.nTable).on("order.dt.DT",function(e,f,g,h){a===f&&(e=c.idx,b.removeClass(d.sSortAsc+" "+d.sSortDesc).addClass("asc"==h[e]?d.sSortAsc:"desc"==h[e]?d.sSortDesc:c.sSortingClass))})},jqueryui:function(a,b,c,d){k("<div/>").addClass(d.sSortJUIWrapper).append(b.contents()).append(k("<span/>").addClass(d.sSortIcon+" "+c.sSortingClassJUI)).appendTo(b);k(a.nTable).on("order.dt.DT",function(e,f,g,h){a===f&&(e=c.idx,b.removeClass(d.sSortAsc+
" "+d.sSortDesc).addClass("asc"==h[e]?d.sSortAsc:"desc"==h[e]?d.sSortDesc:c.sSortingClass),b.find("span."+d.sSortIcon).removeClass(d.sSortJUIAsc+" "+d.sSortJUIDesc+" "+d.sSortJUI+" "+d.sSortJUIAscAllowed+" "+d.sSortJUIDescAllowed).addClass("asc"==h[e]?d.sSortJUIAsc:"desc"==h[e]?d.sSortJUIDesc:c.sSortingClassJUI))})}}});var xb=function(a){return"string"===typeof a?a.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"):a};u.render={number:function(a,b,c,d,e){return{display:function(f){if("number"!==
typeof f&&"string"!==typeof f)return f;var g=0>f?"-":"",h=parseFloat(f);if(isNaN(h))return xb(f);h=h.toFixed(c);f=Math.abs(h);h=parseInt(f,10);f=c?b+(f-h).toFixed(c).substring(2):"";return g+(d||"")+h.toString().replace(/\B(?=(\d{3})+(?!\d))/g,a)+f+(e||"")}}},text:function(){return{display:xb,filter:xb}}};k.extend(u.ext.internal,{_fnExternApiFunc:fc,_fnBuildAjax:La,_fnAjaxUpdate:Fb,_fnAjaxParameters:Ob,_fnAjaxUpdateDraw:Pb,_fnAjaxDataSrc:Ma,_fnAddColumn:Wa,_fnColumnOptions:Da,_fnAdjustColumnSizing:ra,
_fnVisibleToColumnIndex:sa,_fnColumnIndexToVisible:ta,_fnVisbleColumns:na,_fnGetColumns:Fa,_fnColumnTypes:Ya,_fnApplyColumnDefs:Cb,_fnHungarianMap:G,_fnCamelToHungarian:O,_fnLanguageCompat:ma,_fnBrowserDetect:Ab,_fnAddData:ea,_fnAddTr:Ga,_fnNodeToDataIndex:function(a,b){return b._DT_RowIndex!==q?b._DT_RowIndex:null},_fnNodeToColumnIndex:function(a,b,c){return k.inArray(c,a.aoData[b].anCells)},_fnGetCellData:S,_fnSetCellData:Db,_fnSplitObjNotation:ab,_fnGetObjectDataFn:ia,_fnSetObjectDataFn:da,_fnGetDataMaster:bb,
_fnClearTable:Ha,_fnDeleteIndex:Ia,_fnInvalidate:va,_fnGetRowElements:$a,_fnCreateTr:Za,_fnBuildHead:Eb,_fnDrawHead:xa,_fnDraw:fa,_fnReDraw:ja,_fnAddOptionsHtml:Hb,_fnDetectHeader:wa,_fnGetUniqueThs:Ka,_fnFeatureHtmlFilter:Jb,_fnFilterComplete:ya,_fnFilterCustom:Sb,_fnFilterColumn:Rb,_fnFilter:Qb,_fnFilterCreateSearch:gb,_fnEscapeRegex:hb,_fnFilterData:Tb,_fnFeatureHtmlInfo:Mb,_fnUpdateInfo:Wb,_fnInfoMacros:Xb,_fnInitialise:za,_fnInitComplete:Na,_fnLengthChange:ib,_fnFeatureHtmlLength:Ib,_fnFeatureHtmlPaginate:Nb,
_fnPageChange:kb,_fnFeatureHtmlProcessing:Kb,_fnProcessingDisplay:U,_fnFeatureHtmlTable:Lb,_fnScrollDraw:Ea,_fnApplyToChildren:Z,_fnCalculateColumnWidths:Xa,_fnThrottle:fb,_fnConvertToWidth:Zb,_fnGetWidestNode:$b,_fnGetMaxLenString:ac,_fnStringToCss:K,_fnSortFlatten:pa,_fnSort:Gb,_fnSortAria:cc,_fnSortListener:nb,_fnSortAttachListener:db,_fnSortingClasses:Pa,_fnSortData:bc,_fnSaveState:Qa,_fnLoadState:dc,_fnSettingsFromNode:Ra,_fnLog:aa,_fnMap:V,_fnBindAction:ob,_fnCallbackReg:Q,_fnCallbackFire:H,
_fnLengthOverflow:jb,_fnRenderer:eb,_fnDataSource:P,_fnRowAttributes:cb,_fnExtend:pb,_fnCalculateEnd:function(){}});k.fn.dataTable=u;u.$=k;k.fn.dataTableSettings=u.settings;k.fn.dataTableExt=u.ext;k.fn.DataTable=function(a){return k(this).dataTable(a).api()};k.each(u,function(a,b){k.fn.DataTable[a]=b});return k.fn.dataTable});



/*!
 DataTables Bootstrap 5 integration
 2020 SpryMedia Ltd - datatables.net/license
*/
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.findInternal=function(a,b,c){a instanceof String&&(a=String(a));for(var e=a.length,d=0;d<e;d++){var f=a[d];if(b.call(c,f,d,a))return{i:d,v:f}}return{i:-1,v:void 0}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;$jscomp.ISOLATE_POLYFILLS=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};$jscomp.getGlobal=function(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE="function"===typeof Symbol&&"symbol"===typeof Symbol("x");$jscomp.TRUST_ES6_POLYFILLS=!$jscomp.ISOLATE_POLYFILLS||$jscomp.IS_SYMBOL_NATIVE;$jscomp.polyfills={};$jscomp.propertyToPolyfillSymbol={};$jscomp.POLYFILL_PREFIX="$jscp$";var $jscomp$lookupPolyfilledValue=function(a,b){var c=$jscomp.propertyToPolyfillSymbol[b];if(null==c)return a[b];c=a[c];return void 0!==c?c:a[b]};
$jscomp.polyfill=function(a,b,c,e){b&&($jscomp.ISOLATE_POLYFILLS?$jscomp.polyfillIsolated(a,b,c,e):$jscomp.polyfillUnisolated(a,b,c,e))};$jscomp.polyfillUnisolated=function(a,b,c,e){c=$jscomp.global;a=a.split(".");for(e=0;e<a.length-1;e++){var d=a[e];if(!(d in c))return;c=c[d]}a=a[a.length-1];e=c[a];b=b(e);b!=e&&null!=b&&$jscomp.defineProperty(c,a,{configurable:!0,writable:!0,value:b})};
$jscomp.polyfillIsolated=function(a,b,c,e){var d=a.split(".");a=1===d.length;e=d[0];e=!a&&e in $jscomp.polyfills?$jscomp.polyfills:$jscomp.global;for(var f=0;f<d.length-1;f++){var l=d[f];if(!(l in e))return;e=e[l]}d=d[d.length-1];c=$jscomp.IS_SYMBOL_NATIVE&&"es6"===c?e[d]:null;b=b(c);null!=b&&(a?$jscomp.defineProperty($jscomp.polyfills,d,{configurable:!0,writable:!0,value:b}):b!==c&&($jscomp.propertyToPolyfillSymbol[d]=$jscomp.IS_SYMBOL_NATIVE?$jscomp.global.Symbol(d):$jscomp.POLYFILL_PREFIX+d,d=
$jscomp.propertyToPolyfillSymbol[d],$jscomp.defineProperty(e,d,{configurable:!0,writable:!0,value:b})))};$jscomp.polyfill("Array.prototype.find",function(a){return a?a:function(b,c){return $jscomp.findInternal(this,b,c).v}},"es6","es3");
(function(a){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(b){return a(b,window,document)}):"object"===typeof exports?module.exports=function(b,c){b||(b=window);c&&c.fn.dataTable||(c=require("datatables.net")(b,c).$);return a(c,b,b.document)}:a(jQuery,window,document)})(function(a,b,c,e){var d=a.fn.dataTable;a.extend(!0,d.defaults,{dom:"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
renderer:"bootstrap"});a.extend(d.ext.classes,{sWrapper:"dataTables_wrapper dt-bootstrap5",sFilterInput:"form-control form-control-sm",sLengthSelect:"form-select form-select-sm",sProcessing:"dataTables_processing card",sPageButton:"paginate_button page-item"});d.ext.renderer.pageButton.bootstrap=function(f,l,A,B,m,t){var u=new d.Api(f),C=f.oClasses,n=f.oLanguage.oPaginate,D=f.oLanguage.oAria.paginate||{},h,k,v=0,y=function(q,w){var x,E=function(p){p.preventDefault();a(p.currentTarget).hasClass("disabled")||
u.page()==p.data.action||u.page(p.data.action).draw("page")};var r=0;for(x=w.length;r<x;r++){var g=w[r];if(Array.isArray(g))y(q,g);else{k=h="";switch(g){case "ellipsis":h="&#x2026;";k="disabled";break;case "first":h=n.sFirst;k=g+(0<m?"":" disabled");break;case "previous":h=n.sPrevious;k=g+(0<m?"":" disabled");break;case "next":h=n.sNext;k=g+(m<t-1?"":" disabled");break;case "last":h=n.sLast;k=g+(m<t-1?"":" disabled");break;default:h=g+1,k=m===g?"active":""}if(h){var F=a("<li>",{"class":C.sPageButton+
" "+k,id:0===A&&"string"===typeof g?f.sTableId+"_"+g:null}).append(a("<a>",{href:"#","aria-controls":f.sTableId,"aria-label":D[g],"data-dt-idx":v,tabindex:f.iTabIndex,"class":"page-link"}).html(h)).appendTo(q);f.oApi._fnBindAction(F,{action:g},E);v++}}}};try{var z=a(l).find(c.activeElement).data("dt-idx")}catch(q){}y(a(l).empty().html('<ul class="pagination"/>').children("ul"),B);z!==e&&a(l).find("[data-dt-idx="+z+"]").trigger("focus")};return d});




/*!
  * Bootstrap v5.0.0-beta3 (https://getbootstrap.com/)
  * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t="undefined"!=typeof globalThis?globalThis:t||self).bootstrap=e()}(this,(function(){"use strict";const t=t=>{do{t+=Math.floor(1e6*Math.random())}while(document.getElementById(t));return t},e=t=>{let e=t.getAttribute("data-bs-target");if(!e||"#"===e){let i=t.getAttribute("href");if(!i||!i.includes("#")&&!i.startsWith("."))return null;i.includes("#")&&!i.startsWith("#")&&(i="#"+i.split("#")[1]),e=i&&"#"!==i?i.trim():null}return e},i=t=>{const i=e(t);return i&&document.querySelector(i)?i:null},s=t=>{const i=e(t);return i?document.querySelector(i):null},n=t=>{if(!t)return 0;let{transitionDuration:e,transitionDelay:i}=window.getComputedStyle(t);const s=Number.parseFloat(e),n=Number.parseFloat(i);return s||n?(e=e.split(",")[0],i=i.split(",")[0],1e3*(Number.parseFloat(e)+Number.parseFloat(i))):0},o=t=>{t.dispatchEvent(new Event("transitionend"))},r=t=>(t[0]||t).nodeType,a=(t,e)=>{let i=!1;const s=e+5;t.addEventListener("transitionend",(function e(){i=!0,t.removeEventListener("transitionend",e)})),setTimeout(()=>{i||o(t)},s)},l=(t,e,i)=>{Object.keys(i).forEach(s=>{const n=i[s],o=e[s],a=o&&r(o)?"element":null==(l=o)?""+l:{}.toString.call(l).match(/\s([a-z]+)/i)[1].toLowerCase();var l;if(!new RegExp(n).test(a))throw new TypeError(t.toUpperCase()+": "+`Option "${s}" provided type "${a}" `+`but expected type "${n}".`)})},c=t=>{if(!t)return!1;if(t.style&&t.parentNode&&t.parentNode.style){const e=getComputedStyle(t),i=getComputedStyle(t.parentNode);return"none"!==e.display&&"none"!==i.display&&"hidden"!==e.visibility}return!1},d=t=>!t||t.nodeType!==Node.ELEMENT_NODE||!!t.classList.contains("disabled")||(void 0!==t.disabled?t.disabled:t.hasAttribute("disabled")&&"false"!==t.getAttribute("disabled")),h=t=>{if(!document.documentElement.attachShadow)return null;if("function"==typeof t.getRootNode){const e=t.getRootNode();return e instanceof ShadowRoot?e:null}return t instanceof ShadowRoot?t:t.parentNode?h(t.parentNode):null},f=()=>function(){},u=t=>t.offsetHeight,p=()=>{const{jQuery:t}=window;return t&&!document.body.hasAttribute("data-bs-no-jquery")?t:null},g=()=>"rtl"===document.documentElement.dir,m=(t,e)=>{var i;i=()=>{const i=p();if(i){const s=i.fn[t];i.fn[t]=e.jQueryInterface,i.fn[t].Constructor=e,i.fn[t].noConflict=()=>(i.fn[t]=s,e.jQueryInterface)}},"loading"===document.readyState?document.addEventListener("DOMContentLoaded",i):i()},_=new Map;var b={set(t,e,i){_.has(t)||_.set(t,new Map);const s=_.get(t);s.has(e)||0===s.size?s.set(e,i):console.error(`Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(s.keys())[0]}.`)},get:(t,e)=>_.has(t)&&_.get(t).get(e)||null,remove(t,e){if(!_.has(t))return;const i=_.get(t);i.delete(e),0===i.size&&_.delete(t)}};const v=/[^.]*(?=\..*)\.|.*/,y=/\..*/,w=/::\d+$/,E={};let T=1;const A={mouseenter:"mouseover",mouseleave:"mouseout"},L=new Set(["click","dblclick","mouseup","mousedown","contextmenu","mousewheel","DOMMouseScroll","mouseover","mouseout","mousemove","selectstart","selectend","keydown","keypress","keyup","orientationchange","touchstart","touchmove","touchend","touchcancel","pointerdown","pointermove","pointerup","pointerleave","pointercancel","gesturestart","gesturechange","gestureend","focus","blur","change","reset","select","submit","focusin","focusout","load","unload","beforeunload","resize","move","DOMContentLoaded","readystatechange","error","abort","scroll"]);function O(t,e){return e&&`${e}::${T++}`||t.uidEvent||T++}function k(t){const e=O(t);return t.uidEvent=e,E[e]=E[e]||{},E[e]}function D(t,e,i=null){const s=Object.keys(t);for(let n=0,o=s.length;n<o;n++){const o=t[s[n]];if(o.originalHandler===e&&o.delegationSelector===i)return o}return null}function x(t,e,i){const s="string"==typeof e,n=s?i:e;let o=t.replace(y,"");const r=A[o];return r&&(o=r),L.has(o)||(o=t),[s,n,o]}function C(t,e,i,s,n){if("string"!=typeof e||!t)return;i||(i=s,s=null);const[o,r,a]=x(e,i,s),l=k(t),c=l[a]||(l[a]={}),d=D(c,r,o?i:null);if(d)return void(d.oneOff=d.oneOff&&n);const h=O(r,e.replace(v,"")),f=o?function(t,e,i){return function s(n){const o=t.querySelectorAll(e);for(let{target:e}=n;e&&e!==this;e=e.parentNode)for(let r=o.length;r--;)if(o[r]===e)return n.delegateTarget=e,s.oneOff&&N.off(t,n.type,i),i.apply(e,[n]);return null}}(t,i,s):function(t,e){return function i(s){return s.delegateTarget=t,i.oneOff&&N.off(t,s.type,e),e.apply(t,[s])}}(t,i);f.delegationSelector=o?i:null,f.originalHandler=r,f.oneOff=n,f.uidEvent=h,c[h]=f,t.addEventListener(a,f,o)}function S(t,e,i,s,n){const o=D(e[i],s,n);o&&(t.removeEventListener(i,o,Boolean(n)),delete e[i][o.uidEvent])}const N={on(t,e,i,s){C(t,e,i,s,!1)},one(t,e,i,s){C(t,e,i,s,!0)},off(t,e,i,s){if("string"!=typeof e||!t)return;const[n,o,r]=x(e,i,s),a=r!==e,l=k(t),c=e.startsWith(".");if(void 0!==o){if(!l||!l[r])return;return void S(t,l,r,o,n?i:null)}c&&Object.keys(l).forEach(i=>{!function(t,e,i,s){const n=e[i]||{};Object.keys(n).forEach(o=>{if(o.includes(s)){const s=n[o];S(t,e,i,s.originalHandler,s.delegationSelector)}})}(t,l,i,e.slice(1))});const d=l[r]||{};Object.keys(d).forEach(i=>{const s=i.replace(w,"");if(!a||e.includes(s)){const e=d[i];S(t,l,r,e.originalHandler,e.delegationSelector)}})},trigger(t,e,i){if("string"!=typeof e||!t)return null;const s=p(),n=e.replace(y,""),o=e!==n,r=L.has(n);let a,l=!0,c=!0,d=!1,h=null;return o&&s&&(a=s.Event(e,i),s(t).trigger(a),l=!a.isPropagationStopped(),c=!a.isImmediatePropagationStopped(),d=a.isDefaultPrevented()),r?(h=document.createEvent("HTMLEvents"),h.initEvent(n,l,!0)):h=new CustomEvent(e,{bubbles:l,cancelable:!0}),void 0!==i&&Object.keys(i).forEach(t=>{Object.defineProperty(h,t,{get:()=>i[t]})}),d&&h.preventDefault(),c&&t.dispatchEvent(h),h.defaultPrevented&&void 0!==a&&a.preventDefault(),h}};class j{constructor(t){(t="string"==typeof t?document.querySelector(t):t)&&(this._element=t,b.set(this._element,this.constructor.DATA_KEY,this))}dispose(){b.remove(this._element,this.constructor.DATA_KEY),this._element=null}static getInstance(t){return b.get(t,this.DATA_KEY)}static get VERSION(){return"5.0.0-beta3"}}class P extends j{static get DATA_KEY(){return"bs.alert"}close(t){const e=t?this._getRootElement(t):this._element,i=this._triggerCloseEvent(e);null===i||i.defaultPrevented||this._removeElement(e)}_getRootElement(t){return s(t)||t.closest(".alert")}_triggerCloseEvent(t){return N.trigger(t,"close.bs.alert")}_removeElement(t){if(t.classList.remove("show"),!t.classList.contains("fade"))return void this._destroyElement(t);const e=n(t);N.one(t,"transitionend",()=>this._destroyElement(t)),a(t,e)}_destroyElement(t){t.parentNode&&t.parentNode.removeChild(t),N.trigger(t,"closed.bs.alert")}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.alert");e||(e=new P(this)),"close"===t&&e[t](this)}))}static handleDismiss(t){return function(e){e&&e.preventDefault(),t.close(this)}}}N.on(document,"click.bs.alert.data-api",'[data-bs-dismiss="alert"]',P.handleDismiss(new P)),m("alert",P);class I extends j{static get DATA_KEY(){return"bs.button"}toggle(){this._element.setAttribute("aria-pressed",this._element.classList.toggle("active"))}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.button");e||(e=new I(this)),"toggle"===t&&e[t]()}))}}function M(t){return"true"===t||"false"!==t&&(t===Number(t).toString()?Number(t):""===t||"null"===t?null:t)}function R(t){return t.replace(/[A-Z]/g,t=>"-"+t.toLowerCase())}N.on(document,"click.bs.button.data-api",'[data-bs-toggle="button"]',t=>{t.preventDefault();const e=t.target.closest('[data-bs-toggle="button"]');let i=b.get(e,"bs.button");i||(i=new I(e)),i.toggle()}),m("button",I);const B={setDataAttribute(t,e,i){t.setAttribute("data-bs-"+R(e),i)},removeDataAttribute(t,e){t.removeAttribute("data-bs-"+R(e))},getDataAttributes(t){if(!t)return{};const e={};return Object.keys(t.dataset).filter(t=>t.startsWith("bs")).forEach(i=>{let s=i.replace(/^bs/,"");s=s.charAt(0).toLowerCase()+s.slice(1,s.length),e[s]=M(t.dataset[i])}),e},getDataAttribute:(t,e)=>M(t.getAttribute("data-bs-"+R(e))),offset(t){const e=t.getBoundingClientRect();return{top:e.top+document.body.scrollTop,left:e.left+document.body.scrollLeft}},position:t=>({top:t.offsetTop,left:t.offsetLeft})},H={find:(t,e=document.documentElement)=>[].concat(...Element.prototype.querySelectorAll.call(e,t)),findOne:(t,e=document.documentElement)=>Element.prototype.querySelector.call(e,t),children:(t,e)=>[].concat(...t.children).filter(t=>t.matches(e)),parents(t,e){const i=[];let s=t.parentNode;for(;s&&s.nodeType===Node.ELEMENT_NODE&&3!==s.nodeType;)s.matches(e)&&i.push(s),s=s.parentNode;return i},prev(t,e){let i=t.previousElementSibling;for(;i;){if(i.matches(e))return[i];i=i.previousElementSibling}return[]},next(t,e){let i=t.nextElementSibling;for(;i;){if(i.matches(e))return[i];i=i.nextElementSibling}return[]}},W={interval:5e3,keyboard:!0,slide:!1,pause:"hover",wrap:!0,touch:!0},U={interval:"(number|boolean)",keyboard:"boolean",slide:"(boolean|string)",pause:"(string|boolean)",wrap:"boolean",touch:"boolean"},$="next",F="prev",z="left",K="right";class Y extends j{constructor(t,e){super(t),this._items=null,this._interval=null,this._activeElement=null,this._isPaused=!1,this._isSliding=!1,this.touchTimeout=null,this.touchStartX=0,this.touchDeltaX=0,this._config=this._getConfig(e),this._indicatorsElement=H.findOne(".carousel-indicators",this._element),this._touchSupported="ontouchstart"in document.documentElement||navigator.maxTouchPoints>0,this._pointerEvent=Boolean(window.PointerEvent),this._addEventListeners()}static get Default(){return W}static get DATA_KEY(){return"bs.carousel"}next(){this._isSliding||this._slide($)}nextWhenVisible(){!document.hidden&&c(this._element)&&this.next()}prev(){this._isSliding||this._slide(F)}pause(t){t||(this._isPaused=!0),H.findOne(".carousel-item-next, .carousel-item-prev",this._element)&&(o(this._element),this.cycle(!0)),clearInterval(this._interval),this._interval=null}cycle(t){t||(this._isPaused=!1),this._interval&&(clearInterval(this._interval),this._interval=null),this._config&&this._config.interval&&!this._isPaused&&(this._updateInterval(),this._interval=setInterval((document.visibilityState?this.nextWhenVisible:this.next).bind(this),this._config.interval))}to(t){this._activeElement=H.findOne(".active.carousel-item",this._element);const e=this._getItemIndex(this._activeElement);if(t>this._items.length-1||t<0)return;if(this._isSliding)return void N.one(this._element,"slid.bs.carousel",()=>this.to(t));if(e===t)return this.pause(),void this.cycle();const i=t>e?$:F;this._slide(i,this._items[t])}dispose(){N.off(this._element,".bs.carousel"),this._items=null,this._config=null,this._interval=null,this._isPaused=null,this._isSliding=null,this._activeElement=null,this._indicatorsElement=null,super.dispose()}_getConfig(t){return t={...W,...t},l("carousel",t,U),t}_handleSwipe(){const t=Math.abs(this.touchDeltaX);if(t<=40)return;const e=t/this.touchDeltaX;this.touchDeltaX=0,e&&this._slide(e>0?K:z)}_addEventListeners(){this._config.keyboard&&N.on(this._element,"keydown.bs.carousel",t=>this._keydown(t)),"hover"===this._config.pause&&(N.on(this._element,"mouseenter.bs.carousel",t=>this.pause(t)),N.on(this._element,"mouseleave.bs.carousel",t=>this.cycle(t))),this._config.touch&&this._touchSupported&&this._addTouchEventListeners()}_addTouchEventListeners(){const t=t=>{!this._pointerEvent||"pen"!==t.pointerType&&"touch"!==t.pointerType?this._pointerEvent||(this.touchStartX=t.touches[0].clientX):this.touchStartX=t.clientX},e=t=>{this.touchDeltaX=t.touches&&t.touches.length>1?0:t.touches[0].clientX-this.touchStartX},i=t=>{!this._pointerEvent||"pen"!==t.pointerType&&"touch"!==t.pointerType||(this.touchDeltaX=t.clientX-this.touchStartX),this._handleSwipe(),"hover"===this._config.pause&&(this.pause(),this.touchTimeout&&clearTimeout(this.touchTimeout),this.touchTimeout=setTimeout(t=>this.cycle(t),500+this._config.interval))};H.find(".carousel-item img",this._element).forEach(t=>{N.on(t,"dragstart.bs.carousel",t=>t.preventDefault())}),this._pointerEvent?(N.on(this._element,"pointerdown.bs.carousel",e=>t(e)),N.on(this._element,"pointerup.bs.carousel",t=>i(t)),this._element.classList.add("pointer-event")):(N.on(this._element,"touchstart.bs.carousel",e=>t(e)),N.on(this._element,"touchmove.bs.carousel",t=>e(t)),N.on(this._element,"touchend.bs.carousel",t=>i(t)))}_keydown(t){/input|textarea/i.test(t.target.tagName)||("ArrowLeft"===t.key?(t.preventDefault(),this._slide(z)):"ArrowRight"===t.key&&(t.preventDefault(),this._slide(K)))}_getItemIndex(t){return this._items=t&&t.parentNode?H.find(".carousel-item",t.parentNode):[],this._items.indexOf(t)}_getItemByOrder(t,e){const i=t===$,s=t===F,n=this._getItemIndex(e),o=this._items.length-1;if((s&&0===n||i&&n===o)&&!this._config.wrap)return e;const r=(n+(s?-1:1))%this._items.length;return-1===r?this._items[this._items.length-1]:this._items[r]}_triggerSlideEvent(t,e){const i=this._getItemIndex(t),s=this._getItemIndex(H.findOne(".active.carousel-item",this._element));return N.trigger(this._element,"slide.bs.carousel",{relatedTarget:t,direction:e,from:s,to:i})}_setActiveIndicatorElement(t){if(this._indicatorsElement){const e=H.findOne(".active",this._indicatorsElement);e.classList.remove("active"),e.removeAttribute("aria-current");const i=H.find("[data-bs-target]",this._indicatorsElement);for(let e=0;e<i.length;e++)if(Number.parseInt(i[e].getAttribute("data-bs-slide-to"),10)===this._getItemIndex(t)){i[e].classList.add("active"),i[e].setAttribute("aria-current","true");break}}}_updateInterval(){const t=this._activeElement||H.findOne(".active.carousel-item",this._element);if(!t)return;const e=Number.parseInt(t.getAttribute("data-bs-interval"),10);e?(this._config.defaultInterval=this._config.defaultInterval||this._config.interval,this._config.interval=e):this._config.interval=this._config.defaultInterval||this._config.interval}_slide(t,e){const i=this._directionToOrder(t),s=H.findOne(".active.carousel-item",this._element),o=this._getItemIndex(s),r=e||this._getItemByOrder(i,s),l=this._getItemIndex(r),c=Boolean(this._interval),d=i===$,h=d?"carousel-item-start":"carousel-item-end",f=d?"carousel-item-next":"carousel-item-prev",p=this._orderToDirection(i);if(r&&r.classList.contains("active"))this._isSliding=!1;else if(!this._triggerSlideEvent(r,p).defaultPrevented&&s&&r){if(this._isSliding=!0,c&&this.pause(),this._setActiveIndicatorElement(r),this._activeElement=r,this._element.classList.contains("slide")){r.classList.add(f),u(r),s.classList.add(h),r.classList.add(h);const t=n(s);N.one(s,"transitionend",()=>{r.classList.remove(h,f),r.classList.add("active"),s.classList.remove("active",f,h),this._isSliding=!1,setTimeout(()=>{N.trigger(this._element,"slid.bs.carousel",{relatedTarget:r,direction:p,from:o,to:l})},0)}),a(s,t)}else s.classList.remove("active"),r.classList.add("active"),this._isSliding=!1,N.trigger(this._element,"slid.bs.carousel",{relatedTarget:r,direction:p,from:o,to:l});c&&this.cycle()}}_directionToOrder(t){return[K,z].includes(t)?g()?t===K?F:$:t===K?$:F:t}_orderToDirection(t){return[$,F].includes(t)?g()?t===$?z:K:t===$?K:z:t}static carouselInterface(t,e){let i=b.get(t,"bs.carousel"),s={...W,...B.getDataAttributes(t)};"object"==typeof e&&(s={...s,...e});const n="string"==typeof e?e:s.slide;if(i||(i=new Y(t,s)),"number"==typeof e)i.to(e);else if("string"==typeof n){if(void 0===i[n])throw new TypeError(`No method named "${n}"`);i[n]()}else s.interval&&s.ride&&(i.pause(),i.cycle())}static jQueryInterface(t){return this.each((function(){Y.carouselInterface(this,t)}))}static dataApiClickHandler(t){const e=s(this);if(!e||!e.classList.contains("carousel"))return;const i={...B.getDataAttributes(e),...B.getDataAttributes(this)},n=this.getAttribute("data-bs-slide-to");n&&(i.interval=!1),Y.carouselInterface(e,i),n&&b.get(e,"bs.carousel").to(n),t.preventDefault()}}N.on(document,"click.bs.carousel.data-api","[data-bs-slide], [data-bs-slide-to]",Y.dataApiClickHandler),N.on(window,"load.bs.carousel.data-api",()=>{const t=H.find('[data-bs-ride="carousel"]');for(let e=0,i=t.length;e<i;e++)Y.carouselInterface(t[e],b.get(t[e],"bs.carousel"))}),m("carousel",Y);const q={toggle:!0,parent:""},V={toggle:"boolean",parent:"(string|element)"};class X extends j{constructor(t,e){super(t),this._isTransitioning=!1,this._config=this._getConfig(e),this._triggerArray=H.find(`[data-bs-toggle="collapse"][href="#${this._element.id}"],[data-bs-toggle="collapse"][data-bs-target="#${this._element.id}"]`);const s=H.find('[data-bs-toggle="collapse"]');for(let t=0,e=s.length;t<e;t++){const e=s[t],n=i(e),o=H.find(n).filter(t=>t===this._element);null!==n&&o.length&&(this._selector=n,this._triggerArray.push(e))}this._parent=this._config.parent?this._getParent():null,this._config.parent||this._addAriaAndCollapsedClass(this._element,this._triggerArray),this._config.toggle&&this.toggle()}static get Default(){return q}static get DATA_KEY(){return"bs.collapse"}toggle(){this._element.classList.contains("show")?this.hide():this.show()}show(){if(this._isTransitioning||this._element.classList.contains("show"))return;let t,e;this._parent&&(t=H.find(".show, .collapsing",this._parent).filter(t=>"string"==typeof this._config.parent?t.getAttribute("data-bs-parent")===this._config.parent:t.classList.contains("collapse")),0===t.length&&(t=null));const i=H.findOne(this._selector);if(t){const s=t.find(t=>i!==t);if(e=s?b.get(s,"bs.collapse"):null,e&&e._isTransitioning)return}if(N.trigger(this._element,"show.bs.collapse").defaultPrevented)return;t&&t.forEach(t=>{i!==t&&X.collapseInterface(t,"hide"),e||b.set(t,"bs.collapse",null)});const s=this._getDimension();this._element.classList.remove("collapse"),this._element.classList.add("collapsing"),this._element.style[s]=0,this._triggerArray.length&&this._triggerArray.forEach(t=>{t.classList.remove("collapsed"),t.setAttribute("aria-expanded",!0)}),this.setTransitioning(!0);const o="scroll"+(s[0].toUpperCase()+s.slice(1)),r=n(this._element);N.one(this._element,"transitionend",()=>{this._element.classList.remove("collapsing"),this._element.classList.add("collapse","show"),this._element.style[s]="",this.setTransitioning(!1),N.trigger(this._element,"shown.bs.collapse")}),a(this._element,r),this._element.style[s]=this._element[o]+"px"}hide(){if(this._isTransitioning||!this._element.classList.contains("show"))return;if(N.trigger(this._element,"hide.bs.collapse").defaultPrevented)return;const t=this._getDimension();this._element.style[t]=this._element.getBoundingClientRect()[t]+"px",u(this._element),this._element.classList.add("collapsing"),this._element.classList.remove("collapse","show");const e=this._triggerArray.length;if(e>0)for(let t=0;t<e;t++){const e=this._triggerArray[t],i=s(e);i&&!i.classList.contains("show")&&(e.classList.add("collapsed"),e.setAttribute("aria-expanded",!1))}this.setTransitioning(!0),this._element.style[t]="";const i=n(this._element);N.one(this._element,"transitionend",()=>{this.setTransitioning(!1),this._element.classList.remove("collapsing"),this._element.classList.add("collapse"),N.trigger(this._element,"hidden.bs.collapse")}),a(this._element,i)}setTransitioning(t){this._isTransitioning=t}dispose(){super.dispose(),this._config=null,this._parent=null,this._triggerArray=null,this._isTransitioning=null}_getConfig(t){return(t={...q,...t}).toggle=Boolean(t.toggle),l("collapse",t,V),t}_getDimension(){return this._element.classList.contains("width")?"width":"height"}_getParent(){let{parent:t}=this._config;r(t)?void 0===t.jquery&&void 0===t[0]||(t=t[0]):t=H.findOne(t);const e=`[data-bs-toggle="collapse"][data-bs-parent="${t}"]`;return H.find(e,t).forEach(t=>{const e=s(t);this._addAriaAndCollapsedClass(e,[t])}),t}_addAriaAndCollapsedClass(t,e){if(!t||!e.length)return;const i=t.classList.contains("show");e.forEach(t=>{i?t.classList.remove("collapsed"):t.classList.add("collapsed"),t.setAttribute("aria-expanded",i)})}static collapseInterface(t,e){let i=b.get(t,"bs.collapse");const s={...q,...B.getDataAttributes(t),..."object"==typeof e&&e?e:{}};if(!i&&s.toggle&&"string"==typeof e&&/show|hide/.test(e)&&(s.toggle=!1),i||(i=new X(t,s)),"string"==typeof e){if(void 0===i[e])throw new TypeError(`No method named "${e}"`);i[e]()}}static jQueryInterface(t){return this.each((function(){X.collapseInterface(this,t)}))}}N.on(document,"click.bs.collapse.data-api",'[data-bs-toggle="collapse"]',(function(t){("A"===t.target.tagName||t.delegateTarget&&"A"===t.delegateTarget.tagName)&&t.preventDefault();const e=B.getDataAttributes(this),s=i(this);H.find(s).forEach(t=>{const i=b.get(t,"bs.collapse");let s;i?(null===i._parent&&"string"==typeof e.parent&&(i._config.parent=e.parent,i._parent=i._getParent()),s="toggle"):s=e,X.collapseInterface(t,s)})})),m("collapse",X);var Q="top",G="bottom",Z="right",J="left",tt=[Q,G,Z,J],et=tt.reduce((function(t,e){return t.concat([e+"-start",e+"-end"])}),[]),it=[].concat(tt,["auto"]).reduce((function(t,e){return t.concat([e,e+"-start",e+"-end"])}),[]),st=["beforeRead","read","afterRead","beforeMain","main","afterMain","beforeWrite","write","afterWrite"];function nt(t){return t?(t.nodeName||"").toLowerCase():null}function ot(t){if(null==t)return window;if("[object Window]"!==t.toString()){var e=t.ownerDocument;return e&&e.defaultView||window}return t}function rt(t){return t instanceof ot(t).Element||t instanceof Element}function at(t){return t instanceof ot(t).HTMLElement||t instanceof HTMLElement}function lt(t){return"undefined"!=typeof ShadowRoot&&(t instanceof ot(t).ShadowRoot||t instanceof ShadowRoot)}var ct={name:"applyStyles",enabled:!0,phase:"write",fn:function(t){var e=t.state;Object.keys(e.elements).forEach((function(t){var i=e.styles[t]||{},s=e.attributes[t]||{},n=e.elements[t];at(n)&&nt(n)&&(Object.assign(n.style,i),Object.keys(s).forEach((function(t){var e=s[t];!1===e?n.removeAttribute(t):n.setAttribute(t,!0===e?"":e)})))}))},effect:function(t){var e=t.state,i={popper:{position:e.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(e.elements.popper.style,i.popper),e.styles=i,e.elements.arrow&&Object.assign(e.elements.arrow.style,i.arrow),function(){Object.keys(e.elements).forEach((function(t){var s=e.elements[t],n=e.attributes[t]||{},o=Object.keys(e.styles.hasOwnProperty(t)?e.styles[t]:i[t]).reduce((function(t,e){return t[e]="",t}),{});at(s)&&nt(s)&&(Object.assign(s.style,o),Object.keys(n).forEach((function(t){s.removeAttribute(t)})))}))}},requires:["computeStyles"]};function dt(t){return t.split("-")[0]}function ht(t){var e=t.getBoundingClientRect();return{width:e.width,height:e.height,top:e.top,right:e.right,bottom:e.bottom,left:e.left,x:e.left,y:e.top}}function ft(t){var e=ht(t),i=t.offsetWidth,s=t.offsetHeight;return Math.abs(e.width-i)<=1&&(i=e.width),Math.abs(e.height-s)<=1&&(s=e.height),{x:t.offsetLeft,y:t.offsetTop,width:i,height:s}}function ut(t,e){var i=e.getRootNode&&e.getRootNode();if(t.contains(e))return!0;if(i&&lt(i)){var s=e;do{if(s&&t.isSameNode(s))return!0;s=s.parentNode||s.host}while(s)}return!1}function pt(t){return ot(t).getComputedStyle(t)}function gt(t){return["table","td","th"].indexOf(nt(t))>=0}function mt(t){return((rt(t)?t.ownerDocument:t.document)||window.document).documentElement}function _t(t){return"html"===nt(t)?t:t.assignedSlot||t.parentNode||(lt(t)?t.host:null)||mt(t)}function bt(t){return at(t)&&"fixed"!==pt(t).position?t.offsetParent:null}function vt(t){for(var e=ot(t),i=bt(t);i&&gt(i)&&"static"===pt(i).position;)i=bt(i);return i&&("html"===nt(i)||"body"===nt(i)&&"static"===pt(i).position)?e:i||function(t){for(var e=-1!==navigator.userAgent.toLowerCase().indexOf("firefox"),i=_t(t);at(i)&&["html","body"].indexOf(nt(i))<0;){var s=pt(i);if("none"!==s.transform||"none"!==s.perspective||"paint"===s.contain||-1!==["transform","perspective"].indexOf(s.willChange)||e&&"filter"===s.willChange||e&&s.filter&&"none"!==s.filter)return i;i=i.parentNode}return null}(t)||e}function yt(t){return["top","bottom"].indexOf(t)>=0?"x":"y"}var wt=Math.max,Et=Math.min,Tt=Math.round;function At(t,e,i){return wt(t,Et(e,i))}function Lt(t){return Object.assign({},{top:0,right:0,bottom:0,left:0},t)}function Ot(t,e){return e.reduce((function(e,i){return e[i]=t,e}),{})}var kt={name:"arrow",enabled:!0,phase:"main",fn:function(t){var e,i=t.state,s=t.name,n=t.options,o=i.elements.arrow,r=i.modifiersData.popperOffsets,a=dt(i.placement),l=yt(a),c=[J,Z].indexOf(a)>=0?"height":"width";if(o&&r){var d=function(t,e){return Lt("number"!=typeof(t="function"==typeof t?t(Object.assign({},e.rects,{placement:e.placement})):t)?t:Ot(t,tt))}(n.padding,i),h=ft(o),f="y"===l?Q:J,u="y"===l?G:Z,p=i.rects.reference[c]+i.rects.reference[l]-r[l]-i.rects.popper[c],g=r[l]-i.rects.reference[l],m=vt(o),_=m?"y"===l?m.clientHeight||0:m.clientWidth||0:0,b=p/2-g/2,v=d[f],y=_-h[c]-d[u],w=_/2-h[c]/2+b,E=At(v,w,y),T=l;i.modifiersData[s]=((e={})[T]=E,e.centerOffset=E-w,e)}},effect:function(t){var e=t.state,i=t.options.element,s=void 0===i?"[data-popper-arrow]":i;null!=s&&("string"!=typeof s||(s=e.elements.popper.querySelector(s)))&&ut(e.elements.popper,s)&&(e.elements.arrow=s)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]},Dt={top:"auto",right:"auto",bottom:"auto",left:"auto"};function xt(t){var e,i=t.popper,s=t.popperRect,n=t.placement,o=t.offsets,r=t.position,a=t.gpuAcceleration,l=t.adaptive,c=t.roundOffsets,d=!0===c?function(t){var e=t.x,i=t.y,s=window.devicePixelRatio||1;return{x:Tt(Tt(e*s)/s)||0,y:Tt(Tt(i*s)/s)||0}}(o):"function"==typeof c?c(o):o,h=d.x,f=void 0===h?0:h,u=d.y,p=void 0===u?0:u,g=o.hasOwnProperty("x"),m=o.hasOwnProperty("y"),_=J,b=Q,v=window;if(l){var y=vt(i),w="clientHeight",E="clientWidth";y===ot(i)&&"static"!==pt(y=mt(i)).position&&(w="scrollHeight",E="scrollWidth"),y=y,n===Q&&(b=G,p-=y[w]-s.height,p*=a?1:-1),n===J&&(_=Z,f-=y[E]-s.width,f*=a?1:-1)}var T,A=Object.assign({position:r},l&&Dt);return a?Object.assign({},A,((T={})[b]=m?"0":"",T[_]=g?"0":"",T.transform=(v.devicePixelRatio||1)<2?"translate("+f+"px, "+p+"px)":"translate3d("+f+"px, "+p+"px, 0)",T)):Object.assign({},A,((e={})[b]=m?p+"px":"",e[_]=g?f+"px":"",e.transform="",e))}var Ct={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(t){var e=t.state,i=t.options,s=i.gpuAcceleration,n=void 0===s||s,o=i.adaptive,r=void 0===o||o,a=i.roundOffsets,l=void 0===a||a,c={placement:dt(e.placement),popper:e.elements.popper,popperRect:e.rects.popper,gpuAcceleration:n};null!=e.modifiersData.popperOffsets&&(e.styles.popper=Object.assign({},e.styles.popper,xt(Object.assign({},c,{offsets:e.modifiersData.popperOffsets,position:e.options.strategy,adaptive:r,roundOffsets:l})))),null!=e.modifiersData.arrow&&(e.styles.arrow=Object.assign({},e.styles.arrow,xt(Object.assign({},c,{offsets:e.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:l})))),e.attributes.popper=Object.assign({},e.attributes.popper,{"data-popper-placement":e.placement})},data:{}},St={passive:!0},Nt={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(t){var e=t.state,i=t.instance,s=t.options,n=s.scroll,o=void 0===n||n,r=s.resize,a=void 0===r||r,l=ot(e.elements.popper),c=[].concat(e.scrollParents.reference,e.scrollParents.popper);return o&&c.forEach((function(t){t.addEventListener("scroll",i.update,St)})),a&&l.addEventListener("resize",i.update,St),function(){o&&c.forEach((function(t){t.removeEventListener("scroll",i.update,St)})),a&&l.removeEventListener("resize",i.update,St)}},data:{}},jt={left:"right",right:"left",bottom:"top",top:"bottom"};function Pt(t){return t.replace(/left|right|bottom|top/g,(function(t){return jt[t]}))}var It={start:"end",end:"start"};function Mt(t){return t.replace(/start|end/g,(function(t){return It[t]}))}function Rt(t){var e=ot(t);return{scrollLeft:e.pageXOffset,scrollTop:e.pageYOffset}}function Bt(t){return ht(mt(t)).left+Rt(t).scrollLeft}function Ht(t){var e=pt(t),i=e.overflow,s=e.overflowX,n=e.overflowY;return/auto|scroll|overlay|hidden/.test(i+n+s)}function Wt(t,e){var i;void 0===e&&(e=[]);var s=function t(e){return["html","body","#document"].indexOf(nt(e))>=0?e.ownerDocument.body:at(e)&&Ht(e)?e:t(_t(e))}(t),n=s===(null==(i=t.ownerDocument)?void 0:i.body),o=ot(s),r=n?[o].concat(o.visualViewport||[],Ht(s)?s:[]):s,a=e.concat(r);return n?a:a.concat(Wt(_t(r)))}function Ut(t){return Object.assign({},t,{left:t.x,top:t.y,right:t.x+t.width,bottom:t.y+t.height})}function $t(t,e){return"viewport"===e?Ut(function(t){var e=ot(t),i=mt(t),s=e.visualViewport,n=i.clientWidth,o=i.clientHeight,r=0,a=0;return s&&(n=s.width,o=s.height,/^((?!chrome|android).)*safari/i.test(navigator.userAgent)||(r=s.offsetLeft,a=s.offsetTop)),{width:n,height:o,x:r+Bt(t),y:a}}(t)):at(e)?function(t){var e=ht(t);return e.top=e.top+t.clientTop,e.left=e.left+t.clientLeft,e.bottom=e.top+t.clientHeight,e.right=e.left+t.clientWidth,e.width=t.clientWidth,e.height=t.clientHeight,e.x=e.left,e.y=e.top,e}(e):Ut(function(t){var e,i=mt(t),s=Rt(t),n=null==(e=t.ownerDocument)?void 0:e.body,o=wt(i.scrollWidth,i.clientWidth,n?n.scrollWidth:0,n?n.clientWidth:0),r=wt(i.scrollHeight,i.clientHeight,n?n.scrollHeight:0,n?n.clientHeight:0),a=-s.scrollLeft+Bt(t),l=-s.scrollTop;return"rtl"===pt(n||i).direction&&(a+=wt(i.clientWidth,n?n.clientWidth:0)-o),{width:o,height:r,x:a,y:l}}(mt(t)))}function Ft(t){return t.split("-")[1]}function zt(t){var e,i=t.reference,s=t.element,n=t.placement,o=n?dt(n):null,r=n?Ft(n):null,a=i.x+i.width/2-s.width/2,l=i.y+i.height/2-s.height/2;switch(o){case Q:e={x:a,y:i.y-s.height};break;case G:e={x:a,y:i.y+i.height};break;case Z:e={x:i.x+i.width,y:l};break;case J:e={x:i.x-s.width,y:l};break;default:e={x:i.x,y:i.y}}var c=o?yt(o):null;if(null!=c){var d="y"===c?"height":"width";switch(r){case"start":e[c]=e[c]-(i[d]/2-s[d]/2);break;case"end":e[c]=e[c]+(i[d]/2-s[d]/2)}}return e}function Kt(t,e){void 0===e&&(e={});var i=e,s=i.placement,n=void 0===s?t.placement:s,o=i.boundary,r=void 0===o?"clippingParents":o,a=i.rootBoundary,l=void 0===a?"viewport":a,c=i.elementContext,d=void 0===c?"popper":c,h=i.altBoundary,f=void 0!==h&&h,u=i.padding,p=void 0===u?0:u,g=Lt("number"!=typeof p?p:Ot(p,tt)),m="popper"===d?"reference":"popper",_=t.elements.reference,b=t.rects.popper,v=t.elements[f?m:d],y=function(t,e,i){var s="clippingParents"===e?function(t){var e=Wt(_t(t)),i=["absolute","fixed"].indexOf(pt(t).position)>=0&&at(t)?vt(t):t;return rt(i)?e.filter((function(t){return rt(t)&&ut(t,i)&&"body"!==nt(t)})):[]}(t):[].concat(e),n=[].concat(s,[i]),o=n[0],r=n.reduce((function(e,i){var s=$t(t,i);return e.top=wt(s.top,e.top),e.right=Et(s.right,e.right),e.bottom=Et(s.bottom,e.bottom),e.left=wt(s.left,e.left),e}),$t(t,o));return r.width=r.right-r.left,r.height=r.bottom-r.top,r.x=r.left,r.y=r.top,r}(rt(v)?v:v.contextElement||mt(t.elements.popper),r,l),w=ht(_),E=zt({reference:w,element:b,strategy:"absolute",placement:n}),T=Ut(Object.assign({},b,E)),A="popper"===d?T:w,L={top:y.top-A.top+g.top,bottom:A.bottom-y.bottom+g.bottom,left:y.left-A.left+g.left,right:A.right-y.right+g.right},O=t.modifiersData.offset;if("popper"===d&&O){var k=O[n];Object.keys(L).forEach((function(t){var e=[Z,G].indexOf(t)>=0?1:-1,i=[Q,G].indexOf(t)>=0?"y":"x";L[t]+=k[i]*e}))}return L}function Yt(t,e){void 0===e&&(e={});var i=e,s=i.placement,n=i.boundary,o=i.rootBoundary,r=i.padding,a=i.flipVariations,l=i.allowedAutoPlacements,c=void 0===l?it:l,d=Ft(s),h=d?a?et:et.filter((function(t){return Ft(t)===d})):tt,f=h.filter((function(t){return c.indexOf(t)>=0}));0===f.length&&(f=h);var u=f.reduce((function(e,i){return e[i]=Kt(t,{placement:i,boundary:n,rootBoundary:o,padding:r})[dt(i)],e}),{});return Object.keys(u).sort((function(t,e){return u[t]-u[e]}))}var qt={name:"flip",enabled:!0,phase:"main",fn:function(t){var e=t.state,i=t.options,s=t.name;if(!e.modifiersData[s]._skip){for(var n=i.mainAxis,o=void 0===n||n,r=i.altAxis,a=void 0===r||r,l=i.fallbackPlacements,c=i.padding,d=i.boundary,h=i.rootBoundary,f=i.altBoundary,u=i.flipVariations,p=void 0===u||u,g=i.allowedAutoPlacements,m=e.options.placement,_=dt(m),b=l||(_!==m&&p?function(t){if("auto"===dt(t))return[];var e=Pt(t);return[Mt(t),e,Mt(e)]}(m):[Pt(m)]),v=[m].concat(b).reduce((function(t,i){return t.concat("auto"===dt(i)?Yt(e,{placement:i,boundary:d,rootBoundary:h,padding:c,flipVariations:p,allowedAutoPlacements:g}):i)}),[]),y=e.rects.reference,w=e.rects.popper,E=new Map,T=!0,A=v[0],L=0;L<v.length;L++){var O=v[L],k=dt(O),D="start"===Ft(O),x=[Q,G].indexOf(k)>=0,C=x?"width":"height",S=Kt(e,{placement:O,boundary:d,rootBoundary:h,altBoundary:f,padding:c}),N=x?D?Z:J:D?G:Q;y[C]>w[C]&&(N=Pt(N));var j=Pt(N),P=[];if(o&&P.push(S[k]<=0),a&&P.push(S[N]<=0,S[j]<=0),P.every((function(t){return t}))){A=O,T=!1;break}E.set(O,P)}if(T)for(var I=function(t){var e=v.find((function(e){var i=E.get(e);if(i)return i.slice(0,t).every((function(t){return t}))}));if(e)return A=e,"break"},M=p?3:1;M>0&&"break"!==I(M);M--);e.placement!==A&&(e.modifiersData[s]._skip=!0,e.placement=A,e.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function Vt(t,e,i){return void 0===i&&(i={x:0,y:0}),{top:t.top-e.height-i.y,right:t.right-e.width+i.x,bottom:t.bottom-e.height+i.y,left:t.left-e.width-i.x}}function Xt(t){return[Q,Z,G,J].some((function(e){return t[e]>=0}))}var Qt={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(t){var e=t.state,i=t.name,s=e.rects.reference,n=e.rects.popper,o=e.modifiersData.preventOverflow,r=Kt(e,{elementContext:"reference"}),a=Kt(e,{altBoundary:!0}),l=Vt(r,s),c=Vt(a,n,o),d=Xt(l),h=Xt(c);e.modifiersData[i]={referenceClippingOffsets:l,popperEscapeOffsets:c,isReferenceHidden:d,hasPopperEscaped:h},e.attributes.popper=Object.assign({},e.attributes.popper,{"data-popper-reference-hidden":d,"data-popper-escaped":h})}},Gt={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(t){var e=t.state,i=t.options,s=t.name,n=i.offset,o=void 0===n?[0,0]:n,r=it.reduce((function(t,i){return t[i]=function(t,e,i){var s=dt(t),n=[J,Q].indexOf(s)>=0?-1:1,o="function"==typeof i?i(Object.assign({},e,{placement:t})):i,r=o[0],a=o[1];return r=r||0,a=(a||0)*n,[J,Z].indexOf(s)>=0?{x:a,y:r}:{x:r,y:a}}(i,e.rects,o),t}),{}),a=r[e.placement],l=a.x,c=a.y;null!=e.modifiersData.popperOffsets&&(e.modifiersData.popperOffsets.x+=l,e.modifiersData.popperOffsets.y+=c),e.modifiersData[s]=r}},Zt={name:"popperOffsets",enabled:!0,phase:"read",fn:function(t){var e=t.state,i=t.name;e.modifiersData[i]=zt({reference:e.rects.reference,element:e.rects.popper,strategy:"absolute",placement:e.placement})},data:{}},Jt={name:"preventOverflow",enabled:!0,phase:"main",fn:function(t){var e=t.state,i=t.options,s=t.name,n=i.mainAxis,o=void 0===n||n,r=i.altAxis,a=void 0!==r&&r,l=i.boundary,c=i.rootBoundary,d=i.altBoundary,h=i.padding,f=i.tether,u=void 0===f||f,p=i.tetherOffset,g=void 0===p?0:p,m=Kt(e,{boundary:l,rootBoundary:c,padding:h,altBoundary:d}),_=dt(e.placement),b=Ft(e.placement),v=!b,y=yt(_),w="x"===y?"y":"x",E=e.modifiersData.popperOffsets,T=e.rects.reference,A=e.rects.popper,L="function"==typeof g?g(Object.assign({},e.rects,{placement:e.placement})):g,O={x:0,y:0};if(E){if(o||a){var k="y"===y?Q:J,D="y"===y?G:Z,x="y"===y?"height":"width",C=E[y],S=E[y]+m[k],N=E[y]-m[D],j=u?-A[x]/2:0,P="start"===b?T[x]:A[x],I="start"===b?-A[x]:-T[x],M=e.elements.arrow,R=u&&M?ft(M):{width:0,height:0},B=e.modifiersData["arrow#persistent"]?e.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},H=B[k],W=B[D],U=At(0,T[x],R[x]),$=v?T[x]/2-j-U-H-L:P-U-H-L,F=v?-T[x]/2+j+U+W+L:I+U+W+L,z=e.elements.arrow&&vt(e.elements.arrow),K=z?"y"===y?z.clientTop||0:z.clientLeft||0:0,Y=e.modifiersData.offset?e.modifiersData.offset[e.placement][y]:0,q=E[y]+$-Y-K,V=E[y]+F-Y;if(o){var X=At(u?Et(S,q):S,C,u?wt(N,V):N);E[y]=X,O[y]=X-C}if(a){var tt="x"===y?Q:J,et="x"===y?G:Z,it=E[w],st=it+m[tt],nt=it-m[et],ot=At(u?Et(st,q):st,it,u?wt(nt,V):nt);E[w]=ot,O[w]=ot-it}}e.modifiersData[s]=O}},requiresIfExists:["offset"]};function te(t,e,i){void 0===i&&(i=!1);var s,n,o=mt(e),r=ht(t),a=at(e),l={scrollLeft:0,scrollTop:0},c={x:0,y:0};return(a||!a&&!i)&&(("body"!==nt(e)||Ht(o))&&(l=(s=e)!==ot(s)&&at(s)?{scrollLeft:(n=s).scrollLeft,scrollTop:n.scrollTop}:Rt(s)),at(e)?((c=ht(e)).x+=e.clientLeft,c.y+=e.clientTop):o&&(c.x=Bt(o))),{x:r.left+l.scrollLeft-c.x,y:r.top+l.scrollTop-c.y,width:r.width,height:r.height}}var ee={placement:"bottom",modifiers:[],strategy:"absolute"};function ie(){for(var t=arguments.length,e=new Array(t),i=0;i<t;i++)e[i]=arguments[i];return!e.some((function(t){return!(t&&"function"==typeof t.getBoundingClientRect)}))}function se(t){void 0===t&&(t={});var e=t,i=e.defaultModifiers,s=void 0===i?[]:i,n=e.defaultOptions,o=void 0===n?ee:n;return function(t,e,i){void 0===i&&(i=o);var n,r,a={placement:"bottom",orderedModifiers:[],options:Object.assign({},ee,o),modifiersData:{},elements:{reference:t,popper:e},attributes:{},styles:{}},l=[],c=!1,d={state:a,setOptions:function(i){h(),a.options=Object.assign({},o,a.options,i),a.scrollParents={reference:rt(t)?Wt(t):t.contextElement?Wt(t.contextElement):[],popper:Wt(e)};var n,r,c=function(t){var e=function(t){var e=new Map,i=new Set,s=[];return t.forEach((function(t){e.set(t.name,t)})),t.forEach((function(t){i.has(t.name)||function t(n){i.add(n.name),[].concat(n.requires||[],n.requiresIfExists||[]).forEach((function(s){if(!i.has(s)){var n=e.get(s);n&&t(n)}})),s.push(n)}(t)})),s}(t);return st.reduce((function(t,i){return t.concat(e.filter((function(t){return t.phase===i})))}),[])}((n=[].concat(s,a.options.modifiers),r=n.reduce((function(t,e){var i=t[e.name];return t[e.name]=i?Object.assign({},i,e,{options:Object.assign({},i.options,e.options),data:Object.assign({},i.data,e.data)}):e,t}),{}),Object.keys(r).map((function(t){return r[t]}))));return a.orderedModifiers=c.filter((function(t){return t.enabled})),a.orderedModifiers.forEach((function(t){var e=t.name,i=t.options,s=void 0===i?{}:i,n=t.effect;if("function"==typeof n){var o=n({state:a,name:e,instance:d,options:s});l.push(o||function(){})}})),d.update()},forceUpdate:function(){if(!c){var t=a.elements,e=t.reference,i=t.popper;if(ie(e,i)){a.rects={reference:te(e,vt(i),"fixed"===a.options.strategy),popper:ft(i)},a.reset=!1,a.placement=a.options.placement,a.orderedModifiers.forEach((function(t){return a.modifiersData[t.name]=Object.assign({},t.data)}));for(var s=0;s<a.orderedModifiers.length;s++)if(!0!==a.reset){var n=a.orderedModifiers[s],o=n.fn,r=n.options,l=void 0===r?{}:r,h=n.name;"function"==typeof o&&(a=o({state:a,options:l,name:h,instance:d})||a)}else a.reset=!1,s=-1}}},update:(n=function(){return new Promise((function(t){d.forceUpdate(),t(a)}))},function(){return r||(r=new Promise((function(t){Promise.resolve().then((function(){r=void 0,t(n())}))}))),r}),destroy:function(){h(),c=!0}};if(!ie(t,e))return d;function h(){l.forEach((function(t){return t()})),l=[]}return d.setOptions(i).then((function(t){!c&&i.onFirstUpdate&&i.onFirstUpdate(t)})),d}}var ne=se(),oe=se({defaultModifiers:[Nt,Zt,Ct,ct]}),re=se({defaultModifiers:[Nt,Zt,Ct,ct,Gt,qt,Jt,kt,Qt]}),ae=Object.freeze({__proto__:null,popperGenerator:se,detectOverflow:Kt,createPopperBase:ne,createPopper:re,createPopperLite:oe,top:Q,bottom:G,right:Z,left:J,auto:"auto",basePlacements:tt,start:"start",end:"end",clippingParents:"clippingParents",viewport:"viewport",popper:"popper",reference:"reference",variationPlacements:et,placements:it,beforeRead:"beforeRead",read:"read",afterRead:"afterRead",beforeMain:"beforeMain",main:"main",afterMain:"afterMain",beforeWrite:"beforeWrite",write:"write",afterWrite:"afterWrite",modifierPhases:st,applyStyles:ct,arrow:kt,computeStyles:Ct,eventListeners:Nt,flip:qt,hide:Qt,offset:Gt,popperOffsets:Zt,preventOverflow:Jt});const le=new RegExp("ArrowUp|ArrowDown|Escape"),ce=g()?"top-end":"top-start",de=g()?"top-start":"top-end",he=g()?"bottom-end":"bottom-start",fe=g()?"bottom-start":"bottom-end",ue=g()?"left-start":"right-start",pe=g()?"right-start":"left-start",ge={offset:[0,2],boundary:"clippingParents",reference:"toggle",display:"dynamic",popperConfig:null},me={offset:"(array|string|function)",boundary:"(string|element)",reference:"(string|element|object)",display:"string",popperConfig:"(null|object|function)"};class _e extends j{constructor(t,e){super(t),this._popper=null,this._config=this._getConfig(e),this._menu=this._getMenuElement(),this._inNavbar=this._detectNavbar(),this._addEventListeners()}static get Default(){return ge}static get DefaultType(){return me}static get DATA_KEY(){return"bs.dropdown"}toggle(){if(this._element.disabled||this._element.classList.contains("disabled"))return;const t=this._element.classList.contains("show");_e.clearMenus(),t||this.show()}show(){if(this._element.disabled||this._element.classList.contains("disabled")||this._menu.classList.contains("show"))return;const t=_e.getParentFromElement(this._element),e={relatedTarget:this._element};if(!N.trigger(this._element,"show.bs.dropdown",e).defaultPrevented){if(this._inNavbar)B.setDataAttribute(this._menu,"popper","none");else{if(void 0===ae)throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");let e=this._element;"parent"===this._config.reference?e=t:r(this._config.reference)?(e=this._config.reference,void 0!==this._config.reference.jquery&&(e=this._config.reference[0])):"object"==typeof this._config.reference&&(e=this._config.reference);const i=this._getPopperConfig(),s=i.modifiers.find(t=>"applyStyles"===t.name&&!1===t.enabled);this._popper=re(e,this._menu,i),s&&B.setDataAttribute(this._menu,"popper","static")}"ontouchstart"in document.documentElement&&!t.closest(".navbar-nav")&&[].concat(...document.body.children).forEach(t=>N.on(t,"mouseover",null,(function(){}))),this._element.focus(),this._element.setAttribute("aria-expanded",!0),this._menu.classList.toggle("show"),this._element.classList.toggle("show"),N.trigger(this._element,"shown.bs.dropdown",e)}}hide(){if(this._element.disabled||this._element.classList.contains("disabled")||!this._menu.classList.contains("show"))return;const t={relatedTarget:this._element};N.trigger(this._element,"hide.bs.dropdown",t).defaultPrevented||(this._popper&&this._popper.destroy(),this._menu.classList.toggle("show"),this._element.classList.toggle("show"),B.removeDataAttribute(this._menu,"popper"),N.trigger(this._element,"hidden.bs.dropdown",t))}dispose(){N.off(this._element,".bs.dropdown"),this._menu=null,this._popper&&(this._popper.destroy(),this._popper=null),super.dispose()}update(){this._inNavbar=this._detectNavbar(),this._popper&&this._popper.update()}_addEventListeners(){N.on(this._element,"click.bs.dropdown",t=>{t.preventDefault(),this.toggle()})}_getConfig(t){if(t={...this.constructor.Default,...B.getDataAttributes(this._element),...t},l("dropdown",t,this.constructor.DefaultType),"object"==typeof t.reference&&!r(t.reference)&&"function"!=typeof t.reference.getBoundingClientRect)throw new TypeError("dropdown".toUpperCase()+': Option "reference" provided type "object" without a required "getBoundingClientRect" method.');return t}_getMenuElement(){return H.next(this._element,".dropdown-menu")[0]}_getPlacement(){const t=this._element.parentNode;if(t.classList.contains("dropend"))return ue;if(t.classList.contains("dropstart"))return pe;const e="end"===getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();return t.classList.contains("dropup")?e?de:ce:e?fe:he}_detectNavbar(){return null!==this._element.closest(".navbar")}_getOffset(){const{offset:t}=this._config;return"string"==typeof t?t.split(",").map(t=>Number.parseInt(t,10)):"function"==typeof t?e=>t(e,this._element):t}_getPopperConfig(){const t={placement:this._getPlacement(),modifiers:[{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"offset",options:{offset:this._getOffset()}}]};return"static"===this._config.display&&(t.modifiers=[{name:"applyStyles",enabled:!1}]),{...t,..."function"==typeof this._config.popperConfig?this._config.popperConfig(t):this._config.popperConfig}}static dropdownInterface(t,e){let i=b.get(t,"bs.dropdown");if(i||(i=new _e(t,"object"==typeof e?e:null)),"string"==typeof e){if(void 0===i[e])throw new TypeError(`No method named "${e}"`);i[e]()}}static jQueryInterface(t){return this.each((function(){_e.dropdownInterface(this,t)}))}static clearMenus(t){if(t){if(2===t.button||"keyup"===t.type&&"Tab"!==t.key)return;if(/input|select|textarea|form/i.test(t.target.tagName))return}const e=H.find('[data-bs-toggle="dropdown"]');for(let i=0,s=e.length;i<s;i++){const s=b.get(e[i],"bs.dropdown"),n={relatedTarget:e[i]};if(t&&"click"===t.type&&(n.clickEvent=t),!s)continue;const o=s._menu;if(e[i].classList.contains("show")){if(t){if([s._element].some(e=>t.composedPath().includes(e)))continue;if("keyup"===t.type&&"Tab"===t.key&&o.contains(t.target))continue}N.trigger(e[i],"hide.bs.dropdown",n).defaultPrevented||("ontouchstart"in document.documentElement&&[].concat(...document.body.children).forEach(t=>N.off(t,"mouseover",null,(function(){}))),e[i].setAttribute("aria-expanded","false"),s._popper&&s._popper.destroy(),o.classList.remove("show"),e[i].classList.remove("show"),B.removeDataAttribute(o,"popper"),N.trigger(e[i],"hidden.bs.dropdown",n))}}}static getParentFromElement(t){return s(t)||t.parentNode}static dataApiKeydownHandler(t){if(/input|textarea/i.test(t.target.tagName)?"Space"===t.key||"Escape"!==t.key&&("ArrowDown"!==t.key&&"ArrowUp"!==t.key||t.target.closest(".dropdown-menu")):!le.test(t.key))return;if(t.preventDefault(),t.stopPropagation(),this.disabled||this.classList.contains("disabled"))return;const e=_e.getParentFromElement(this),i=this.classList.contains("show");if("Escape"===t.key)return(this.matches('[data-bs-toggle="dropdown"]')?this:H.prev(this,'[data-bs-toggle="dropdown"]')[0]).focus(),void _e.clearMenus();if(!i&&("ArrowUp"===t.key||"ArrowDown"===t.key))return void(this.matches('[data-bs-toggle="dropdown"]')?this:H.prev(this,'[data-bs-toggle="dropdown"]')[0]).click();if(!i||"Space"===t.key)return void _e.clearMenus();const s=H.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",e).filter(c);if(!s.length)return;let n=s.indexOf(t.target);"ArrowUp"===t.key&&n>0&&n--,"ArrowDown"===t.key&&n<s.length-1&&n++,n=-1===n?0:n,s[n].focus()}}N.on(document,"keydown.bs.dropdown.data-api",'[data-bs-toggle="dropdown"]',_e.dataApiKeydownHandler),N.on(document,"keydown.bs.dropdown.data-api",".dropdown-menu",_e.dataApiKeydownHandler),N.on(document,"click.bs.dropdown.data-api",_e.clearMenus),N.on(document,"keyup.bs.dropdown.data-api",_e.clearMenus),N.on(document,"click.bs.dropdown.data-api",'[data-bs-toggle="dropdown"]',(function(t){t.preventDefault(),_e.dropdownInterface(this)})),m("dropdown",_e);const be={backdrop:!0,keyboard:!0,focus:!0},ve={backdrop:"(boolean|string)",keyboard:"boolean",focus:"boolean"};class ye extends j{constructor(t,e){super(t),this._config=this._getConfig(e),this._dialog=H.findOne(".modal-dialog",this._element),this._backdrop=null,this._isShown=!1,this._isBodyOverflowing=!1,this._ignoreBackdropClick=!1,this._isTransitioning=!1,this._scrollbarWidth=0}static get Default(){return be}static get DATA_KEY(){return"bs.modal"}toggle(t){return this._isShown?this.hide():this.show(t)}show(t){if(this._isShown||this._isTransitioning)return;this._isAnimated()&&(this._isTransitioning=!0);const e=N.trigger(this._element,"show.bs.modal",{relatedTarget:t});this._isShown||e.defaultPrevented||(this._isShown=!0,this._checkScrollbar(),this._setScrollbar(),this._adjustDialog(),this._setEscapeEvent(),this._setResizeEvent(),N.on(this._element,"click.dismiss.bs.modal",'[data-bs-dismiss="modal"]',t=>this.hide(t)),N.on(this._dialog,"mousedown.dismiss.bs.modal",()=>{N.one(this._element,"mouseup.dismiss.bs.modal",t=>{t.target===this._element&&(this._ignoreBackdropClick=!0)})}),this._showBackdrop(()=>this._showElement(t)))}hide(t){if(t&&t.preventDefault(),!this._isShown||this._isTransitioning)return;if(N.trigger(this._element,"hide.bs.modal").defaultPrevented)return;this._isShown=!1;const e=this._isAnimated();if(e&&(this._isTransitioning=!0),this._setEscapeEvent(),this._setResizeEvent(),N.off(document,"focusin.bs.modal"),this._element.classList.remove("show"),N.off(this._element,"click.dismiss.bs.modal"),N.off(this._dialog,"mousedown.dismiss.bs.modal"),e){const t=n(this._element);N.one(this._element,"transitionend",t=>this._hideModal(t)),a(this._element,t)}else this._hideModal()}dispose(){[window,this._element,this._dialog].forEach(t=>N.off(t,".bs.modal")),super.dispose(),N.off(document,"focusin.bs.modal"),this._config=null,this._dialog=null,this._backdrop=null,this._isShown=null,this._isBodyOverflowing=null,this._ignoreBackdropClick=null,this._isTransitioning=null,this._scrollbarWidth=null}handleUpdate(){this._adjustDialog()}_getConfig(t){return t={...be,...t},l("modal",t,ve),t}_showElement(t){const e=this._isAnimated(),i=H.findOne(".modal-body",this._dialog);this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE||document.body.appendChild(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.scrollTop=0,i&&(i.scrollTop=0),e&&u(this._element),this._element.classList.add("show"),this._config.focus&&this._enforceFocus();const s=()=>{this._config.focus&&this._element.focus(),this._isTransitioning=!1,N.trigger(this._element,"shown.bs.modal",{relatedTarget:t})};if(e){const t=n(this._dialog);N.one(this._dialog,"transitionend",s),a(this._dialog,t)}else s()}_enforceFocus(){N.off(document,"focusin.bs.modal"),N.on(document,"focusin.bs.modal",t=>{document===t.target||this._element===t.target||this._element.contains(t.target)||this._element.focus()})}_setEscapeEvent(){this._isShown?N.on(this._element,"keydown.dismiss.bs.modal",t=>{this._config.keyboard&&"Escape"===t.key?(t.preventDefault(),this.hide()):this._config.keyboard||"Escape"!==t.key||this._triggerBackdropTransition()}):N.off(this._element,"keydown.dismiss.bs.modal")}_setResizeEvent(){this._isShown?N.on(window,"resize.bs.modal",()=>this._adjustDialog()):N.off(window,"resize.bs.modal")}_hideModal(){this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._isTransitioning=!1,this._showBackdrop(()=>{document.body.classList.remove("modal-open"),this._resetAdjustments(),this._resetScrollbar(),N.trigger(this._element,"hidden.bs.modal")})}_removeBackdrop(){this._backdrop.parentNode.removeChild(this._backdrop),this._backdrop=null}_showBackdrop(t){const e=this._isAnimated();if(this._isShown&&this._config.backdrop){if(this._backdrop=document.createElement("div"),this._backdrop.className="modal-backdrop",e&&this._backdrop.classList.add("fade"),document.body.appendChild(this._backdrop),N.on(this._element,"click.dismiss.bs.modal",t=>{this._ignoreBackdropClick?this._ignoreBackdropClick=!1:t.target===t.currentTarget&&("static"===this._config.backdrop?this._triggerBackdropTransition():this.hide())}),e&&u(this._backdrop),this._backdrop.classList.add("show"),!e)return void t();const i=n(this._backdrop);N.one(this._backdrop,"transitionend",t),a(this._backdrop,i)}else if(!this._isShown&&this._backdrop){this._backdrop.classList.remove("show");const i=()=>{this._removeBackdrop(),t()};if(e){const t=n(this._backdrop);N.one(this._backdrop,"transitionend",i),a(this._backdrop,t)}else i()}else t()}_isAnimated(){return this._element.classList.contains("fade")}_triggerBackdropTransition(){if(N.trigger(this._element,"hidePrevented.bs.modal").defaultPrevented)return;const t=this._element.scrollHeight>document.documentElement.clientHeight;t||(this._element.style.overflowY="hidden"),this._element.classList.add("modal-static");const e=n(this._dialog);N.off(this._element,"transitionend"),N.one(this._element,"transitionend",()=>{this._element.classList.remove("modal-static"),t||(N.one(this._element,"transitionend",()=>{this._element.style.overflowY=""}),a(this._element,e))}),a(this._element,e),this._element.focus()}_adjustDialog(){const t=this._element.scrollHeight>document.documentElement.clientHeight;(!this._isBodyOverflowing&&t&&!g()||this._isBodyOverflowing&&!t&&g())&&(this._element.style.paddingLeft=this._scrollbarWidth+"px"),(this._isBodyOverflowing&&!t&&!g()||!this._isBodyOverflowing&&t&&g())&&(this._element.style.paddingRight=this._scrollbarWidth+"px")}_resetAdjustments(){this._element.style.paddingLeft="",this._element.style.paddingRight=""}_checkScrollbar(){const t=document.body.getBoundingClientRect();this._isBodyOverflowing=Math.round(t.left+t.right)<window.innerWidth,this._scrollbarWidth=this._getScrollbarWidth()}_setScrollbar(){this._isBodyOverflowing&&(this._setElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top","paddingRight",t=>t+this._scrollbarWidth),this._setElementAttributes(".sticky-top","marginRight",t=>t-this._scrollbarWidth),this._setElementAttributes("body","paddingRight",t=>t+this._scrollbarWidth)),document.body.classList.add("modal-open")}_setElementAttributes(t,e,i){H.find(t).forEach(t=>{if(t!==document.body&&window.innerWidth>t.clientWidth+this._scrollbarWidth)return;const s=t.style[e],n=window.getComputedStyle(t)[e];B.setDataAttribute(t,e,s),t.style[e]=i(Number.parseFloat(n))+"px"})}_resetScrollbar(){this._resetElementAttributes(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top","paddingRight"),this._resetElementAttributes(".sticky-top","marginRight"),this._resetElementAttributes("body","paddingRight")}_resetElementAttributes(t,e){H.find(t).forEach(t=>{const i=B.getDataAttribute(t,e);void 0===i&&t===document.body?t.style[e]="":(B.removeDataAttribute(t,e),t.style[e]=i)})}_getScrollbarWidth(){const t=document.createElement("div");t.className="modal-scrollbar-measure",document.body.appendChild(t);const e=t.getBoundingClientRect().width-t.clientWidth;return document.body.removeChild(t),e}static jQueryInterface(t,e){return this.each((function(){let i=b.get(this,"bs.modal");const s={...be,...B.getDataAttributes(this),..."object"==typeof t&&t?t:{}};if(i||(i=new ye(this,s)),"string"==typeof t){if(void 0===i[t])throw new TypeError(`No method named "${t}"`);i[t](e)}}))}}N.on(document,"click.bs.modal.data-api",'[data-bs-toggle="modal"]',(function(t){const e=s(this);"A"!==this.tagName&&"AREA"!==this.tagName||t.preventDefault(),N.one(e,"show.bs.modal",t=>{t.defaultPrevented||N.one(e,"hidden.bs.modal",()=>{c(this)&&this.focus()})});let i=b.get(e,"bs.modal");if(!i){const t={...B.getDataAttributes(e),...B.getDataAttributes(this)};i=new ye(e,t)}i.toggle(this)})),m("modal",ye);const we=()=>{const t=document.documentElement.clientWidth;return Math.abs(window.innerWidth-t)},Ee=(t,e,i)=>{const s=we();H.find(t).forEach(t=>{if(t!==document.body&&window.innerWidth>t.clientWidth+s)return;const n=t.style[e],o=window.getComputedStyle(t)[e];B.setDataAttribute(t,e,n),t.style[e]=i(Number.parseFloat(o))+"px"})},Te=(t,e)=>{H.find(t).forEach(t=>{const i=B.getDataAttribute(t,e);void 0===i&&t===document.body?t.style.removeProperty(e):(B.removeDataAttribute(t,e),t.style[e]=i)})},Ae={backdrop:!0,keyboard:!0,scroll:!1},Le={backdrop:"boolean",keyboard:"boolean",scroll:"boolean"};class Oe extends j{constructor(t,e){super(t),this._config=this._getConfig(e),this._isShown=!1,this._addEventListeners()}static get Default(){return Ae}static get DATA_KEY(){return"bs.offcanvas"}toggle(t){return this._isShown?this.hide():this.show(t)}show(t){this._isShown||N.trigger(this._element,"show.bs.offcanvas",{relatedTarget:t}).defaultPrevented||(this._isShown=!0,this._element.style.visibility="visible",this._config.backdrop&&document.body.classList.add("offcanvas-backdrop"),this._config.scroll||((t=we())=>{document.body.style.overflow="hidden",Ee(".fixed-top, .fixed-bottom, .is-fixed","paddingRight",e=>e+t),Ee(".sticky-top","marginRight",e=>e-t),Ee("body","paddingRight",e=>e+t)})(),this._element.classList.add("offcanvas-toggling"),this._element.removeAttribute("aria-hidden"),this._element.setAttribute("aria-modal",!0),this._element.setAttribute("role","dialog"),this._element.classList.add("show"),setTimeout(()=>{this._element.classList.remove("offcanvas-toggling"),N.trigger(this._element,"shown.bs.offcanvas",{relatedTarget:t}),this._enforceFocusOnElement(this._element)},n(this._element)))}hide(){this._isShown&&(N.trigger(this._element,"hide.bs.offcanvas").defaultPrevented||(this._element.classList.add("offcanvas-toggling"),N.off(document,"focusin.bs.offcanvas"),this._element.blur(),this._isShown=!1,this._element.classList.remove("show"),setTimeout(()=>{this._element.setAttribute("aria-hidden",!0),this._element.removeAttribute("aria-modal"),this._element.removeAttribute("role"),this._element.style.visibility="hidden",this._config.backdrop&&document.body.classList.remove("offcanvas-backdrop"),this._config.scroll||(document.body.style.overflow="auto",Te(".fixed-top, .fixed-bottom, .is-fixed","paddingRight"),Te(".sticky-top","marginRight"),Te("body","paddingRight")),N.trigger(this._element,"hidden.bs.offcanvas"),this._element.classList.remove("offcanvas-toggling")},n(this._element))))}_getConfig(t){return t={...Ae,...B.getDataAttributes(this._element),..."object"==typeof t?t:{}},l("offcanvas",t,Le),t}_enforceFocusOnElement(t){N.off(document,"focusin.bs.offcanvas"),N.on(document,"focusin.bs.offcanvas",e=>{document===e.target||t===e.target||t.contains(e.target)||t.focus()}),t.focus()}_addEventListeners(){N.on(this._element,"click.dismiss.bs.offcanvas",'[data-bs-dismiss="offcanvas"]',()=>this.hide()),N.on(document,"keydown",t=>{this._config.keyboard&&"Escape"===t.key&&this.hide()}),N.on(document,"click.bs.offcanvas.data-api",t=>{const e=H.findOne(i(t.target));this._element.contains(t.target)||e===this._element||this.hide()})}static jQueryInterface(t){return this.each((function(){const e=b.get(this,"bs.offcanvas")||new Oe(this,"object"==typeof t?t:{});if("string"==typeof t){if(void 0===e[t]||t.startsWith("_")||"constructor"===t)throw new TypeError(`No method named "${t}"`);e[t](this)}}))}}N.on(document,"click.bs.offcanvas.data-api",'[data-bs-toggle="offcanvas"]',(function(t){const e=s(this);if(["A","AREA"].includes(this.tagName)&&t.preventDefault(),d(this))return;N.one(e,"hidden.bs.offcanvas",()=>{c(this)&&this.focus()});const i=H.findOne(".offcanvas.show, .offcanvas-toggling");i&&i!==e||(b.get(e,"bs.offcanvas")||new Oe(e)).toggle(this)})),N.on(window,"load.bs.offcanvas.data-api",()=>{H.find(".offcanvas.show").forEach(t=>(b.get(t,"bs.offcanvas")||new Oe(t)).show())}),m("offcanvas",Oe);const ke=new Set(["background","cite","href","itemtype","longdesc","poster","src","xlink:href"]),De=/^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/i,xe=/^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,Ce=(t,e)=>{const i=t.nodeName.toLowerCase();if(e.includes(i))return!ke.has(i)||Boolean(De.test(t.nodeValue)||xe.test(t.nodeValue));const s=e.filter(t=>t instanceof RegExp);for(let t=0,e=s.length;t<e;t++)if(s[t].test(i))return!0;return!1};function Se(t,e,i){if(!t.length)return t;if(i&&"function"==typeof i)return i(t);const s=(new window.DOMParser).parseFromString(t,"text/html"),n=Object.keys(e),o=[].concat(...s.body.querySelectorAll("*"));for(let t=0,i=o.length;t<i;t++){const i=o[t],s=i.nodeName.toLowerCase();if(!n.includes(s)){i.parentNode.removeChild(i);continue}const r=[].concat(...i.attributes),a=[].concat(e["*"]||[],e[s]||[]);r.forEach(t=>{Ce(t,a)||i.removeAttribute(t.nodeName)})}return s.body.innerHTML}const Ne=new RegExp("(^|\\s)bs-tooltip\\S+","g"),je=new Set(["sanitize","allowList","sanitizeFn"]),Pe={animation:"boolean",template:"string",title:"(string|element|function)",trigger:"string",delay:"(number|object)",html:"boolean",selector:"(string|boolean)",placement:"(string|function)",offset:"(array|string|function)",container:"(string|element|boolean)",fallbackPlacements:"array",boundary:"(string|element)",customClass:"(string|function)",sanitize:"boolean",sanitizeFn:"(null|function)",allowList:"object",popperConfig:"(null|object|function)"},Ie={AUTO:"auto",TOP:"top",RIGHT:g()?"left":"right",BOTTOM:"bottom",LEFT:g()?"right":"left"},Me={animation:!0,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,selector:!1,placement:"top",offset:[0,0],container:!1,fallbackPlacements:["top","right","bottom","left"],boundary:"clippingParents",customClass:"",sanitize:!0,sanitizeFn:null,allowList:{"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]},popperConfig:null},Re={HIDE:"hide.bs.tooltip",HIDDEN:"hidden.bs.tooltip",SHOW:"show.bs.tooltip",SHOWN:"shown.bs.tooltip",INSERTED:"inserted.bs.tooltip",CLICK:"click.bs.tooltip",FOCUSIN:"focusin.bs.tooltip",FOCUSOUT:"focusout.bs.tooltip",MOUSEENTER:"mouseenter.bs.tooltip",MOUSELEAVE:"mouseleave.bs.tooltip"};class Be extends j{constructor(t,e){if(void 0===ae)throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");super(t),this._isEnabled=!0,this._timeout=0,this._hoverState="",this._activeTrigger={},this._popper=null,this.config=this._getConfig(e),this.tip=null,this._setListeners()}static get Default(){return Me}static get NAME(){return"tooltip"}static get DATA_KEY(){return"bs.tooltip"}static get Event(){return Re}static get EVENT_KEY(){return".bs.tooltip"}static get DefaultType(){return Pe}enable(){this._isEnabled=!0}disable(){this._isEnabled=!1}toggleEnabled(){this._isEnabled=!this._isEnabled}toggle(t){if(this._isEnabled)if(t){const e=this._initializeOnDelegatedTarget(t);e._activeTrigger.click=!e._activeTrigger.click,e._isWithActiveTrigger()?e._enter(null,e):e._leave(null,e)}else{if(this.getTipElement().classList.contains("show"))return void this._leave(null,this);this._enter(null,this)}}dispose(){clearTimeout(this._timeout),N.off(this._element,this.constructor.EVENT_KEY),N.off(this._element.closest(".modal"),"hide.bs.modal",this._hideModalHandler),this.tip&&this.tip.parentNode&&this.tip.parentNode.removeChild(this.tip),this._isEnabled=null,this._timeout=null,this._hoverState=null,this._activeTrigger=null,this._popper&&this._popper.destroy(),this._popper=null,this.config=null,this.tip=null,super.dispose()}show(){if("none"===this._element.style.display)throw new Error("Please use show on visible elements");if(!this.isWithContent()||!this._isEnabled)return;const e=N.trigger(this._element,this.constructor.Event.SHOW),i=h(this._element),s=null===i?this._element.ownerDocument.documentElement.contains(this._element):i.contains(this._element);if(e.defaultPrevented||!s)return;const o=this.getTipElement(),r=t(this.constructor.NAME);o.setAttribute("id",r),this._element.setAttribute("aria-describedby",r),this.setContent(),this.config.animation&&o.classList.add("fade");const l="function"==typeof this.config.placement?this.config.placement.call(this,o,this._element):this.config.placement,c=this._getAttachment(l);this._addAttachmentClass(c);const d=this._getContainer();b.set(o,this.constructor.DATA_KEY,this),this._element.ownerDocument.documentElement.contains(this.tip)||(d.appendChild(o),N.trigger(this._element,this.constructor.Event.INSERTED)),this._popper?this._popper.update():this._popper=re(this._element,o,this._getPopperConfig(c)),o.classList.add("show");const f="function"==typeof this.config.customClass?this.config.customClass():this.config.customClass;f&&o.classList.add(...f.split(" ")),"ontouchstart"in document.documentElement&&[].concat(...document.body.children).forEach(t=>{N.on(t,"mouseover",(function(){}))});const u=()=>{const t=this._hoverState;this._hoverState=null,N.trigger(this._element,this.constructor.Event.SHOWN),"out"===t&&this._leave(null,this)};if(this.tip.classList.contains("fade")){const t=n(this.tip);N.one(this.tip,"transitionend",u),a(this.tip,t)}else u()}hide(){if(!this._popper)return;const t=this.getTipElement(),e=()=>{this._isWithActiveTrigger()||("show"!==this._hoverState&&t.parentNode&&t.parentNode.removeChild(t),this._cleanTipClass(),this._element.removeAttribute("aria-describedby"),N.trigger(this._element,this.constructor.Event.HIDDEN),this._popper&&(this._popper.destroy(),this._popper=null))};if(!N.trigger(this._element,this.constructor.Event.HIDE).defaultPrevented){if(t.classList.remove("show"),"ontouchstart"in document.documentElement&&[].concat(...document.body.children).forEach(t=>N.off(t,"mouseover",f)),this._activeTrigger.click=!1,this._activeTrigger.focus=!1,this._activeTrigger.hover=!1,this.tip.classList.contains("fade")){const i=n(t);N.one(t,"transitionend",e),a(t,i)}else e();this._hoverState=""}}update(){null!==this._popper&&this._popper.update()}isWithContent(){return Boolean(this.getTitle())}getTipElement(){if(this.tip)return this.tip;const t=document.createElement("div");return t.innerHTML=this.config.template,this.tip=t.children[0],this.tip}setContent(){const t=this.getTipElement();this.setElementContent(H.findOne(".tooltip-inner",t),this.getTitle()),t.classList.remove("fade","show")}setElementContent(t,e){if(null!==t)return"object"==typeof e&&r(e)?(e.jquery&&(e=e[0]),void(this.config.html?e.parentNode!==t&&(t.innerHTML="",t.appendChild(e)):t.textContent=e.textContent)):void(this.config.html?(this.config.sanitize&&(e=Se(e,this.config.allowList,this.config.sanitizeFn)),t.innerHTML=e):t.textContent=e)}getTitle(){let t=this._element.getAttribute("data-bs-original-title");return t||(t="function"==typeof this.config.title?this.config.title.call(this._element):this.config.title),t}updateAttachment(t){return"right"===t?"end":"left"===t?"start":t}_initializeOnDelegatedTarget(t,e){const i=this.constructor.DATA_KEY;return(e=e||b.get(t.delegateTarget,i))||(e=new this.constructor(t.delegateTarget,this._getDelegateConfig()),b.set(t.delegateTarget,i,e)),e}_getOffset(){const{offset:t}=this.config;return"string"==typeof t?t.split(",").map(t=>Number.parseInt(t,10)):"function"==typeof t?e=>t(e,this._element):t}_getPopperConfig(t){const e={placement:t,modifiers:[{name:"flip",options:{altBoundary:!0,fallbackPlacements:this.config.fallbackPlacements}},{name:"offset",options:{offset:this._getOffset()}},{name:"preventOverflow",options:{boundary:this.config.boundary}},{name:"arrow",options:{element:`.${this.constructor.NAME}-arrow`}},{name:"onChange",enabled:!0,phase:"afterWrite",fn:t=>this._handlePopperPlacementChange(t)}],onFirstUpdate:t=>{t.options.placement!==t.placement&&this._handlePopperPlacementChange(t)}};return{...e,..."function"==typeof this.config.popperConfig?this.config.popperConfig(e):this.config.popperConfig}}_addAttachmentClass(t){this.getTipElement().classList.add("bs-tooltip-"+this.updateAttachment(t))}_getContainer(){return!1===this.config.container?document.body:r(this.config.container)?this.config.container:H.findOne(this.config.container)}_getAttachment(t){return Ie[t.toUpperCase()]}_setListeners(){this.config.trigger.split(" ").forEach(t=>{if("click"===t)N.on(this._element,this.constructor.Event.CLICK,this.config.selector,t=>this.toggle(t));else if("manual"!==t){const e="hover"===t?this.constructor.Event.MOUSEENTER:this.constructor.Event.FOCUSIN,i="hover"===t?this.constructor.Event.MOUSELEAVE:this.constructor.Event.FOCUSOUT;N.on(this._element,e,this.config.selector,t=>this._enter(t)),N.on(this._element,i,this.config.selector,t=>this._leave(t))}}),this._hideModalHandler=()=>{this._element&&this.hide()},N.on(this._element.closest(".modal"),"hide.bs.modal",this._hideModalHandler),this.config.selector?this.config={...this.config,trigger:"manual",selector:""}:this._fixTitle()}_fixTitle(){const t=this._element.getAttribute("title"),e=typeof this._element.getAttribute("data-bs-original-title");(t||"string"!==e)&&(this._element.setAttribute("data-bs-original-title",t||""),!t||this._element.getAttribute("aria-label")||this._element.textContent||this._element.setAttribute("aria-label",t),this._element.setAttribute("title",""))}_enter(t,e){e=this._initializeOnDelegatedTarget(t,e),t&&(e._activeTrigger["focusin"===t.type?"focus":"hover"]=!0),e.getTipElement().classList.contains("show")||"show"===e._hoverState?e._hoverState="show":(clearTimeout(e._timeout),e._hoverState="show",e.config.delay&&e.config.delay.show?e._timeout=setTimeout(()=>{"show"===e._hoverState&&e.show()},e.config.delay.show):e.show())}_leave(t,e){e=this._initializeOnDelegatedTarget(t,e),t&&(e._activeTrigger["focusout"===t.type?"focus":"hover"]=e._element.contains(t.relatedTarget)),e._isWithActiveTrigger()||(clearTimeout(e._timeout),e._hoverState="out",e.config.delay&&e.config.delay.hide?e._timeout=setTimeout(()=>{"out"===e._hoverState&&e.hide()},e.config.delay.hide):e.hide())}_isWithActiveTrigger(){for(const t in this._activeTrigger)if(this._activeTrigger[t])return!0;return!1}_getConfig(t){const e=B.getDataAttributes(this._element);return Object.keys(e).forEach(t=>{je.has(t)&&delete e[t]}),t&&"object"==typeof t.container&&t.container.jquery&&(t.container=t.container[0]),"number"==typeof(t={...this.constructor.Default,...e,..."object"==typeof t&&t?t:{}}).delay&&(t.delay={show:t.delay,hide:t.delay}),"number"==typeof t.title&&(t.title=t.title.toString()),"number"==typeof t.content&&(t.content=t.content.toString()),l("tooltip",t,this.constructor.DefaultType),t.sanitize&&(t.template=Se(t.template,t.allowList,t.sanitizeFn)),t}_getDelegateConfig(){const t={};if(this.config)for(const e in this.config)this.constructor.Default[e]!==this.config[e]&&(t[e]=this.config[e]);return t}_cleanTipClass(){const t=this.getTipElement(),e=t.getAttribute("class").match(Ne);null!==e&&e.length>0&&e.map(t=>t.trim()).forEach(e=>t.classList.remove(e))}_handlePopperPlacementChange(t){const{state:e}=t;e&&(this.tip=e.elements.popper,this._cleanTipClass(),this._addAttachmentClass(this._getAttachment(e.placement)))}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.tooltip");const i="object"==typeof t&&t;if((e||!/dispose|hide/.test(t))&&(e||(e=new Be(this,i)),"string"==typeof t)){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}m("tooltip",Be);const He=new RegExp("(^|\\s)bs-popover\\S+","g"),We={...Be.Default,placement:"right",offset:[0,8],trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'},Ue={...Be.DefaultType,content:"(string|element|function)"},$e={HIDE:"hide.bs.popover",HIDDEN:"hidden.bs.popover",SHOW:"show.bs.popover",SHOWN:"shown.bs.popover",INSERTED:"inserted.bs.popover",CLICK:"click.bs.popover",FOCUSIN:"focusin.bs.popover",FOCUSOUT:"focusout.bs.popover",MOUSEENTER:"mouseenter.bs.popover",MOUSELEAVE:"mouseleave.bs.popover"};class Fe extends Be{static get Default(){return We}static get NAME(){return"popover"}static get DATA_KEY(){return"bs.popover"}static get Event(){return $e}static get EVENT_KEY(){return".bs.popover"}static get DefaultType(){return Ue}isWithContent(){return this.getTitle()||this._getContent()}setContent(){const t=this.getTipElement();this.setElementContent(H.findOne(".popover-header",t),this.getTitle());let e=this._getContent();"function"==typeof e&&(e=e.call(this._element)),this.setElementContent(H.findOne(".popover-body",t),e),t.classList.remove("fade","show")}_addAttachmentClass(t){this.getTipElement().classList.add("bs-popover-"+this.updateAttachment(t))}_getContent(){return this._element.getAttribute("data-bs-content")||this.config.content}_cleanTipClass(){const t=this.getTipElement(),e=t.getAttribute("class").match(He);null!==e&&e.length>0&&e.map(t=>t.trim()).forEach(e=>t.classList.remove(e))}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.popover");const i="object"==typeof t?t:null;if((e||!/dispose|hide/.test(t))&&(e||(e=new Fe(this,i),b.set(this,"bs.popover",e)),"string"==typeof t)){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}m("popover",Fe);const ze={offset:10,method:"auto",target:""},Ke={offset:"number",method:"string",target:"(string|element)"};class Ye extends j{constructor(t,e){super(t),this._scrollElement="BODY"===this._element.tagName?window:this._element,this._config=this._getConfig(e),this._selector=`${this._config.target} .nav-link, ${this._config.target} .list-group-item, ${this._config.target} .dropdown-item`,this._offsets=[],this._targets=[],this._activeTarget=null,this._scrollHeight=0,N.on(this._scrollElement,"scroll.bs.scrollspy",()=>this._process()),this.refresh(),this._process()}static get Default(){return ze}static get DATA_KEY(){return"bs.scrollspy"}refresh(){const t=this._scrollElement===this._scrollElement.window?"offset":"position",e="auto"===this._config.method?t:this._config.method,s="position"===e?this._getScrollTop():0;this._offsets=[],this._targets=[],this._scrollHeight=this._getScrollHeight(),H.find(this._selector).map(t=>{const n=i(t),o=n?H.findOne(n):null;if(o){const t=o.getBoundingClientRect();if(t.width||t.height)return[B[e](o).top+s,n]}return null}).filter(t=>t).sort((t,e)=>t[0]-e[0]).forEach(t=>{this._offsets.push(t[0]),this._targets.push(t[1])})}dispose(){super.dispose(),N.off(this._scrollElement,".bs.scrollspy"),this._scrollElement=null,this._config=null,this._selector=null,this._offsets=null,this._targets=null,this._activeTarget=null,this._scrollHeight=null}_getConfig(e){if("string"!=typeof(e={...ze,..."object"==typeof e&&e?e:{}}).target&&r(e.target)){let{id:i}=e.target;i||(i=t("scrollspy"),e.target.id=i),e.target="#"+i}return l("scrollspy",e,Ke),e}_getScrollTop(){return this._scrollElement===window?this._scrollElement.pageYOffset:this._scrollElement.scrollTop}_getScrollHeight(){return this._scrollElement.scrollHeight||Math.max(document.body.scrollHeight,document.documentElement.scrollHeight)}_getOffsetHeight(){return this._scrollElement===window?window.innerHeight:this._scrollElement.getBoundingClientRect().height}_process(){const t=this._getScrollTop()+this._config.offset,e=this._getScrollHeight(),i=this._config.offset+e-this._getOffsetHeight();if(this._scrollHeight!==e&&this.refresh(),t>=i){const t=this._targets[this._targets.length-1];this._activeTarget!==t&&this._activate(t)}else{if(this._activeTarget&&t<this._offsets[0]&&this._offsets[0]>0)return this._activeTarget=null,void this._clear();for(let e=this._offsets.length;e--;)this._activeTarget!==this._targets[e]&&t>=this._offsets[e]&&(void 0===this._offsets[e+1]||t<this._offsets[e+1])&&this._activate(this._targets[e])}}_activate(t){this._activeTarget=t,this._clear();const e=this._selector.split(",").map(e=>`${e}[data-bs-target="${t}"],${e}[href="${t}"]`),i=H.findOne(e.join(","));i.classList.contains("dropdown-item")?(H.findOne(".dropdown-toggle",i.closest(".dropdown")).classList.add("active"),i.classList.add("active")):(i.classList.add("active"),H.parents(i,".nav, .list-group").forEach(t=>{H.prev(t,".nav-link, .list-group-item").forEach(t=>t.classList.add("active")),H.prev(t,".nav-item").forEach(t=>{H.children(t,".nav-link").forEach(t=>t.classList.add("active"))})})),N.trigger(this._scrollElement,"activate.bs.scrollspy",{relatedTarget:t})}_clear(){H.find(this._selector).filter(t=>t.classList.contains("active")).forEach(t=>t.classList.remove("active"))}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.scrollspy");if(e||(e=new Ye(this,"object"==typeof t&&t)),"string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}N.on(window,"load.bs.scrollspy.data-api",()=>{H.find('[data-bs-spy="scroll"]').forEach(t=>new Ye(t,B.getDataAttributes(t)))}),m("scrollspy",Ye);class qe extends j{static get DATA_KEY(){return"bs.tab"}show(){if(this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE&&this._element.classList.contains("active")||d(this._element))return;let t;const e=s(this._element),i=this._element.closest(".nav, .list-group");if(i){const e="UL"===i.nodeName||"OL"===i.nodeName?":scope > li > .active":".active";t=H.find(e,i),t=t[t.length-1]}const n=t?N.trigger(t,"hide.bs.tab",{relatedTarget:this._element}):null;if(N.trigger(this._element,"show.bs.tab",{relatedTarget:t}).defaultPrevented||null!==n&&n.defaultPrevented)return;this._activate(this._element,i);const o=()=>{N.trigger(t,"hidden.bs.tab",{relatedTarget:this._element}),N.trigger(this._element,"shown.bs.tab",{relatedTarget:t})};e?this._activate(e,e.parentNode,o):o()}_activate(t,e,i){const s=(!e||"UL"!==e.nodeName&&"OL"!==e.nodeName?H.children(e,".active"):H.find(":scope > li > .active",e))[0],o=i&&s&&s.classList.contains("fade"),r=()=>this._transitionComplete(t,s,i);if(s&&o){const t=n(s);s.classList.remove("show"),N.one(s,"transitionend",r),a(s,t)}else r()}_transitionComplete(t,e,i){if(e){e.classList.remove("active");const t=H.findOne(":scope > .dropdown-menu .active",e.parentNode);t&&t.classList.remove("active"),"tab"===e.getAttribute("role")&&e.setAttribute("aria-selected",!1)}t.classList.add("active"),"tab"===t.getAttribute("role")&&t.setAttribute("aria-selected",!0),u(t),t.classList.contains("fade")&&t.classList.add("show"),t.parentNode&&t.parentNode.classList.contains("dropdown-menu")&&(t.closest(".dropdown")&&H.find(".dropdown-toggle").forEach(t=>t.classList.add("active")),t.setAttribute("aria-expanded",!0)),i&&i()}static jQueryInterface(t){return this.each((function(){const e=b.get(this,"bs.tab")||new qe(this);if("string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t]()}}))}}N.on(document,"click.bs.tab.data-api",'[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]',(function(t){t.preventDefault(),(b.get(this,"bs.tab")||new qe(this)).show()})),m("tab",qe);const Ve={animation:"boolean",autohide:"boolean",delay:"number"},Xe={animation:!0,autohide:!0,delay:5e3};class Qe extends j{constructor(t,e){super(t),this._config=this._getConfig(e),this._timeout=null,this._setListeners()}static get DefaultType(){return Ve}static get Default(){return Xe}static get DATA_KEY(){return"bs.toast"}show(){if(N.trigger(this._element,"show.bs.toast").defaultPrevented)return;this._clearTimeout(),this._config.animation&&this._element.classList.add("fade");const t=()=>{this._element.classList.remove("showing"),this._element.classList.add("show"),N.trigger(this._element,"shown.bs.toast"),this._config.autohide&&(this._timeout=setTimeout(()=>{this.hide()},this._config.delay))};if(this._element.classList.remove("hide"),u(this._element),this._element.classList.add("showing"),this._config.animation){const e=n(this._element);N.one(this._element,"transitionend",t),a(this._element,e)}else t()}hide(){if(!this._element.classList.contains("show"))return;if(N.trigger(this._element,"hide.bs.toast").defaultPrevented)return;const t=()=>{this._element.classList.add("hide"),N.trigger(this._element,"hidden.bs.toast")};if(this._element.classList.remove("show"),this._config.animation){const e=n(this._element);N.one(this._element,"transitionend",t),a(this._element,e)}else t()}dispose(){this._clearTimeout(),this._element.classList.contains("show")&&this._element.classList.remove("show"),N.off(this._element,"click.dismiss.bs.toast"),super.dispose(),this._config=null}_getConfig(t){return t={...Xe,...B.getDataAttributes(this._element),..."object"==typeof t&&t?t:{}},l("toast",t,this.constructor.DefaultType),t}_setListeners(){N.on(this._element,"click.dismiss.bs.toast",'[data-bs-dismiss="toast"]',()=>this.hide())}_clearTimeout(){clearTimeout(this._timeout),this._timeout=null}static jQueryInterface(t){return this.each((function(){let e=b.get(this,"bs.toast");if(e||(e=new Qe(this,"object"==typeof t&&t)),"string"==typeof t){if(void 0===e[t])throw new TypeError(`No method named "${t}"`);e[t](this)}}))}}return m("toast",Qe),{Alert:P,Button:I,Carousel:Y,Collapse:X,Dropdown:_e,Modal:ye,Offcanvas:Oe,Popover:Fe,ScrollSpy:Ye,Tab:qe,Toast:Qe,Tooltip:Be}}));
    //# sourceMappingURL=bootstrap.bundle.min.js.map
</script>

<style>
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: arial, sans-serif;
}



.u-name {
	font-size: 20px;
	padding-left: 17px;
}

.u-name b {
	color: #127b8e;
}





.side-bar {
	width: 250px;
	background: #262931;
	min-height: 100vh;
	transition: 500ms width;
}

.body {
	display: flex;
}

.section-1 {
	width: 100%;
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.section-1 h1 {
	color: #fff;
	font-size: 60px;
}

.section-1 p {
	color: #127b8e;
	font-size: 20px;
	background: #fff;
	padding: 7px;
	border-radius: 5px;
}

.side-bar ul {
	margin-top: 20px;
	list-style: none;
}

.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 20px;
	transition: 500ms background;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.side-bar ul li:hover {
	background: #127b8e;
}

.side-bar ul li a {
	text-decoration: none;
	color: #eee;
	cursor: pointer;
	letter-spacing: 1px;
}

.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}

#navbtn {
	display: inline-block;
	margin-left: 70px;
	font-size: 20px;
	transition: 500ms color;
}

#checkbox {
	display: none;
}

#checkbox:checked~.body .side-bar {
	width: 60px;
}


#checkbox:checked~.body .side-bar a span {
	display: none;
}

body {
    font-family: Arial, sans-serif;
  }

 



  form img {
	width: 200px;
	border: 50%;
	border: 6px solid #AAA;
}

form div:first-child {
	align-items: center;
}

form input[type=file] {
	display: none;
}

form input[type=file] {
	background: #accdd8;
	color: white;
	padding: 6px 20px;
	cursor: pointer;
	border-radius: 3px;
}

form input {
	padding: 8px 20px;
	border: 1px solid #AAA;
	border-radius: 3px;
}

form button {
	padding: 8px 20px;
	border: 1px solid darkgreen;
	width: 50%;
	background: #36551F;
	color: white;
	border-radius: 4px;
	font-size: 10px;
}

form>div {
	margin-bottom: 20px;
	display: flex;
	flex-direction: column;
	gap: 3px;
}

.file-input {
	display: inline-block;
	position: relative;
	overflow: hidden;
	cursor: pointer;
	padding: 8px 20px;
	background-color: #4CAF50;
	color: #fff;
	border-radius: 4px;
	border: none;
	text-align: center;
  }
  
  .file-input input[type="file"] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
  }
  
  .file-input:hover {
	background-color: #45a049;
  }
  
  .file-input:active {
	background-color: #3c9039;
  }
  

</style>


</html>

