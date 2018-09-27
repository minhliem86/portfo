import React, {Component} from 'react';

class Project extends Component{
    render(){
        return(
            <div className="container">
                <div className="row">
                    <div className="col">
                        <h3 className="panel-title my-2">Project Table</h3>
                    </div>
                </div>
                <div className="row">
                    <div className="col">
                        <div className="wrapper-content my-2">
                            <table className="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name.</th>
                                    <th>Client</th>
                                    <th>Service</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ILA Du Học</td>
                                    <td>ILA</td>
                                    <td>Web Development</td>
                                    <td>
                                        <button type="button" className="btn btn-success btn-sm" title="Edit"><i
                                            className="fa fa-edit"></i></button>
                                        <button type="button" className="btn btn-danger btn-sm" title="Remove"><i
                                            className="fa fa-remove"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Project;