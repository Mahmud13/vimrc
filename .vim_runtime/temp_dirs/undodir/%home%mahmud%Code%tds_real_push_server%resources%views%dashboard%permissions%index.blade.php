Vim�UnDo� �\�F4�(��c��j#ҁ���4��   -   �                        <a href="{{ route('permissions.edit',$permission->id) }}"><button class="btn btn-primary" {{ $permission->name=='admin'? 'disabled': ''}} >Edit</button></a>      r                       W�$a    _�                             ����                                                                                                                                                                                                                                                                                                                                                             W�#�     �                   �               5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             W�#�     �                  5�_�                            ����                                                                                                                                                                                                                                                                                                                                                             W�#�     �         2      (@section('page-title', 'List of roles') 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                V       W�#�     �                *                    <th>Permission(s)</th>5�_�                       "    ����                                                                                                                                                                                                                                                                                                                                                V       W�#�     �         1      =                    @permission(['role-edit', 'role-delete'])5�_�                       5    ����                                                                                                                                                                                                                                                                                                                                                V       W�$    �         1      C                    @permission(['permission-edit', 'role-delete'])5�_�      	                     ����                                                                                                                                                                                                                                                                                                                                                V       W�$     �         1      .            @foreach ($roles as $key => $role)5�_�      
           	      /    ����                                                                                                                                                                                                                                                                                                                                                V       W�$     �         1      4            @foreach ($permissions as $key => $role)5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                                                V       W�$3     �   .   0          	{!! $roles->render() !!}�   %   '                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger', $role->name == 'admin' ? 'disabled' : ""]) !!}�   $   &          �                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}�   #   %          2                        @permission('role-delete')�   !   #          �                        <a href="{{ route('roles.edit',$role->id) }}"><button class="btn btn-primary" {{ $role->name=='admin'? 'disabled': ''}} >Edit</button></a>�       "          0                        @permission('role-edit')�                I                        {{ $role->perms->implode('display_name', ', ') }}�                5                    <td>{{ $role->description }}</td>�                6                    <td>{{ $role->display_name }}</td>5�_�   
                         ����                                                                                                                                                                                                                                                                                                                                                V   !    W�$D     �                                    <td>   O                        {{ $permission->perms->implode('display_name', ', ') }}                       </td>                   5�_�                       r    ����                                                                                                                                                                                                                                                                                                                               �          r       v   r    W�$]     �         -      �                        <a href="{{ route('permissions.edit',$permission->id) }}"><button class="btn btn-primary" {{ $permission->name=='admin'? 'disabled': ''}} >Edit</button></a>5�_�                        q    ����                                                                                                                                                                                                                                                                                                                               �          r       v   r    W�$`    �         -      �                        <a href="{{ route('permissions.edit',$permission->id) }}"><button class="btn btn-primary" >Edit</button></a>5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V       W�#�     �              5��