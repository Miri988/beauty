import { useForm } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";

import { Button } from "../../components/Button/Button.jsx";

import { Schema } from "./data";

import { FormField } from "../../containers/FormField/FormField.jsx";
import { useState } from "react";

import axios from "axios";


export const SignInForm = () => {

    const [firstName, setFirstName] = useState('');
    const [lastName, setLastName] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [confirmPassword, setConfirmPassword] = useState('');


    const { 
        register, 
        handleSubmit, 
        formState: { errors } 
    } = useForm({resolver: yupResolver(Schema)});

    const onSubmitHandler = () => {
       e.preventDefault();
       axios.post('/signup', {
        firstName,
        lastName,
        email,
        password,
        confirmPassword,
       })
       .then(({data}) => {

       })
       .catch(({response}) => {

       });

    }


    return (
        <>
            <div className="card auth">
                <div className="header large aligned center">
                    Register

                    <div className="subheader">
                    Please fill in the fields below:
                    </div>

                </div>
                
            
                <form className = "form" onSubmit={handleSubmit(onSubmitHandler)}>
                            
                    <FormField
                    type = "text" 
                    labelName = "First Name" 
                    value ={firstName}
                    onChange = {e => setFirstName(e.target.value)}
                    error = {errors.firstName?.message}
                    {...register("firstName")}/>
                    
                    <FormField
                    type = "text" 
                    labelName = "Last Name" 
                    value ={lastName}
                    onChange = {e => setLastName(e.target.value)}
                    error = {errors.lastName?.message}
                    {...register("lastName")}/>
                    <FormField
                    type = "email" 
                    value ={email}
                    onChange = {e => setEmail(e.target.value)}
                    placeholder = "Email" 
                    error = {errors.email?.message}
                    {...register("email")}/>
                    <FormField
                    type = "password" 
                    value ={password}
                    onChange = {e => setPassword(e.target.value)}
                    placeholder = "Password" 
                    error = {errors.password?.message}
                    {...register("password")}/>
                    <FormField
                    type = "password" 
                    value ={confirm}
                    onChange = {e => setConfirmPassword(e.target.value)}
                    placeholder = "Confirm password" 
                    error = {errors.confirmPassword?.message}
                    {...register("confirmPassword")}/>
                    <div className="field">
                        <Button className = "fluid" type = "submit"> Register </Button>
                    </div>
                    
                </form>

            </div>
            
        </>
  )
}
