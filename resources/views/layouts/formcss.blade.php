<style>

 .form_container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
  }




.input_container {
  width: 90%;
  height: fit-content;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.icon {
  width: 20px;
  position: absolute;
  z-index: 99;
  left: 12px;
  bottom: 9px;
}

.input_label {
  font-size: 0.75rem;
  color: #8B8E98;
  font-weight: 600;
}

.input_field {
  width: auto;
  height: 40px;
  padding: 0 0 0 40px;
  border-radius: 7px;
  outline: none;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #be1204;
  background-color: transparent;
}

.submit_btn {
  width: 40%;
  height: 40px;
  border: 0;
  background: #be1204;
  border-radius: 7px;
  outline: none;
  color: #ffffff;
  cursor: pointer;
}





</style>
