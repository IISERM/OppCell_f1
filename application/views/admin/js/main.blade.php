angular.module('oppapp',[])
.config(function($routeProvider)
{
    $routeProvider.
      when('/', {redirectTo:'/progs'}).
      when('/progs', {controller:c_progs, templateUrl:'{=URL::to('admin')=}/atemplates_progs'}).
      when('/scholarships', {controller:c_scholarships, templateUrl:'{=URL::to('admin')=}/atemplates_scholarships'}).
      when('/jobs', {controller:c_jobs, templateUrl:'{=URL::to('admin')=}/atemplates_jobs'}).
      otherwise({redirectTo:'/'});
})
.filter('oFilter', function() {
    return function(input,parameter) {
    	// alert("Starting Functionality");
    	var output={};
    	for(k in input)
    	{
    		var passed=true;
    		// alert(JSON.stringify(parameter));
    		for(j in parameter)
    		{
    			// alert(j + parameter[j]);
    			// alert(parameter[j]);
    			if(input[k][j]!=parameter[j])
    			{

    				passed=false;
    				// break;
    			}
    			else
    				output[k]=input[k];
    		}
    		// if(input[k].prog_id!='1')
    		if(passed==false)
    		// alert(JSON.stringify(field));
    		// alert(value);

    		// if(input[k][field]!=value)
    		{
    			// delete input[k];
    		}
    		
    	}
    	// alert(JSON.stringify(input));
        // $.each( input,parameter, function(k,v)
        // {
            // if( 'Adam' == v.name )
            // if(v.prog_id!='1')
                // delete input[k];
        // });
        // return input;
        return output;
    }
})
.filter('startFrom', function()
{
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
})
.factory('truthSource',function($http, $log)
{
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals
	//http://localhost/IISERM/elections/public
	var truth=
	{		
		progs:
			{
				fetch:{lnk:'/list'},
				add:{lnk:'/add'},
				remove:{lnk:'/del'},
				update:{lnk:'/update'},
				config:{basePath:'/prog'},
				data:{}
			},
		pbranches:
			{
				fetch:{lnk:'/list'},
				add:{lnk:'/add'},
				remove:{lnk:'/del'},
				update:{lnk:'/update'},
				config:{basePath:'/pbranch'},
				data:{}
			},
		locations:
			{
				fetch:{lnk:'/list'},
				add:{lnk:'/add'},
				remove:{lnk:'/del'},
				update:{lnk:'/update'},
				config:{basePath:'/location'},
				data:{}								
			},
		psubjects:
			{
				fetch:{lnk:'/list'},
				add:{lnk:'/add'},
				remove:{lnk:'/del'},
				update:{lnk:'/update'},
				config:{basePath:'/psub'},
				data:{}								
			},
		subjects:
			{
				fetch:{lnk:'/list'},
				add:{lnk:'/add'},
				remove:{lnk:'/del'},
				update:{lnk:'/update'},
				config:{basePath:'/subject'},
				data:{}								
			},
		func:
			{
				Fetch:{},Add:{},Remove:{},Update:{}
			},
		io:
		{
			state:
			{
				log:'OppCell Admin Panel Log\n',last:'',working:false
			},
			config:
			{
				basePath:"{=URL::base()=}",addIndexDotPHP:"/index.php"
			}
		},
		nav:
		{
			current:'Loading..',
			//clear text for select!
			clear_select:{progs:'Academic Programs',
							scholarships:'Scholarships',
							jobs:'Jobs'},
			select_classname:'current2',
			current_select:{progs:'',scholarships:'',jobs:''},
			Select:{}
		}
	}

	truth.func.Fetch=function(type,OnComplete)
	{
		truth.io.state.working=true;
		// alert(truth.io.config.basePath + truth[type].fetch.lnk + truth[type].config.basePath);
		$http.get(truth.io.config.basePath + truth[type].fetch.lnk + truth[type].config.basePath)
		.success(function(data)
		{
			$log.log(data);
			truth.io.state.last=data;
			truth[type].data=data;
			OnComplete(truth[type].data);
		})
		.error(function(data)
		{
			$log.error(data+' '+status);
			truth.io.state.last=data;
			OnComplete(truth[type].data);
		});

	}

	truth.func.Add=function(type,newData,OnComplete)
	{
		truth.io.state.working=true;
		alert(JSON.stringify(newData));
		$http.post(truth.io.config.basePath + truth[type].add.lnk + truth[type].config.basePath,newData)
		.success(function(data)
		{
			$log.log(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		})
		.error(function(data){
			$log.error(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		});
	}

	truth.func.Remove=function(type,id,OnComplete)
	{
		truth.io.state.working=true;
		alert(id);
		$http.post(truth.io.config.basePath + truth[type].add.lnk + truth[type].config.basePath,id)
		.success(function(data)
		{
			$log.log(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		})
		.error(function(data){
			$log.error(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		});
	}

	truth.func.Update=function(type,newData,OnComplete)
	{
		truth.io.state.working=true;

		var tData=newData;
		// tData.id=id;

		$http.post(truth.io.config.basePath + truth[type].update.lnk + truth[type].config.basePath,newData)
		.success(function(data)
		{
			$log.log(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		})
		.error(function(data){
			$log.error(data);
			truth.io.state.last=data;
			OnComplete(truth.io.state.last);
		});
	}

	truth.nav.Select=function(val)
	{
		for(var key in  truth.nav.current_select)
		{
			truth.nav.current_select[key]='none';
		}
		truth.nav.current_select[val]=truth.nav.select_classname;
		truth.nav.current=truth.nav.clear_select[val];
	}

	return truth;
});


function c_oppcell($scope,truthSource,$timeout)
{
	$scope.truthSource=truthSource;

	$scope.progs=
				{
					'1':{name:'IISc Winter School',link:'http://www.iisc.org/',comments:'This is the best in India apparently'}
					// '2':{name:'IIT Winter School',link:'http://www.iitb.ac.in/',comments:''}
				};
	$scope.progNew={name:'',link:'',comments:''};


	$scope.locations=
				{
					'':{name:'Country',parent_id:'',comments:''},
					'1':{name:'India',parent_id:'',comments:'Highly conservative. Dont go naked'},
					'2':{name:'Delhi',parent_id:'1',comments:'The Awesomest City'}
				};

	$scope.locations2=
				[
					{id:'1',name:'India',parent_id:'',comments:'Highly conservative. Dont go naked'},
					{id:'2',name:'Delhi',parent_id:'1',comments:'The Awesomest City'}
				];


	$scope.locationNew={name:'',parent_id:'',comments:''};

	$scope.pbranches2=
				[
					{id:'1',prog_id:'1',location_id:'1',link:'http://bambam.com',comments:'bam1'},
					{id:'2',prog_id:'2',location_id:'1',link:'http://bambam.com',comments:'bam1'},
					{id:'3',prog_id:'3',location_id:'1',link:'http://bambam.com',comments:'bam1'},
				];
	$scope.pbranches=
				{
					'1':{prog_id:'1',location_id:'1',link:'http://bambam1.com',comments:'bam1'},
					'3':{prog_id:'2',location_id:'2',link:'http://bambam2.com',comments:'bam2'},
					'2':{prog_id:'1',location_id:'2',link:'http://bambam3.com',comments:'bam3'}
				};
	$scope.pbranchNew={prog_id:'',location_id:'',link:'',comments:''};


	$scope.psubjects=
				{
					'1':{pbranch_id:'1',subject_id:'1'},
					'2':{pbranch_id:'1',subject_id:'2'},
					'3':{pbranch_id:'1',subject_id:'3'},
					'4':{pbranch_id:'2',subject_id:'1'},
					'5':{pbranch_id:'2',subject_id:'2'},
					'6':{pbranch_id:'2',subject_id:'3'}
				}
	$scope.psubjectNew={pbranch_id:'',subject_id:''};

	$scope.subjects=
				{
					'1':{name:'Quantum Physics',parent_id:'4',comments:'Awesome as it gets'},
					'2':{name:'Radio Astrophysics',parent_id:'4',comments:'Astrophysical Twise'},
					'3':{name:'String',parent_id:'4',comments:'Entaglement'},
					'4':{name:'Physics',parent_id:''}
				}
	$scope.subjectNew={name:'',parent_id:'',comments:''};


	//These are functions you shouldn't need to change at all! They should infact go into some
	//library, but for now are stuck with the controller
	{
		$scope.Update=function(type,obj,autoRefresh)
		{
			// $scope.Refresh(type);		
				// truthSource.prog.update.Now(obj,function(val){
				truthSource.func.Update(type,obj,function(val){
					$scope.Refresh(type);
				});
					// $scope.$apply();
					// RefreshHelp
					// if(autoRefresh==true)

						// //truthSource[type].fetch.Now(function(val){
							// //RefreshHelp(val,'progs');
							// alert("Hey! This works :)");
						// //});
					
				// });
		}

		$scope.Add=function(type,newData,autoRefresh)
		{
			if(arguments.length==4)
			{
				// alert("wow");
				// alert(arguments[3]);
				for(key in arguments[3])
				{
					newData[key]=arguments[3][key];
				}
			}
			// else
			{
				truthSource.func.Add(type,newData,function(val)
				{
					// $scope.$apply();
					// alert(JSON.stringify(val, null, 4));
					$scope.Refresh(type);
					if(val==1)
					{
						for(key in newData)
						{
							newData[key]='';
						}					
					}
				});
			}
		}

		$scope.Remove=function(type,id,autoRefresh)
		{
			truthSource.func.Remove(type,id,function(val){
				$scope.$apply();
				alert(JSON.stringify(val, null, 4));

				// $scope.Refresh(type);
			});
		}

		$scope.Refresh=function(type){
			truthSource.func.Fetch(type,function(val){
				$scope.$apply();
				$scope.updatingInterface=true;
				$scope.$apply();
				$scope[type]=val;
				$scope.updatingInterface=false;
				$scope.$apply();			
			});		
		}
	}

	//INITIAL REFRESH
	{
		$timeout(function(){
			$scope.init=0;
			for(key in truthSource)
			{
				if((key!='func') && (key!='io') && (key!='nav'))
				{
					$scope.Refresh(key);					
				}
			}
		},1000);
	}	

}

function c_progs($scope,truthSource,$timeout)
{
	truthSource.nav.Select('progs');
	$scope.truthSource=truthSource;

	$scope.AddBranch=function(type,newData,progId,autoRefresh)
	{
		var tData=newData;
		tData.prog=progId;
		$scope.Add(type,tData,autoRefresh);
	}
}

function c_scholarships($scope,truthSource,$timeout)
{
	// truthSource.nav.current_select=['','current',''];
	truthSource.nav.Select('scholarships');
	// $scope.$apply();
	$scope.truthSource=truthSource;
}

function c_jobs($scope,truthSource,$timeout)
{
	// truthSource.nav.current_select=['','current',''];
	truthSource.nav.Select('jobs');
	// $scope.$apply();
	$scope.truthSource=truthSource;
}
