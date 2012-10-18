angular.module('oppapp',[])
.config(function($routeProvider)
{
    $routeProvider.
      when('/', {redirectTo:'/progs'}).
      when('/progs', {controller:c_progs, templateUrl:'{=URL::to('admin')=}/atemplates_progs'}).
      when('/scholarships', {controller:c_scholarships, templateUrl:'{=URL::to('admin')=}/atemplates_scholarships'}).
      otherwise({redirectTo:'/'});
})
.filter('startFrom', function()
{
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
})
.factory('truthSource',function()
{
	//CONVENTIONS
	//everything is small camel cased
	//functions start with capitals
	//http://localhost/IISERM/elections/public
	var truth=
	{
		prog:
			{	
					fetch:{Now:{},lnk:'/plist'},
					add:{Now:{},lnk:'/padd'},
					remove:{Now:{},lnk:'/pdel'},
					update:{Now:{},lnk:'/pupdate'},
					config:{basePath:'/admin'},
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
				basePath:"",addIndexDotPHP:"/index.php"
			}
		},
		nav:
		{
			// blank:[{progs:''},{scholarships:''}],
			select_classname:'current',
			current_select:{progs:'',scholarships:'',jobs:''},
			select:{}
		}
	}

	truth.nav.select=function(val)
	{
		for(var key in  truth.nav.current_select)
		{
			truth.nav.current_select[key]='none';
		}
		truth.nav.current_select[val]=truth.nav.select_classname;
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
	
	// truthSource.nav.current_select['progs']='current';
	truthSource.nav.select('progs');
	// $scope.$apply();
	$scope.truthSource=truthSource;

}

function c_scholarships($scope,truthSource,$timeout)
{
	// truthSource.nav.current_select=['','current',''];
	truthSource.nav.select('scholarships');
	// $scope.$apply();
	$scope.truthSource=truthSource;
}
// alert('hello');
