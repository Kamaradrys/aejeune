<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Nombre agent</th>
                                                <th>Date création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Nombre agent</th>
                                                <th>Date création</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot> --}}
                                        <tbody>
                                        @foreach($agences as $agence)
                                            <tr>
                                                <td>{{ $agence->id }}</td>
                                                <td>{{ $agence->name }}</td>
                                                <td>63</td>
                                                <td>{{ date_format($agence->created_at,'d/m/Y') }}</td>
                                                <td>
                                                    <a href="{{ route('agence.delete',$agence->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                    <a href="{{ route('agence.edit',$agence->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                    
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 