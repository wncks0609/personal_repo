class character {
    constructor (Name, Side, Unit, Rank, Role, Description, imageURL) {

        this.Name = Name;
        this.Side = Side;
        this.Unit = Unit;
        this.Rank = Rank;
        this.Role = Role;
        this.Description = Description;
        this.imageURL = imageURL;
        this.clicked = false;
    }

}
const Claude = new character("Claude Wallace","Edinburgh Army", "Ranger Corps, Squad E", "First Lieutenant", "Tank Commander", "Born in the Gallian city of Hafen, this promising young squad leader is keenly attuned to climate changes and weather fluctuations. Ever since graduating as valedictorian from the Royal Military Academy, his talent and determination have been an inspiration to his subordinates.", "./Claude.jpg" );
const Riley = new character("Riley Miller","Edinburgh Army","Federate Joint Ops","Second Lieutenant","Artillery Advisor","Born in the Gallian city of Hafen, this brilliant inventor was assigned to Squad E after researching ragnite technology in the United States of Vinland. She appears to share some history with Claude, although the memories seem to be traumatic ones.","./Riley.jpg");
const Raz = new character("Raz","Edinburgh Army","Ranger Corps, Squad E","Sergeant","Fireteam Leader","Born in the Gallian city of Hafen, this foul-mouthed Darcsen worked his way up from the slums to become a capable soldier. Though foul-mouthed and reckless, his athleticism and combat prowess is top-notch... And according to him, he's invincible.","./Raz.jpg");
const Kai = new character("Kai Schulen","Edinburgh Army","Ranger Corps, Squad E","Sergeant Major","Fireteam Leader","Born in the Gallian city of Hafen, this cool and collected sharpshooter has earned the codename \"Deadeye Kai.\" Along with her childhood friends, she joined a foreign military to take the fight to the Empire. She loves fresh-baked bread, almost to a fault.","./Kai.jpg");
const Minerva = new character("Minerva Victor","Edinburgh Army","Ranger Corps, Squad F","First Lieutenant","Senior Commander","Born in the United Kingdom of Edinburgh to a noble family, this competitive perfectionist has authority over the 101st Division's squad leaders. She values honor and chivalry, though a bitter rivalry with Lt. Wallace sometimes compromises her lofty ideals.","./Minerva.jpg");
const Karen = new character("Karen Stuart","Edinburgh Army","Squad E","Corporal","Combat EMT","Born as the eldest daughter of a large family, this unflappable field medic is an expert at administering first aid in the heat of battle. Although she had plans to attend medical school, she instead enlisted in her nation's military to support her growing household.","./Karen.jpg");
const Ragnarok = new character("Ragnarok","Edinburgh Army","Squad E","K-9 Unit","Mascot","Once a stray, this good good boy is lovingly referred to as \"Rags.\"As a K-9 unit, he's a brave and intelligent rescue dog who's always willing to lend a helping paw. When the going gets tough, the tough get ruff.","./Ragnarok.jpg");
const Miles = new character("Miles Arbeck","Edinburgh Army","Ranger Corps, Squad E","Sergeant","Tank Operator","Born in the United Kingdom of Edinburgh, this excitable driver was Claude Wallace's partner in tank training, and was delighted to be assigned to Squad E. He's taken up photography as a hobby, and is constantly taking snapshots whenever on standby.","./Miles.jpg");
const Dan = new character("Dan Bentley","Edinburgh Army","Ranger Corps, Squad E","Private First Class","APC Operator","Born in the United States of Vinland, this driver loves armored personnel carriers with a passion. His skill behind the wheel is matched only by his way with a wrench. Though not much of a talker, he takes pride in carrying his teammates through combat.","./Dan.jpg");
const Ronald = new character("Ronald Albee","Edinburgh Army","Ranger Corps, Squad F","Second Lieutenant","Tank Operator","Born in the United Kingdom of Edinburgh, this stern driver was Minerva Victor's underclassman at the military academy. Upon being assigned to Squad F, he swore an oath of fealty to Lt. Victor, and takes great satisfaction in upholding her chivalric code.","./Ronald.jpg");

var charArray = [Claude,Riley,Raz,Kai,Minerva,Karen,Ragnarok,Miles,Dan,Ronald];


