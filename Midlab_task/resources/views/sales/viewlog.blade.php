<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
    
    
                <div class="card-header d-flex justify-content-between">
                  
                  <a href="{{ route('Sales.sold.download') }}" class="card-title ">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    Download Sales Report
                  </a>
                  <a href="{{ route('Sales.pdf.pending.download') }}" class="card-title ">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    Download Pending Log
                  </a>
                  <a href="{{ route('Sales.excel.upload') }}" class="card-title">
                    <i class="fas fa-upload nav-icon"></i>
                    Upload Data With Excel
                  </a>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-hover" >
                    <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Payment Type </th>
                        <th>Status </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($Physicalstore as $key => $data)
                            <tr>
                                <th>{{ $data->id }}</th>
                                <td>{{ $data->customer_name }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->product_id }}</td>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->unit_prics }}</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->total_price }}</td>
                                <td>{{ $data->payment_type }}</td>
                                <td>{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>