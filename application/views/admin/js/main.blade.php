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
			truth[type].data=data;
			OnComplete(truth[type].data);
		})
		.error(function(data)
		{
			$log.error(data+' '+status);
			OnComplete(truth[type].data);
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
}

function c_progs($scope,truthSource,$timeout)
{
	truthSource.nav.Select('progs');
	$scope.truthSource=truthSource;

	$scope.progs=
				{
					'1':{name:'IISc Winter School',link:'http://www.iisc.org/',comments:'This is the best in India apparently'},
					'2':{name:'IIT Winter School',link:'http://www.iitb.ac.in/',comments:''}
				};
	$scope.progNew={name:'',link:'',comments:''};


	$scope.pbranches=
				{
					'1':{name:'IISc Winter School',link:'http://www.iisc.org/',comments:'This is the best in India apparently'},
					'2':{name:'IIT Winter School',link:'http://www.iitb.ac.in/',comments:''}
				};
	$scope.pbranchesNew={name:'',link:'',comments:''};

	//These are functions you shouldn't need to change at all! They should infact go into some
	//library, but for now are stuck with the controller
	{
		$scope.Update=function(type,obj,autoRefresh)
		{
			$scope.Refresh(type);		
				// truthSource.prog.update.Now(obj,function(val){
					// $scope.$apply();
					// RefreshHelp
					// if(autoRefresh==true)
						// //truthSource[type].fetch.Now(function(val){
							// //RefreshHelp(val,'progs');
							// alert("Hey! This works :)");
						// //});
					
				// });
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
					$scope.Refresh(key);		
			}			
		},1000);
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
