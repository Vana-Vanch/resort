
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
   
   
</head>
<body class="bg-gradient">  
    @include('inc.navbar')
    
    
   
    <div class="container thuziak">
            <div class="row mt-5">
                <div class="col-md-6 mt-3">
                    <div class="w-75"> 
                        <canvas id="myChart"></canvas>
                    </div>
                  
                </div>
                <div class="col-md-6 mt-3">
                    <table class="table table-striped table-light table-hover">
                        <thead>
                            <tr>
                        
                              <th scope="col">Name</th>
                              <th scope="col">Price</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($resorts as $resort)
                                  
                              
                            <tr>
                         
                              <td>{{ $resort->title }}</td>
                              <td>{{ $resort->price }}</td>
                              <td>{{ $resort->contact }}</td>
                              <td><form action="{{ route('resort.destroy', $resort) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" >      
                            </form></td>
                            </tr>
                            @endforeach
                 
                          </tbody>
                      </table>
                      <a href="{{ route('addresort') }}" class="btn btn-success">Add New Resort</a>
                </div>
            </div>

            <div class="container thuziak">
                <div class="row mt-4">
                    <div class="col-md-6 mt-3 ">
                        <table class="table table-success table-secondary table-hover">
                            <thead>
                                <tr>
                            
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($users as $user)
                                      
                                  
                                <tr>
                             
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>@if($user->isAdmin==1)
                                    Admin
                                    @else
                                    User
                                    @endif
                                </td>
                                  <td>
                                      @if(auth()->user()->id == $user->id)
                                      ---
                                      @else
                                    <form action="{{ route('user.destroy' , $user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" >      
                                </form>@endif
                              </td>
                                </tr>
                                @endforeach
                     
                              </tbody>
                          </table>
                    </div>
             
                <div class="col-md-6 mt-3 ">
                    <table class="table table-striped table-secondary table-hover">
                        <thead>
                            <tr>
                        
                              <th scope="col">Name</th>
                              <th scope="col">Resort</th>
                              <th scope="col">Contact</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($bookings as $booking)
                                  
                              
                            <tr>
                         
                              <td>{{ $booking->name }}</td>
                              <td>{{ $booking->resortName }}</td>
                              <td>{{ $booking->contact }}</td>
                              <td><form action="    " method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" >      
                            </form></td>
                            </tr>
                            @endforeach
                 
                          </tbody>
                      </table>
                </div>
            </div>
            </div>
            </div>
    </div>

    @include('inc.footer')
    {{-- @include('inc.footer') --}}
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('font/js/all.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('chart.js/dist/chart.js') }}"></script>
    <script>
               var name = <?php echo $names; ?>;
                  var nums = <?php echo $nums; ?>; 
                var chartname = name.split(',');
               
           
                let myChart = document.getElementById('myChart').getContext('2d');
                let massChart = new Chart(myChart, {
                type:'bar', 
            data:{
                labels: chartname,
                datasets:[{
                    label:'Bookings',
                    data:nums,
                    backgroundColor: 'BLUE',
                    borderColor:' white',
                    color: '#FFFFFF',

                }]
            },
            options:{
                plugins:{
                    legend:{
                        labels:{
                            font:{
                                size:14,
                            }
                        }
                    }
                }
            }
        });
                var names = document.getElementById('names').innerHTML;
                console.log(names);

</script>
</body>
</html>
