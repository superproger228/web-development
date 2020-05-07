PROGRAM HelloName(INPUT, OUTPUT);
USES DOS;
VAR
  Input: STRING;
BEGIN
  Input := GetEnv('QUERY_STRING');
  IF POS('name=', Input) > 0
    THEN
    IF POS('&', Input) > 0
      THEN
        WRITELN('Hello dear ', COPY(Input, 6, POS('&', Input) - 6))
      ELSE
        WRITELN('Hello dear ', COPY(Input, 6, LENGTH(Input) - 4))
    ELSE
      WRITELN('Hello anonymous')
END.
