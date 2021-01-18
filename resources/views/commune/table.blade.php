<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Nombre d'agence</th>
                                                <th>Date création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($communes as $commune)
                                            <tr>
                                                <td>{{ $commune->id }}</td>
                                                <td>{{ $commune->name }}</td>
                                                <td>63</td>
                                                <td>{{ date_format($commune->created_at,'d/m/Y')  }}</td>
                                                <td>
                                                    <a href="{{ route('commune.delete',$commune->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                    <a href="{{ route('commune.edit',$commune->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>                                                    
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 