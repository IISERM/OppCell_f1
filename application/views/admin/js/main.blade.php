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
			current:'Loading..',
			clear_select:{progs:'Academic Programs',
							scholarships:'Scholarships',
							jobs:'Jobs'},
			select_classname:'current2',
			current_select:{progs:'',scholarships:'',jobs:''},
			Select:{}
		},
		util:
		{
			Index:{},Toarray:{}
		}
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

	truth.util.Index=function(indexto,indexthis)
	{		
		for (var key in indexthis)
		{
			indexto.push(key);
		}
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

	$scope.progs={	'1':{name:'IISc Winter School',link:'http://www.IISc.org/',comments:'This is the best in India apparently'},
					'2':{name:'IIT Winter School',link:'http://www.iitb.ac.in/',comments:''}
				}
	$scope.progsa = [];
	// truthSource.progs.init();
	truthSource.util.Index($scope.progsa,$scope.progs);
	// truthSource.util.Toarray($scope.proga,$scope.progs);

	temp=[];
	for (var key in $scope.progs) {
	    var temp_obj={};
	    for (var key_obj in $scope.progs[key])
	    {
	    	temp_obj[key_obj]=$scope.progs[key][key_obj];
	    }
	    temp.push(temp_obj);
	}	


	// truthSource.util.toarray()
	// alert(temp[0]['name']);
	// alert(temp[0].name);

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
