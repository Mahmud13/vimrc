Vim�UnDo� E�[�¦��Ȕ��N�(Hu`f��T��@�      G            $table->boolean('obsolete')->default(0)->after('password');      '                       W��   
 _�                             ����                                                                                                                                                                                                                                                                                                                                                             W⏙     �             �             5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏙     �                
        //5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏢     �      !       �             5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏣    �                
        //5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏩    �         !      <        Schema::table('users', function (Blueprint $table) {5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏲     �         !      G            $table->boolean('verified')->default(0)->after('password');5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             W⏼    �                _            $table->timestamp('verified_at')->nullable(true)->default(null)->after('verified');5�_�      	                     ����                                                                                                                                                                                                                                                                                                                                                             W��     �                .            $table->dropColumn('verified_at');5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                                                             W��    �               <        Schema::table('users', function (Blueprint $table) {5�_�   	              
           ����                                                                                                                                                                                                                                                                                                                                                             W��    �               +            $table->dropColumn('verified');5�_�   
                    '    ����                                                                                                                                                                                                                                                                                                                               '          E       v   E    W�N    �               G            $table->boolean('obsolete')->default(0)->after('password');5�_�                       '    ����                                                                                                                                                                                                                                                                                                                               '          E       v   E    W�s   	 �               (            $table->boolean('obsolete');5�_�                        1    ����                                                                                                                                                                                                                                                                                                                                          5       V   5    W��   
 �               7            $table->boolean('obsolete')->default(true);5��