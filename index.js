const button = document.getElementById("add_button");
const lists = document.getElementById("lists");

function addList(user) {
  const list = document.createElement("li");
  list.innerText = user.name;
  lists.appendChild(list);
}

async function getUsers() {
  const res = await fetch("https://u4xi.github.io/test/json.php", { method: "POST" });
  const users = await res.json();
  console.log(users);
  return users;
}

async function listUsers() {
  const users = await getUsers();
  users.forEach(addList);
}

window.addEventListener("load", listUsers);
button.addEventListener("click", listUsers);