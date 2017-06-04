var NoteSection = React.createClass({
    getInitialState: function() {
        return {
            publicaciones: []
        }
    },

    componentDidMount: function() {
        this.loadNotesFromServer();
        //setInterval(this.loadNotesFromServer, 2000);
    },

    loadNotesFromServer: function() {
        
        $.ajax({
            //url: '/genus/octopus/notes',
            url: this.props.url,
            headers: {'Authorization': 'Bearer ' + this.props.user_token},
            success: function (response) {
                
                this.setState({publicaciones: response.data});
                
            }.bind(this)
        });
        
    },

    render: function() {
        return (
            
            <section id="featured">
                <NoteList publicaciones={this.state.publicaciones} />
            </section>
        );
    }
});

var NoteList = React.createClass({
    render: function() {
        
        var publicacionNodes = this.props.publicaciones.map(function(publicacion) {
            return (
                <NoteBox id={publicacion.id} titulo={publicacion.titulo} descripcion={publicacion.descripcion} 
                         foto={publicacion.foto} precio={publicacion.precio}
                         fecha={publicacion.fecha} horaInicio={publicacion.horaInicio}
                         horaFin={publicacion.horaFin}>
                </NoteBox>
            );
        });

        return (
            
                <div className="row">
                    {publicacionNodes}
                </div>
        );
    }
});

var NoteBox = React.createClass({
    render: function() {
        
        var divStyle = {
            backgroundImage: 'url(' + this.props.foto + ')',
        }
        
        var path_pub    = "publicacion";
        var id_pub      = this.props.id;
        
        var url = path_pub + "/" + id_pub;
        
        return (
            
            <div className="col-lg-4 col-sm-12 mb-1">
                       
                <div className="card card-cascade narrower click-eat-card">

                    <div className="view overlay hm-white-slight">
                        <div className="eat-card-image background-image-responsive" style={divStyle}>
                            {/*<img className="img-fluid" src={this.props.foto} alt="Card image cap"></img>*/}
                            <a href={url}>
                                <div className="mask waves-light"></div>
                            </a>
                        </div>    
                    </div>
                    
                    <div className="card-block text-center">
                             
                        <a href={url} className="text-muted"><h5>{this.props.titulo}</h5></a>
                        <h4 className="card-title"><strong><a href="#">{this.props.titulo}</a></strong></h4>

                        <p className="card-text block-text-ellipsis">
                        {this.props.descripcion}
                        </p>

                        <div className="card-footer">
                            <span className="left">{this.props.precio + '€'}</span>
                            <span className="right">
                                <a  className="" data-toggle="tooltip" data-placement="top" 
                                    title={this.props.fecha.split(" ")[0]}><i className="fa fa-calendar-check-o"></i></a>
                                <a className="" data-toggle="tooltip" data-placement="top" 
                                    title={this.props.horaInicio.split(" ")[1] + '-' + this.props.horaFin.split(" ")[1]}><i className="fa fa-clock-o"></i></a>
                            </span>
                        </div>

                    </div>

                </div>
                        
            </div>
        );
    }
});

window.NoteSection = NoteSection;
