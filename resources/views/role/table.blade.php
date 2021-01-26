<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Roles</th>
                                                <th>Dates</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ date_format($role->created_at, 'd/m/Y').' à '.date_format($role->created_at, 'H:i') }}</td>
                                                <td>
                                                <a href="{{ route('role.delete',$role->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('role.edit',$role->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                        

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 