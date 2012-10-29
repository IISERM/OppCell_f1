<h2>Blade-AngularJS UI</h2>

<!-- <center>
	<input type="text" placeholder="Search Institute Name" ng-model="searchInstitute"/>
</center>
 -->
<table>
	<tr>
		<th  style="width:20px"	>Name</th>
		<th  					>Details</th>
		<th  style="width:100px">Remarks</th>
		<th 					>Control</th>
	</tr>

	<tr ng-repeat="(scholarI,scholar) in scholars">
		<td>
			<input type="text" ng-model="scholar.name" />
			<p><a ng-click="Update('scholars',scholarI,scholar,true)">Save</a></p>
		</td>
		<td>
			<table>
				<tr>
					<th style="width:20px">Branch</th>
					<th style="width:200px">Subjects</th>
					<th style="width:200px">Positions</th>
					<th style="width:40px">Comments</th>
					<th 				>Control</th>
				</tr>
<!-- THIS IS FOR THE BRANCHES -->
				<tr ng-repeat="(sbranchI,sbranch) in sbranches | oFilter:{'scholar_id':scholarI}:this" ng-class="{current:sbranches[sbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="sbranches[sbranchI].edit">
							<p><a href="{{sbranches[sbranchI].link}}" target="_blank">{{locations[sbranches[sbranchI].location_id].name}} ({{locations[locations[sbranches[sbranchI].location_id].parent_id].name}})</a></p>
						</div>

		<!-- EDIT LOCATION -->
						<div ng-show="sbranches[sbranchI].edit">	
							<!-- <select ng-model="sbranches[sbranchI].location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select> -->
							<b>{{locations[sbranches[sbranchI].location_id].name}} ({{locations[locations[sbranches[sbranchI].location_id].parent_id].name}})</b>
							<input type="text" ng-model="sbranches[sbranchI].link"></input>
						</div>
						
					</td>
	<!-- SUBJECTS -->					
					<td>
						<ul>							
		<!-- VIEW SUBJECTS -->		
							<div ng-hide="sbranches[sbranchI].edit">
								<li ng-repeat="(ssubjectI,ssubject) in ssubjects | oFilter:{'sbranch_id':sbranchI}:this">
									<!-- {{subjects[ssubjects[ssubjectI].subject_id]}} -->
									<p><b>{{subjects[ssubjects[ssubjectI].subject_id].name}} ({{subjects[subjects[ssubjects[ssubjectI].subject_id].parent_id].name}}) </b> - {{subjects[ssubjects[ssubjectI].subject_id].comments}}</p>
								</li>
							</div>

		<!-- EDIT SUBJECTS -->		
							<div ng-show="sbranches[sbranchI].edit">
			<!-- EDIT EXISTING SUBJECTS -->		
								<li ng-repeat="(ssubjectI,ssubject) in ssubjects | oFilter:{'sbranch_id':sbranchI}:this">
									<!-- <select ng-model="ssubjects[ssubjectI].subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select> -->
									<input type="text" ng-model="subjects[ssubjects[ssubjectI].subject_id].comments"></input>

									<p>
										<b>{{subjects[ssubjects[ssubjectI].subject_id].name}}</b>
										<br/>
										Comments: {{subjects[ssubjects[ssubjectI].subject_id].comments}}
									</p>

									<p><a ng-click="Update('subjects',ssubjectI,subjects[ssubjects[ssubjectI].subject_id],true)">Update Subject</a>
									| <a ng-click="Remove('ssubjects',ssubjectI,true)">X</a></p>									
								</li>

			<!-- ADD SUBJECTS -->		
								<div ng-hide="sbranches[sbranchI].addsubject" class="addnew">
									<p><a ng-click="sbranches[sbranchI].addsubject=true">Add Subject</a></p>
								</div>

								<div ng-show="sbranches[sbranchI].addsubject" class="addnew">
									
									<select ng-model="ssubjectNew.subject_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects"></select>
									<p><a ng-click="Add('ssubjects',ssubjectNew,true,{'sbranch_id':sbranchI})">Add</a></p>
								
									<p><a ng-click="sbranches[sbranchI].addsubject=false">Hide</a></p>
								</div>

			<!-- CREATE SUBJECTS -->
								<div ng-hide="sbranches[sbranchI].createsubject" class="createnew">
									<p><a ng-click="sbranches[sbranchI].createsubject=true">Create Subject</a></p>
								</div>
								<div ng-show="sbranches[sbranchI].createsubject" class="createnew">
									<p>
										<label>Name of Subject</label>
										<input type="text" ng-model="subjectNew.name"/>
									</p>
									<p>
										<label>Parent</label>
										<select ng-model="subjectNew.parent_id" ng-options="subjectI as (subject.name+'('+subjects[subject.parent_id].name+')' ) for (subjectI,subject) in subjects | oFilter:{'parent_id':''}"></select>	
									</p>
									<p>
										<label>Comments</label>
										<input type="text" ng-model="subjectNew.comments"/>
									</p>
									<p><a ng-click="Add('subjects',subjectNew,true)">Add</a></p>
									
									<p><a ng-click="sbranches[sbranchI].createsubject=false">Hide</a></p>
								</div>

							</div>
						</ul>

					</td>
	<!-- THIS IS FOR POSITIONS -->
					<td>
						<ul>
		<!-- VIEW POSITIONS -->
							<div ng-hide="sbranches[sbranchI].edit">
								<li ng-repeat="(spositionI,sposition) in spositions | oFilter:{'sbranch_id':sbranchI}:this">
									<!-- <p>{{positions[spositions[spositionI].position_id].name}} ({{positions[spositions[spositionI].position_id].parent_id].name}}) - {{positions[spositions[spositionI].position_id].comments}} </p> -->
									<p>
										<a href="{{spositions[spositionI].link}}" target="_blank">
											{{positions[spositions[spositionI].position_id].name}} ({{positions[positions[spositions[spositionI].position_id].parent_id].name}})
										</a>
											 - {{positions[spositions[spositionI].position_id].comments}}
									</p>
									<p>
										Opening:
										<br/>
										{{spositions[spositionI].opening}}
										<br/>
										Deadline:
										<br/>
										{{spositions[spositionI].deadline}}
									</p>

								</li>
							</div>
		<!-- EDIT POSITIONS -->
							<div ng-show="sbranches[sbranchI].edit">
			<!-- EDIT EXISTING POSITIONS -->
								<li ng-repeat="(spositionI,sposition) in spositions | oFilter:{'sbranch_id':sbranchI}:this">

									<input type="text" ng-model="positions[spositions[spositionI].position_id].comments"/>									
									<p>
										<b>{{positions[spositions[spositionI].position_id].name}} ({{positions[positions[spositions[spositionI].position_id].parent_id].name}})</b>
										<br/>
										{{positions[spositions[spositionI].position_id].comments}}
									</p>
									
									<p>
										Opening: <input type="text" ng-model="spositions[spositionI].opening"/>
										<br/>
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{spositions[spositionI].opening}}"/>  -->
										Deadline: <input type="text" ng-model="spositions[spositionI].deadline"/>
										<!-- <br/> -->
										<!-- <input type="date" date-format="YYYY-MM-DD" ng-value="{{spositions[spositionI].deadline}}"/> -->
										Link: <input type="text" ng-model="spositions[spositionI].link"/>
									</p>

									<p><a ng-click="Update('positions',spositionI,positions[spositions[spositionI].position_id],true)">Update Position</a>
									| <a ng-click="Remove('spositions',spositionI,true)">X</a></p>									

								</li>

			<!-- ADD POSITIONS -->
								<div ng-hide="sbranches[sbranchI].addposition" class="addnew">
									<p><a ng-click="sbranches[sbranchI].addposition=true">Add Position</a></p>
								</div>

								<div ng-show="sbranches[sbranchI].addposition" class="addnew">
									
									<select ng-model="spositionNew.position_id" ng-options="positionI as (position.name+'('+positions[position.parent_id].name+')' ) for (positionI,position) in positions"></select>									
									<br/>
									Opening: <input type="text" ng-model="spositionNew.opening"/>
									<br/>
									Deadline: <input type="text" ng-model="spositionNew.deadline"/>
									<br/>
									Link: <input type="text" ng-model="spositionNew.link"/>

									<p><a ng-click="Add('spositions',spositionNew,true,{'sbranch_id':sbranchI})">Add</a></p>
								
									<p><a ng-click="sbranches[sbranchI].addposition=false">Hide</a></p>
								</div>

			<!-- CREATE POSITIONS -->
								<div ng-hide="sbranches[sbranchI].createposition" class="createnew">
									<p><a ng-click="sbranches[sbranchI].createposition=true">Create Position</a></p>
								</div>
								<div ng-show="sbranches[sbranchI].createposition" class="createnew">
									<p>
										<label>Name of Position</label>
										<input type="text" ng-model="positionNew.name"/>
									</p>
									<p>
										<label>Parent</label>
										<select ng-model="positionNew.parent_id" ng-options="positionI as (position.name+'('+positions[position.parent_id].name+')' ) for (positionI,position) in positions | oFilter:{'parent_id':''}"></select>	
									</p>
									<p>
										<label>Comments</label>
										<input type="text" ng-model="positionNew.comments"/>
									</p>
									<p><a ng-click="Add('positions',positionNew,true)">Add</a></p>
									
									<p><a ng-click="sbranches[sbranchI].createposition=false">Hide</a></p>
								</div>

							</div>

					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="sbranches[sbranchI].edit">
								<p>{{sbranches[sbranchI].comments}}</p>
						</div>

						<div ng-show="sbranches[sbranchI].edit">
								<input type="text" ng-model="sbranches[sbranchI].comments"></input>
						</div>
					</td>
	<!-- CONTROL FOR BRANCH -->
					<td ng-show="sbranches[sbranchI].edit">
						<ul>
							<li><a ng-click="sbranches[sbranchI].edit=false">Lock</a></li>
							<li><a ng-click="Update('sbranches',sbranchI,sbranches[sbranchI],true)">Update Branch</a></li> 
							<li><a ng-click="Remove('sbranches',sbranchI,true)">X</a></li>
						</ul>
					</td>					
					<td ng-hide="sbranches[sbranchI].edit">
						<a ng-click="[(sbranches[sbranchI].edit=true),digest()]">Edit</a>
					</td>
				</tr>
