import React from 'react';
import {Field, reduxForm} from 'redux-form';
import {withRouter} from 'react-router-dom';
import Login from "../components/Login";

/*VALIDATE*/
const validate = values => {
    const errors = {}
    if(!values.password){
        errors.password = 'Required';
    }
    if(!values.email){
        errors.email = 'Required';
    }else if (!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(values.email)){
        errors.email = 'Invalid email address';
    }
    return errors;
}

const FormField = ({
       label,
       name,
       input,
       type,
       className,
       meta: {touched, error}
   })=> (
    <div className="form-group" key={name}>
        <input {...input} name={name} type={type} placeholder={label} className={`${className}  ${((touched && error && 'is-invalid'))}`} />
        {
            (touched && error && <span className={"invalid-feedback"}>{error}</span> )
        }
    </div>
);

const LoginForm = props => {
    /*FORM FIELD*/

    const {handleSubmit, submitting, pristine} = props;

    return (
        <div className="position-fixed w-100 h-100" style={{top:0, left: 0, 'zIndex':100}}>
            <div className="d-flex h-100 justify-content-center align-items-center">
                <div className="card w-50">
                    <div className="card-body">
                        <h3 className="card-title mb-4">
                            ĐĂNG NHẬP
                        </h3>
                        <div className="form-wrapper">
                            <form onSubmit={handleSubmit}>
                                <Field
                                    label={`Email Address`}
                                    name={`email`}
                                    component={FormField}
                                    type={`email`}
                                    className={`form-control`}
                                />
                                <Field
                                    label={`Password`}
                                    name={`password`}
                                    component={FormField}
                                    type={`password`}
                                    className={`form-control`}
                                />
                                <div className="form-group">
                                    <button type="submit" className="btn btn-primary" disabled={pristine || submitting}>Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default reduxForm({
    form: 'loginForm',
    validate
})(LoginForm);