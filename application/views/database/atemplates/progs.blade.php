<p>
<h2>About</h2>
Then something happened in the world, and alas, the website was ready!
</p>


<p>
<h2>Extravance</h2>
The world is made of tiny particles which using mechanistic theories, can explain everything there is to understand.
</p>
<!-- <center>
	<input type="text" placeholder="Search Institute Name" ng-model="searchInstitute"/>
</center>
 -->
<table>
	<tr>
		<th  style="width:100px"	>Name</th>
		<th  					>Details</th>
		<th  style="width:100px">Remarks</th>	
	</tr>

	<tr ng-repeat="(progI,prog) in progs">
		<td>
			<b>{{prog.name}}</b>
		</td>
		<td>
			<table>
				<tr>
					<th style="width:20px">Branch</th>
					<th style="width:200px">Subjects</th>
					<th style="width:200px">Positions</th>
					<th style="width:40px">Comments</th>
				</tr>
<!-- THIS IS FOR THE BRANCHES -->
				<tr ng-repeat="(pbranchI,pbranch) in pbranches | oFilter:{'prog_id':progI}:this" ng-class="{current:pbranches[pbranchI].edit}" >
	<!-- BRANCH LOCATION -->
					<td>
		<!-- VIEW LOCATION -->
						<div ng-hide="pbranches[pbranchI].edit">
							<p><a href="{{pbranches[pbranchI].link}}" target="_blank">{{locations[pbranches[pbranchI].location_id].name}} ({{locations[locations[pbranches[pbranchI].location_id].parent_id].name}})</a></p>
						</div>						
					</td>
	<!-- SUBJECTS -->					
					<td>
						<ul>							
		<!-- VIEW SUBJECTS -->		
							<div ng-hide="pbranches[pbranchI].edit">
								<li ng-repeat="(psubjectI,psubject) in psubjects | oFilter:{'pbranch_id':pbranchI}:this">
									<!-- {{subjects[psubjects[psubjectI].subject_id]}} -->
									<p><b>{{subjects[psubjects[psubjectI].subject_id].name}} ({{subjects[subjects[psubjects[psubjectI].subject_id].parent_id].name}}) </b> - {{subjects[psubjects[psubjectI].subject_id].comments}}</p>
								</li>
							</div>
						</ul>
					</td>
	<!-- THIS IS FOR POSITIONS -->
					<td>
						<ul>
		<!-- VIEW POSITIONS -->
							<div ng-hide="pbranches[pbranchI].edit">
								<li ng-repeat="(ppositionI,pposition) in ppositions | oFilter:{'pbranch_id':pbranchI}:this">
									<!-- <p>{{positions[ppositions[ppositionI].position_id].name}} ({{positions[ppositions[ppositionI].position_id].parent_id].name}}) - {{positions[ppositions[ppositionI].position_id].comments}} </p> -->
									<p>
										<a href="{{ppositions[ppositionI].link}}" target="_blank">
											{{positions[ppositions[ppositionI].position_id].name}} ({{positions[positions[ppositions[ppositionI].position_id].parent_id].name}})
										</a>
											 - {{positions[ppositions[ppositionI].position_id].comments}}
									</p>
									<p>
										Opening:
										<br/>
										{{ppositions[ppositionI].opening}}
										<br/>
										Deadline:
										<br/>
										{{ppositions[ppositionI].deadline}}
									</p>

								</li>
							</div>
						</ul>
					</td>
	<!-- COMMENTS for BRANCH -->
					<td>
						<div ng-hide="pbranches[pbranchI].edit">
								<p>{{pbranches[pbranchI].comments}}</p>
						</div>
					</td>
				</tr>
			</table>			
		</td>
		<td>
			{{prog.comments}}			
		</td>
	</tr>	
</table>