<!-- ADDING A BRANCH/CREATE LOCATION -->
				<tr>
					<td>
		<!-- ADDING A BRANCH -->
						<div ng-hide="scholar.addbranch" class="addnew">
							<p><a ng-click="scholar.addbranch=true">Add New Branch</a></p>
						</div>

						<div ng-show="scholar.addbranch" class="addnew">
							<select ng-model="sbranchesNew.location_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations"></select>
							<p>Link: <input type="text" ng-model="sbranchesNew.link"></input></p>
							<p>Comments: <input type="text" ng-model="sbranchesNew.comments"></input></p>
							<p><a ng-click="Add('sbranches',sbranchesNew,true,{'scholar_id':scholarI})">Add</a></p>
							<p><a ng-click="scholar.addbranch=false">Hide</a></p>
						</div>
		<!-- CREATE LOCATION -->
						<div ng-hide="scholar.createlocation" class="createnew">
							<p><a ng-click="scholar.createlocation=true">Create Location</a></p>
						</div>
						<div ng-show="scholar.createlocation" class="createnew">
							<label>Name of Location</label>
							<input type="text" ng-model="locationNew.name"/>
							<label>Parent</label>
								<select ng-model="locationNew.parent_id" ng-options="locationI as (location.name+'('+ locations[location.parent_id].name+')' ) for (locationI,location) in locations | oFilter:{'parent_id':''}"></select>
							<p><a ng-click="Add('locations',locationNew,true)">Add</a></p>					
							<p><a ng-click="scholar.createlocation=false">Hide</a></p>
						</div>

					</td>
				</tr>
			</table>			
		</td>
		<td>
			<input type="text" ng-model="scholar.comments" />
			<p><a ng-click="Update('scholars',scholarI,scholar,true)">Save</a></p>
		</td>
		<td>
			<p><a ng-click="Update('scholars',scholarI,scholar,true)">Update</a></p>			
			<p><a ng-click="Remove('scholars',scholarI,true)">Remove</a></p>
		</td>
	</tr>	
	<tr>
		<td>
			<div class="createnew">
				<input type="text" ng-model="scholarNew.name" />
				<p><a ng-click="Add('scholars',scholarNew,true)">Add</a></p>
			</div>
		</td>
	</tr>
</table>