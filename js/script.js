const { createApp } = Vue;

createApp({
  data() {
    return {
      toDo: [],
      elTitle: "",
      itemText: "",
      done: "",
    };
  },
  methods: {
    toggleDone(id) {
      const data = {
        id: id,
      };
      axios.put("api.php", data).then((response) => {
        this.toDo = response.data;
      });
    },
    removeItem(id) {
      const data = {
        id: id,
      };
      axios.delete("api.php", { data }).then((response) => {
        this.toDo = response.data;
      });
    },
    addItem() {
      const newItem = {
        id: null,
        title: this.elTitle,
        description: this.itemText,
        done: false,
      };
      const result = this.toDo.reduce((acc, element) => {
        return element.id > acc ? element.id : acc;
      }, 0);
      newItem.id = result + 1;

      const data = new FormData();
      data.append("id", newItem.id);
      data.append("title", newItem.title);
      data.append("description", newItem.description);
      data.append("done", newItem.done);
      axios.post("api.php", data).then((response) => {
        this.toDo = response.data;
      });
      this.elTitle = "";
      this.itemText = "";
    },
    getData() {
      axios.get("api.php").then((response) => {
        this.toDo = response.data;
      });
    },
  },
  computed: {
    filteredToDo() {
      return this.toDo.filter((element) => {
        if (this.done === "") {
          return true;
        } else if (this.done === "0") {
          return element.done === true;
        } else if (this.done === "1") {
          return element.done === false;
        }
      });
    },
  },
  created() {
    this.getData();
  },
}).mount("#app");