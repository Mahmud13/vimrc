Vim�UnDo� ���fj׈ɼ�̓��j/���-�xn�$��   n   <        $permission->group = $request->input('description');   e   .      /       /   /   /    X1SH    _�                     	       ����                                                                                                                                                                                                                                                                                                                            	          	          v       W�"k    �      
   T      use App\Models\Permission;5�_�                       B    ����                                                                                                                                                                                                                                                                                                                                                             X0�=    �         T      O        $permissions = Permission::orderBy('display_name','ASC')->paginate(10);5�_�                       V    ����                                                                                                                                                                                                                                                                                                                                                             X0�O    �         U              �         T    5�_�                       W    ����                                                                                                                                                                                                                                                                                                                               b          W       v   W    X0�s    �         U      d        $permissions = Permission::orderBy('display_name','ASC')->groupBy('category')->paginate(10);5�_�                       U    ����                                                                                                                                                                                                                                                                                                                               U          [       v   [    X0��    �         U      ]        $permissions = Permission::orderBy('display_name','ASC')->groupBy('category')->get();5�_�                       U    ����                                                                                                                                                                                                                                                                                                                               U          [       v   [    X0��     �         U      V        $permissions = Permission::orderBy('display_name','ASC')->groupBy('category');5�_�                       @    ����                                                                                                                                                                                                                                                                                                                               T          @       v   @    X0��     �         U      ]        $permissions = Permission::orderBy('display_name','ASC')->groupBy('category')->get();5�_�      	                 F    ����                                                                                                                                                                                                                                                                                                                               T          @       v   @    X0��    �         U      H        $permissions = Permission::orderBy('display_name','ASC')->get();�         U    5�_�      
           	      \    ����                                                                                                                                                                                                                                                                                                                               T          @       v   @    X0�      �         U      ]        $permissions = Permission::orderBy('display_name','ASC')->get()->groupBy('category');5�_�   	              
      ]    ����                                                                                                                                                                                                                                                                                                                               T          @       v   @    X0�    �         U      ^        $permissions = Permission::orderBy('display_name','ASC')->get()->groupBy('category')-;5�_�   
                    B    ����                                                                                                                                                                                                                                                                                                                               H          B       v   B    X0�%     �         U      k        $permissions = Permission::orderBy('display_name','ASC')->get()->groupBy('category')->paginate(10);5�_�                       @    ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0�     �         U      d        $permissions = Permission::orderBy('display_name','ASC')->groupBy('category')->paginate(10);5�_�                       M    ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0�   	 �         U      O        $permissions = Permission::orderBy('display_name','ASC')->paginate(10);�         U    5�_�                       #    ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0��   
 �         U      d        $permissions = Permission::orderBy('display_name','ASC')->paginate(10)->groupBy('category');5�_�                           ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0�Y    �                        dd($permissions);5�_�                       	    ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0�l     �         T      y        $permissions = Permission::orderBy('category')->orderBy('display_name','ASC')->paginate(10)->groupBy('category');5�_�                       ;    ����                                                                                                                                                                                                                                                                                                                               @          T       v   T    X0�r    �         T      I        return view('dashboard.permissions.index',compact('permissions'))5�_�                       T    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0�v    �         T      x        $categories = Permission::orderBy('category')->orderBy('display_name','ASC')->paginate(10)->groupBy('category');5�_�                           ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0�~     �                ?            ->with('i', ($request->input('page', 1) - 1) * 10);5�_�                       H    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0��    �         S      H        return view('dashboard.permissions.index',compact('categories'))5�_�                       H    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0��    �         T              �         S    5�_�                       V    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0��    �         T      j        $categories = Permission::orderBy('category')->orderBy('display_name','ASC')->groupBy('category');5�_�                           ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X0�     �                        dd($categories);5�_�                       +    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X14}     �         S      q        $categories = Permission::orderBy('category')->orderBy('display_name','ASC')->get()->groupBy('category');5�_�                       c    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X14�     �         S      n        $categories = Permission::orderBy('group')->orderBy('display_name','ASC')->get()->groupBy('category');5�_�                       ;    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X14�     �         S      I        return view('dashboard.permissions.index',compact('categories'));5�_�                       	    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X14�     �         S      k        $categories = Permission::orderBy('group')->orderBy('display_name','ASC')->get()->groupBy('group');5�_�                           ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X14�    �         S      f        $group = Permission::orderBy('group')->orderBy('display_name','ASC')->get()->groupBy('group');5�_�                    .       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1N�    �   .   0   T                  �   .   0   S    5�_�                    5   !    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1N�    �   5   7   U              �   5   7   T    5�_�                     T        ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Qb     �   T   V   V          �   T   V   U    5�_�      !               T        ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   T   s   V    �   T   U   V    5�_�       "           !   _       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   _   a   t    �   _   `   t    5�_�   !   #           "   `       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�    �   _   a   u      )            'display_name' => 'required',5�_�   "   $           #   d       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   c   e   u               $role = Role::find($id);5�_�   #   %           $   f       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   f   h   u    �   f   g   u    5�_�   $   &           %   g       ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   f   h   v      <        $role->description = $request->input('description');5�_�   %   '           &   d   	    ����                                                                                                                                                                                                                                                                                                                               T          a       v   a    X1Q�     �   c   e   v      &        $role = Permission::find($id);5�_�   &   (           '   e   	    ����                                                                                                                                                                                                                                                                                                                            e   	       h                 X1Q�     �   d   f   v      :        $->display_name = $request->input('display_name');�   d   i   v      >        $role->display_name = $request->input('display_name');   <        $role->description = $request->input('description');   6        $role->group = $request->input('description');           $role->save();5�_�   '   )           (   g       ����                                                                                                                                                                                                                                                                                                                            e   	       h                 X1Q�     �   f   g          <        $permission->group = $request->input('description');5�_�   (   *           )   e       ����                                                                                                                                                                                                                                                                                                                            e   	       g                 X1Q�    �   e   g   u    �   e   f   u    5�_�   )   +           *   j        ����                                                                                                                                                                                                                                                                                                                            j          o          V       X1R     �   i   j          J        DB::table("permission_role")->where("permission_role.role_id",$id)               ->delete();       D        foreach ($request->input('permissions') as $key => $value) {   ,            $role->attachPermission($value);   	        }5�_�   *   ,           +   j        ����                                                                                                                                                                                                                                                                                                                            j          j          V       X1R     �   i   j           5�_�   +   -           ,   j   "    ����                                                                                                                                                                                                                                                                                                                            j          j          V       X1R     �   i   k   o      /        return redirect()->route('roles.index')5�_�   ,   .           -   k   *    ����                                                                                                                                                                                                                                                                                                                            j          j          V       X1R    �   j   l   o      F                        ->with('success','Role updated successfully');5�_�   -   /           .   b       ����                                                                                                                                                                                                                                                                                                                            j          j          V       X1RI    �   a   b          (            'permissions' => 'required',5�_�   .               /   e   .    ����                                                                                                                                                                                                                                                                                                                            i          i          V       X1SG    �   d   f   n      <        $permission->group = $request->input('description');5��