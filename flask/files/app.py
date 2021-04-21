from flask import Flask, render_template_string, render_template, request

app = Flask(__name__)
@app.route('/')
def index():
    if (request.args.get('name')):
        html = '''
        <h3>Hello %s</h3>
        ''' % (request.args.get('name'))
    else:
        html = '''
        <p>/?name=</p>
        ''' 
    return render_template_string(html)

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5000)