function setUp() {
    //create Title
    var title = document.createElement("h2");
    title.innerHTML = "Valkyria Chronicles 4";
    document.body.appendChild(title);   

    //create Squad
    var squadList = new Array(5);
    var squad = document.createElement("div");
    squad.className = "squad";
    for(var i = 0; i < squadList.length; i++)
    {
        var squadMemberId = "squad";
        squadMemberId += i;
        var squadMember = document.createElement("p");
        squadMember.setAttribute('id', squadMemberId);

        squad.appendChild(squadMember);
        document.body.appendChild(squad);
    }
    //add Event Listener to Squad to remove
    document.addEventListener("click", function (e) {
        var target = e.target;
        var elementToLookFor = "p";
        if (target.tagName.toLowerCase() === elementToLookFor) {
            var selected = target.firstChild.nodeValue;
            removeFromSquad(selected, squadList);
        }
        target = target.parentElement;
    });
    
    //create Army
    var main = document.createElement("div");
    main.className = "names";
    var charEle;
    var charName;

    for(var i = 0; i < charArray.length; i++) {
        charEle = document.createElement("span");
        charEle.setAttribute('id',charArray[i].Name);
        charName = document.createTextNode(charArray[i].Name);
        charEle.appendChild(charName);
        main.appendChild(charEle);
        document.body.appendChild(main);

        createInfo(charArray[i]);
        
    }
    //add Event Listener to Army to add to Squad
    document.addEventListener("click", function (e) {
        var target = e.target;
        var elementToLookFor = "span";
        if (target.tagName.toLowerCase() === elementToLookFor) {
            var selected = target.firstChild.nodeValue;
            selectedSpan(selected, squadList);
        }
        target = target.parentElement;
    });
    //add Event Listener to Army to show info when hover
    document.addEventListener("mouseover", function (e) {
        var target = e.target;
        var elementToLookFor = "span";
        if (target.tagName.toLowerCase() === elementToLookFor) {
            document.getElementById(getName(target.firstChild.nodeValue)).style.display = "block";
        }
        target = target.parentElement;
    });
    //add Event Listener to Army to hide info when not hover
    document.addEventListener("mouseout", function (e) {
        var target = e.target;
        var elementToLookFor = "span";
        if (target.tagName.toLowerCase() === elementToLookFor) {
            document.getElementById(getName(target.firstChild.nodeValue)).style.display = "none";
        }
        target = target.parentElement;
    });

}

function createInfo (char) {
    var info = document.createElement("div");
    info.setAttribute("class", "information");
    info.setAttribute("id", getName(char.Name));

    var imageLink = getName(char.Name) + ".jpg"
    var image = document.createElement("img");
    image.setAttribute("src", imageLink);
    info.appendChild(image);

    var charName = document.createElement("p");
    var infoName = document.createTextNode("Name : " +char.Name);
    charName.appendChild(infoName);
    info.appendChild(charName);

    var charSide = document.createElement("p");
    var infoSide = document.createTextNode("Side : " +char.Side);
    charSide.appendChild(infoSide);
    info.appendChild(charSide);

    var charUnit = document.createElement("p");
    var infoUnit = document.createTextNode("Unit : " +char.Unit);
    charUnit.appendChild(infoUnit);
    info.appendChild(charUnit);

    var charRank = document.createElement("p");
    var infoRank = document.createTextNode("Rank : "+char.Rank);
    charRank.appendChild(infoRank);
    info.appendChild(charRank);

    var charRole = document.createElement("p");
    var infoRole = document.createTextNode("Role : " +char.Role);
    charRole.appendChild(infoRole);
    info.appendChild(charRole);

    var charDescription = document.createElement("p");
    var infoDescription = document.createTextNode("Description : " + char.Description);
    charDescription.appendChild(infoDescription);
    info.appendChild(charDescription);

    document.body.appendChild(info);

}

function getName(selected) {
    var newString = "";
    for(var i = 0; i < selected.length; i++)
    {
        if(selected[i] != " ")
        {
            newString += selected[i];
        }
        else if(selected[i] == " ")
        {
            return newString;
        }
    }
    return selected;

}

function selectedSpan(selected, squadList) {
    var span = findCharacter(selected);
    
    if(span.clicked == false)
    {
        addToSquad(span, squadList);
    }
}

function removeFromSquad(selected, squadList) {
    var selectedChar = findCharacter(selected);
    var indexOfChar = squadList.indexOf(selectedChar);
    if(squadList[indexOfChar] == selectedChar)
    {
        var squadMemberId = "squad" + indexOfChar;
        document.getElementById(squadMemberId).innerHTML = "";
        document.getElementById(squadList[indexOfChar].Name).style.color = "black";
        squadList[indexOfChar].clicked = false;
        squadList[indexOfChar] = null;
        return;
    }
}

function addToSquad(span, squadList) {
    if(span.clicked == true)
    {
        return;
    }
    for(var i = 0; i < squadList.length; i++)
    {   
        if(squadList[i] == undefined || squadList[i] == null)
        {
            span.clicked = true;
            var squadMemberId = "squad";
            squadList[i] = span;
            squadMemberId +=i;
            document.getElementById(squadMemberId).innerHTML = span.Name;
            document.getElementById(span.Name).style.color = "red";
            return;
        }
    }

}

function findCharacter(selected) {
    for(var i = 0; i < charArray.length; i++)
    {
        if(selected === charArray[i].Name)
        {
            return charArray[i];
        }
    }
    return -1;
}