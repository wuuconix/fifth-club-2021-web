FROM python:3.7-alpine

COPY ./files /app

RUN pip install -r app/requirements.txt

WORKDIR /app

CMD sh -c "echo $FLAG > /flag && export FLAG=not_flag && FLAG=not_flag" && python app.py