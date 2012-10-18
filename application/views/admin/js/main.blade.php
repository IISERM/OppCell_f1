angular.module('oppapp',[])
.config(function($routeProvider) 
{
    $routeProvider.
      when('/', {redirectTo:'/progs'}).
      when('/progs', {controller:c_progs, templateUrl:'/atemplates/progs'}).
      when('/scholarhips', {controller:c_scholarships, templateUrl:'/atemplates/scholarships'}).
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
		}
	}
});


function c_oppcell($scope,$timeout)
{
	var current_progs='current';
}

function c_progs($scope,truthSource,$timeout)
{
	var current_progs='current';
}

function c_scholarships($scope,truthSource,$timeout)
{
	
}
alert('hello');
