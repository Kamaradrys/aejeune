<div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Nom</th>
                                                <th>Emails</th>
                                                <th>Role</th>
                                                {{-- <th>Agences</th> --}}
                                                {{-- <th>Dates</th> --}}
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                              {{--   <td>{{ date_format($user->created_at, 'd/m/Y').' à '.date_format($user->created_at, 'H:i') }}</td> --}}
                                                <td>
                                                <a href="{{ route('users.destroy',$user->id) }}" class="bg-red-700  px-2 rounded text-white py-2"> <i class="fa fa-trash"></i></a>
                                                <a href="{{ route('users.edit',$user->id) }}" class="bg-gray-700  px-2 rounded text-white py-2"> <i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> 