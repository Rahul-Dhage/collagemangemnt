// adding and removing section for education section

const add = document.querySelector(".addmore")
const section_e = document.querySelector(".education")
var count = 1;
add.onclick = ()=>{
    const div = document.createElement("div")
    div.classList.add("addon"+count)
    div.innerHTML = `

            <h4 class="label">Qualification : </h4>
            <input required type="text" name="education${count}" placeholder="BTech (cse) ">

            <h4 class="label">Completed on : </h4>
            <input required type="text" name="year${count}"  placeholder=" eg. 2018">

            <h4 class="label">Board/Univercity : </h4>
            <input required type="text" name="board${count}" placeholder=" DBatu lonere ">

            <h4 class="label">Passing marks (CGPA/Percentage) </h4>
            <input required type="text" name="marks${count}"  placeholder=" eg. 9.1">

            
            `;
    section_e.appendChild(div);

    const tracker = document.querySelector('.tracker')
    tracker.value = count;
    count++; 

}

function removediv(class_){
     const div = document.querySelector(`.${class_}`);
     div.remove();
}

// add or remove skills 

const skill = document.querySelector(".skill")
const section_s = document.querySelector(".skills")
var skills_c = 1;
skill.onclick = ()=>{
    const div = document.createElement("div")
    div.classList.add("addon-skill"+skills_c)
    div.innerHTML = `
    <h4 class="label">Skill </h4>
    <input type="text" required name="skill${skills_c}" placeholder="eg . nodejs">

    <h4 class="label">Skill level: </h4>
    <select  required name="level${skills_c}" id="">
        <option value="begineer">Beginner</option>
        <option value="intermediate">Intermediate</option>
        <option value="advanced">Advanced</option>
    </select>
    <input type="hidden" value='${skills_c}' name="skill_count" class='tracker'>
    
            `;
    section_s.appendChild(div);
    skills_c++;
}

// add or remove skills 


//