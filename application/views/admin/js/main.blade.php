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
		prog:
			{
					fetch:{Now:{},lnk:'/list'},
					add:{Now:{},lnk:'/padd'},
					remove:{Now:{},lnk:'/pdel'},
					update:{Now:{},lnk:'/pupdate'},
					config:{basePath:'/prog'},
					data:{}
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
			// blank:[{progs:''},{scholarships:''}],
			current:'Loading..',
			clear_select:{progs:'Academic Programs',
							scholarships:'Scholarships',
							jobs:'Jobs'},
			select_classname:'current2',
			current_select:{progs:'',scholarships:'',jobs:''},
			Select:{}
		},
	}

	function FetchHelp(lnk,truthData,targetFunction)
	{
		truth.io.state.working=true;
		$http.get(truth.io.config.basePath + lnk)
		.success(function(data)
		{
			$log.log(data);
			truthData=data;
			targetFunction(truthData);
		})
		.error(function(data,status){
			$log.error(data+' '+status);
			targetFunction(truthData);
		});
	}

	truth.prog.fetch.Now=function(OnComplete)
	{
		FetchHelp(truth.prog.fetch.lnk + truth.prog.config.basePath,
			truth.prog.data,OnComplete);
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
	
	// $scope.$watch('')
	// $scope.current_select=truthSource.nav.current_select;
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
				}

	$scope.Update=function(type,obj,autoRefresh)
	{
		if(type=='progs')
		{
			// truthSource.prog.update.Now(obj,function(val){
				// $scope.$apply();
				if(autoRefresh==true)
					truthSource.prog.fetch.Now(function(val){
						$scope.$apply();
						$scope.updatingInterface=true;
						$scope.$apply();
						prog=val;
						$scope.updatingInterface=false;
						$scope.$apply();

					});
				alert("Hey! This works :)");
			// });
		}
	}

	// RefreshHelp=function(val,source){
	// 	$scope.$apply();
	// 	$scope.updatingInterface=true;
	// 	$scope.$apply();
	// 	source=val;
	// 	$scope.updatingInterface=false;
	// 	$scope.$apply();
	// }
}

function c_scholarships($scope,truthSource,$timeout)
{
	// truthSource.nav.current_select=['','current',''];
	truthSource.nav.Select('scholarships');
	// $scope.$apply();
	$scope.truthSource=truthSource;
}
// alert('hello');

function c_jobs($scope,truthSource,$timeout)
{
	// truthSource.nav.current_select=['','current',''];
	truthSource.nav.Select('jobs');
	// $scope.$apply();
	$scope.truthSource=truthSource;
}
