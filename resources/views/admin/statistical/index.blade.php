@extends('layouts.admin')
@section('title')
    <title>Thống kê</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/chart.css')}}">

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Thống kê</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Thống kê</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12 card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Đơn hàng</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">{{$sum}} đơn</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> {{$percent}}
                    </span>
                                        <span class="text-muted">Kể từ năm trước</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <div id="chart-container"></div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Doanh thu</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">{{number_format($sumFee)}} VNĐ</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fa fa-arrow-up"></i> {{$percentFee}}
                    </span>
                                        <span class="text-muted">Kể từ tuần trước</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <div id="sale-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection
@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var datas= {{$datas}};
        var dataBefore= {{$dataBefore}};
        var fee= {{$fee}};
        var feeBefore= {{$feeBefore}};
        Highcharts.chart('chart-container',{
            title:{
                text: 'Đơn hàng được tạo theo năm'
            },
            xAxis:{
                categories:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis:{
                title:{
                    text:'Số lượng'
                }
            },
            legend:{
                layout:'vertical',
                align:'right',
                verticalAlign:'middle'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name:'Năm nay',
                data: datas,
            },
                {
                    name:'Năm trước',
                    data: dataBefore,
                }
            ],
            responsive:{
                rule:[{
                    condition:{
                        maxWidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout:'horizontal',
                            align:'center',
                            verticalAlign:'bottom'
                        }
                    }
                }]
            }
        });
        Highcharts.chart('sale-chart',{
            chart: {
                type: 'column'
            },
            title:{
                text: 'Doanh thu theo tuần'
            },
            xAxis:{
                categories:['Mon','Tue','Wes','Thur','Fri','Sat','Sun'],
                crosshair: true,
            },
            yAxis:{
                title:{
                    text:'Doanh thu'
                }
            },
            plotOptions:{
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series:[{
                name:'Tuần này',
                data: fee,
            },
                {
                    name:'Tuần trước',
                    data: feeBefore,
                }
            ],
            responsive:{
                rule:[{
                    condition:{
                        maxWidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout:'horizontal',
                            align:'center',
                            verticalAlign:'bottom'
                        }
                    }
                }]
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
        })
    </script>
@endsection

